<?php

namespace App\Http\Controllers;


use view;

use Response;
use App\Models\User;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Notifications\UserCreated;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Repositories\RoleRepository;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use App\Repositories\StaffRepository;
use Modules\Shared\Models\Department;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Modules\WorkflowEngine\Models\Staff;
use Modules\HumanResource\Models\Ranking;
use App\Http\Controllers\AppBaseController;
use App\Mail\EBSMail;
use Illuminate\Support\Facades\Notification;
use Modules\Shared\Repositories\BranchRepository;
use Modules\Shared\Repositories\DepartmentRepository;
use Modules\HumanResource\Repositories\RankingRepository;
use Illuminate\Support\Facades\Mail;

class UserController extends AppBaseController
{
    /** @var $userRepository UserRepository */
    private $userRepository;

    /** @var $userRepository UserRepository */
    private $roleRepository;

    /** @var $branchRepository BranchRepository */
    private $branchRepository;

    /** @var $departmentRepository DepartmentRepository */
    private $departmentRepository;

    /** @var $staffRepository StaffRepository */
    private $staffRepository;

    /** @var $rankRepository RankingRepository */
    private $rankRepository;

    public function __construct(RankingRepository $rankRepo, UserRepository $userRepo, RoleRepository $roleRepo, BranchRepository $branchRepo, DepartmentRepository $departmentRepo, StaffRepository $staffRepo)
    {
        $this->userRepository = $userRepo;
        $this->roleRepository = $roleRepo;
        $this->branchRepository = $branchRepo;
        $this->departmentRepository = $departmentRepo;
        $this->staffRepository = $staffRepo;
        $this->rankRepository=$rankRepo;
    }
    

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $usersQuery = DB::table('users')
            ->join('staff', 'users.id', '=', 'staff.user_id')
            ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->join('departments', 'staff.department_id', '=', 'departments.id')
            ->join('branches', 'staff.branch_id', '=', 'branches.id')
            ->select('users.id', 'roles.name as role', 'users.first_name', 'users.middle_name', 'users.last_name', 'users.email', 'users.status','departments.department_unit','branches.branch_name');
        
        $noroleQuery = DB::table('users')
            ->leftJoin('staff', 'users.id', '=', 'staff.user_id')
            ->leftJoin('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->whereNull('model_has_roles.role_id')
            ->join('departments', 'staff.department_id', '=', 'departments.id')
            ->join('branches', 'staff.branch_id', '=', 'branches.id')
            ->select('users.id', DB::raw("NULL as role"), 'users.first_name', 'users.middle_name', 'users.last_name', 'users.email', 'users.status', 'departments.department_unit', 'branches.branch_name');
    
        $uid = Auth::user()->user_id;
    
        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%';
    
            $usersQuery->where(function ($query) use ($searchTerm) {
                $query->where('first_name', 'like', $searchTerm)
                    ->orWhere('middle_name', 'like', $searchTerm)
                    ->orWhere('last_name', 'like', $searchTerm)
                    ->orWhere('email', 'like', $searchTerm);
            });
    
            $noroleQuery->where(function ($query) use ($searchTerm) {
                $query->where('first_name', 'like', $searchTerm)
                    ->orWhere('middle_name', 'like', $searchTerm)
                    ->orWhere('last_name', 'like', $searchTerm)
                    ->orWhere('email', 'like', $searchTerm);
            });
        }
    
        $users = $usersQuery->paginate(10);
        $norole = $noroleQuery->paginate(10);
    
        return view('users.index', compact('users', 'norole'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('term');

        $users = User::where('first_name', 'like', '%' . $searchTerm . '%')
            ->get(['id', 'first_name']);

        return response()->json($users);
    }
    
    public function html_email() {
        $mailData = [
            'title' => 'Mail from nsitf.gov.ng',
            'body' => 'This is for testing email using smtp.'
        ];
         
       $send = Mail::to('tacticshustle@gmail.com')->send(new EBSMail($mailData));
           
        if($send){
            echo "Great!  mail successfully send!";
        }else{
            echo "Sorry!  mail not sent!";
        }
        
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()

    {
        
        // $rank=Ranking::pluck('name','id')->all();
        $rank=$this->rankRepository->all()->pluck('name','id');
        $roles = Role::pluck('name', 'id')->all();
        $roles = $this->roleRepository->all()->pluck('name', 'id');
        $roles->prepend('Select role', '');
        $branch = $this->branchRepository->all()->pluck('branch_name', 'id');
        $department = $this->departmentRepository->all()->pluck('department_unit', 'id');
        return view('users.create', compact('roles', 'branch', 'department','rank'));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */

    public function store(CreateUserRequest $request)
    {
 
       
        $input = $request->all();
    
        $input['password'] = Hash::make($input['password']);
       
        
        //Create a new user
        $user = $this->userRepository->create($input);

        // Retrieve the value of the checkbox
        $checkboxValue = $request->input('checkbox');

        // Check if the checkbox is checked
        if ($checkboxValue == 1) {
            // Checkbox is checked
            //Get user id from newly created user and assign it to user_id post input
            $input['user_id'] = $user->id;
            //Check for file upload and upload to public  directory
            if ($request->hasFile('profile_picture')) {
                $file = $request->file('profile_picture');
                $fileName = $file->hashName();
                $path = $file->store('public');
                $input['profile_picture'] = $fileName;
            }
            //Create a new staff
            $this->staffRepository->create($input);
        }

        $role = $this->roleRepository->getByUserRoles($input['roles']);

        if (empty($role)) {
            Flash::error('Role not found');

            return redirect(route('users.index'));
        }


        $user->assignRole($role);
        // Send notification to user about his account details
       // Notification::send($user, new UserCreated($input));

        Flash::success('User saved successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mergedResults = $this->userRepository->getSomeTablesData($id);

        return view('users.show')->with('user', $mergedResults);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */

    
     

    //$rank= $this->rankRepository->all()->pluck('name','id');
    public function edit($id)
    {

        $user = $this->userRepository->getByUserId($id);

        $branch = $this->branchRepository->all()->pluck('branch_name', 'id');
        
        $department = $this->departmentRepository->all()->pluck('department_unit', 'id');

        
        $rank= Ranking::all()->pluck('name','id');

        if (empty($user)) {
            Flash::error('User not a staff so it can not be edited');

            return redirect(route('users.index'));
        }


        //$user['role_id'] = $user1->roles()->first()->id;

        $roles = $this->roleRepository->all()->pluck('name', 'id');

        $roles->prepend('Select role', '');

        return view('users.edit', compact('user', 'roles', 'branch', 'department', 'id','rank'));
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    //bring out icon for approve


    
    public function update($id, UpdateUserRequest $request)
    {
    //    dd($request->all());

        $user = $this->userRepository->getByUserId($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $input =  $request->all();

        // Retrieve the value of the checkbox
        $checkboxValue = $request->input('checkbox');

        // Check if the checkbox is checked
        if ($checkboxValue == 1) {
            // Checkbox is checked
            //Get user id from newly created user and assign it to user_id post input
            $input['user_id'] = $user->userId;
            //Check for file upload and upload to public  directory
            if ($request->hasFile('profile_picture')) {
                $file = $request->file('profile_picture');
                $fileName = $file->hashName();
                $path = $file->store('public');
                $input['profile_picture'] = $fileName;
            } else {
                // prevent picture from updating db since there is no upload
                unset($input['profile_picture']);
            }
            // prevent email from updating since email is unique
            unset($input['email']);
            //Create a new staff
            $this->staffRepository->update($input, $user->staff_id);
        }

        $role = $this->roleRepository->getByUserRoles($input['roles']);

        if (empty($role)) {
            Flash::error('Role not found');

            return redirect(route('users.index'));
        }

        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }

        $user = $this->userRepository->update($input, $id);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        //$user->assignRole($request->input('roles'));

       $user->roles()->detach();
        $user->assignRole($role);


        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */

    


    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        if ($user->hasRole('super-admin')) {
            Flash::error('Cannot delete super admin');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }

    //function for profile
    public function manage_account($id)
    {
        echo "I am here! " . $id;
    }

}

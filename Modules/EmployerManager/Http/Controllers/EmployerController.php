<?php

namespace Modules\EmployerManager\Http\Controllers;

use Modules\EmployerManager\Http\Requests\CreateEmployerRequest;
use Modules\EmployerManager\Http\Requests\UpdateEmployerRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\LocalGovt;
use App\Models\State;
use App\Models\User;
use Modules\EmployerManager\Repositories\EmployerRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;
use Modules\EmployerManager\Models\Employee;
use Modules\EmployerManager\Models\Employer;
use Modules\Shared\Repositories\BranchRepository;
use Illuminate\Support\Facades\Auth;

class EmployerController extends AppBaseController
{
    /** @var EmployerRepository $employerRepository*/
    private $employerRepository;

    /** @var $branchRepository BranchRepository */
    private $branchRepository;

    public function __construct(EmployerRepository $employerRepo, BranchRepository $branchRepo)
    {
        $this->employerRepository = $employerRepo;
        $this->branchRepository = $branchRepo;
    }

    /**
     * Display a listing of the Employer.
     */
    public function index(Request $request)
    {

        $state = State::where('status', 1)->get();
        $local_govt = LocalGovt::where('status', 1)->get();

        $s_branchId = intval(session('branch_id'));
        $employers = Employer::where('branch_id', $s_branchId)->orderBy('created_at', 'DESC');

        if ($request->filled('search')) {
            $employers->where('ecs_number', 'like', '%' . $request->search . '%')
                ->orWhere('company_name', 'like', '%' . $request->search . '%')
                ->orWhere('company_email', 'like', '%' . $request->search . '%')
                ->orWhere('company_address', 'like', '%' . $request->search . '%')
                ->orWhere('company_rcnumber', 'like', '%' . $request->search . '%')
                ->orWhere('company_phone', 'like', '%' . $request->search . '%')
                ->orWhere('company_localgovt', 'like', '%' . $request->search . '%')
                ->orWhere('company_state', 'like', '%' . $request->search . '%')
                ->orWhere('business_area', 'like', '%' . $request->search . '%')
                ->orWhere('status', 'like', '%' . $request->search . '%');
        }

        $pendingstaff = Employer::where('status', 0)->paginate(10);
        $activestaff = Employer::where('status', 1)->paginate(10);
        // shehu comment down
        // $employers = $this->employerRepository->paginate(10);
        $employers = $employers->paginate(10);
        return view('employermanager::employers.index', compact('employers', 'state', 'local_govt', 'pendingstaff', 'activestaff'));
    }

    /**
     * Show the form for creating a new Employer.
     */
    public function create()
    {
        $state = State::where('status', 1)->get();
        $local_govt = LocalGovt::where('status', 1)->get();

        $employers = User::whereHas('staff', function($query){
            $query->where('branch_id', auth()->user()->staff->branch_id);
        })->get();

        $branches = $this->branchRepository->all()->pluck('branch_name', 'id');
        $branches->prepend('Select branch', '');

        return view('employermanager::employers.create', compact('employers', 'state', 'local_govt', 'branches'));
    }

    /**
     * Store a newly created Employer in storage.
     */
    public function store(CreateEmployerRequest $request)
    {
        $input = $request->all();
        $input['created_by'] =  Auth::user()->id;

        $last_ecs = Employer::get()->last();

        if ($last_ecs) {
            //if selected ecs belongs to another employer
            do {
                $ecs = $last_ecs['ecs_number'] + 1;
                $employer_exists = Employer::where('ecs_number', $ecs)->get()->last();
            } while ($employer_exists);
        } else {
            $ecs = '1000000001';
        }

        $input['ecs_number'] = $ecs;

        $employer = $this->employerRepository->create($input);

        Flash::success('Employer saved successfully.');

        return redirect(route('employers.index'));
    }

    /**
     * Display the specified Employer.
     */
    public function show($id)
    {
        $employer = $this->employerRepository->find($id);
        $state = State::where('status', 1)->get();
        $local_govt = LocalGovt::where('status', 1)->get();


        if (empty($employer)) {
            Flash::error('Employer not found');

            return redirect(route('employers.index'));
        }

        return view('employermanager::employers.show', compact('employer', 'state', 'local_govt'));
    }

    /**
     * Show the form for editing the specified Employer.
     */
    public function edit($id)
    {
        $state = State::where('status', 1)->get();
        $local_govt = LocalGovt::where('status', 1)->get();

        $employer = $this->employerRepository->find($id);
        $employers = User::get();

        if (empty($employer)) {
            Flash::error('Employer not found');

            return redirect(route('employers.index'));
        }

        $branches = $this->branchRepository->all()->pluck('branch_name', 'id');
        $branches->prepend('Select branch', '');

        return view('employermanager::employers.edit', compact('branches', 'employer', 'employers', 'state', 'local_govt'));
    }

    /**
     * Update the specified Employer in storage.
     */
    public function update($id, UpdateEmployerRequest $request)
    {
        $employer = $this->employerRepository->find($id);
        $employer['updated_by'] =  Auth::user()->id;
        $employer->save();

        if (empty($employer)) {
            Flash::error('Employer not found');

            return redirect(route('employers.index'));
        }

        $employer = $this->employerRepository->update($request->all(), $id);

        Flash::success('Employer updated successfully.');

        return redirect(route('employers.index'));
    }

    /**
     * Remove the specified Employer from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $employer = $this->employerRepository->find($id);
        $employer['deleted_by'] = Auth::user()->id;
        $employer->save();

        if (empty($employer)) {
            Flash::error('Employer not found');

            return redirect(route('employers.index'));
        }

        $this->employerRepository->delete($id);

        Flash::success('Employer deleted successfully.');

        return redirect(route('employers.index'));
    }

    public function employees(Request $request, $id)
    {

        $employer = $this->employerRepository->find($id);
        $employees = Employee::where('employer_id', '=', $employer->id);

        if ($request->filled('search')) {
            $employees->where('last_name', 'like', '%' . $request->search . '%')
                ->orWhere('first_name', 'like', '%' . $request->search . '%')
                ->orWhere('middle_name', 'like', '%' . $request->search . '%')
                ->orWhere('date_of_birth', 'like', '%' . $request->search . '%')
                ->orWhere('gender', 'like', '%' . $request->search . '%')
                ->orWhere('marital_status', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')
                ->orWhere('employment_date', 'like', '%' . $request->search . '%')
                ->orWhere('monthly_renumeration', 'like', '%' . $request->search . '%')
                ->orWhere('status', 'like', '%' . $request->search . '%');
        }

        $employees = $employees->paginate(10);

        return view('employermanager::employers.employee', compact('employer', 'employees'));
    }
}

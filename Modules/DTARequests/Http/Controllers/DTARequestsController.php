<?php

namespace Modules\DTARequests\Http\Controllers;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\DB;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use App\Repositories\StaffRepository;
use Modules\UnitManager\Models\UnitHead;
use Modules\Shared\Models\DepartmentHead;
use App\Http\Controllers\AppBaseController;
use Modules\DTARequests\Models\DTARequests;
use Illuminate\Contracts\Support\Renderable;
use Modules\Shared\Repositories\BranchRepository;
use Modules\DTARequests\Http\Requests\CreateDTARequests;
use Modules\DTARequests\Http\Requests\UpdateDTARequests;
use Modules\UnitManager\Repositories\UnitHeadRepository;
use Modules\DTARequests\Repositories\DTAReviewRepository;
use Modules\DTARequests\Repositories\DTARequestsRepository;
use Illuminate\Support\Facades\Notification;
use App\Notifications\DTARequested;



class DTARequestsController extends AppBaseController
{

    /** @var DTARequestsRepository $dtaRequestsRepository*/
    private $dtaRequestsRepository;

    /** @var BranchRepository $branchRepository*/
    private $branchRepository;

    /** @var DTAReviewRepository $dtaReviewRepository*/
    private $dtaReviewRepository;

    /** @var UnitHeadRepository $unitHeadRepository*/
    private $unitHeadRepository;

    /** @var $userRepository UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo, UnitHeadRepository $unitHeadRepo, DTARequestsRepository $dtaRequestsRepo, BranchRepository $branchRepo, DTAReviewRepository $dtaReviewRepo, StaffRepository $staffRepo)
    {
        $this->dtaRequestsRepository = $dtaRequestsRepo;
        $this->branchRepository = $branchRepo;
        $this->dtaReviewRepository = $dtaReviewRepo;
        $this->staffRepository = $staffRepo;
        $this->unitHeadRepository = $unitHeadRepo;
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $user_id = Auth::id();
        $department = $this->staffRepository->getByUserId($user_id);
        $department_id = $department->department_id;
        $unit_head_id = $this->dtaRequestsRepository->isUnitHeadInSameDepartment($user_id, $department_id);

        

        $unit_head_data = UnitHead::with('user')->where('user_id',$user_id)->first();
        $department_head_data = DepartmentHead::with('user')->where('user_id',$user_id)->first();

        if (!empty($user_id) && $user_id != $unit_head_id) {
            # code...
            $dtarequests = $this->dtaRequestsRepository->getByUserId($user_id);
            //$dtarequests = $this->dtaRequestsRepository->paginate(10);
        } else {
            # code...
            $dtarequests = $this->dtaRequestsRepository->getByUnitHeadId($unit_head_id);
            //$dtarequests = $this->dtaRequestsRepository->paginate(10);
        }

        return view('dtarequests::dtarequests.index')->with(['department_head_data'=> $department_head_data,'dtarequests'=> $dtarequests,'unit_head_data'=>$unit_head_data]);
 
       
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $user_id = Auth::id();
        
        $department = $this->staffRepository->getByUserId($user_id);
        if(!$department){
            Flash::error('Admin can not add new DTA Request. DTA request should be added by a staff only');
            return redirect(route('dtarequests.index'));
        } else{
            
        $department_id = $department->department_id;

        $unit_head_id = $this->dtaRequestsRepository->isUnitHeadInSameDepartment($user_id, $department_id);

        $unit_head_department = $this->staffRepository->getByUserId($unit_head_id);
        $unit_head_department_id = $unit_head_department->department_id;


        if ($unit_head_department_id == $department_id) {
            # code...
            $unit_head_data = UnitHead::with('user')->where('user_id',$user_id)->first();
        $department_head_data = DepartmentHead::with('user')->where('user_id',$user_id)->first();

        $branches = $this->branchRepository->all()->pluck('branch_name', 'id');
        $branches->prepend('Select branch', '');
        return view('dtarequests::dtarequests.create')->with(['department_head_data'=>$department_head_data, 'branches'=> $branches,'unit_head_data'=>$unit_head_data]);
    
        } else {
            # code...
            Flash::error('You can not create a DTA request because there is no unit head in your department.');
            return redirect(route('dtarequests.index'));
        }
        
    }
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */

    public function store(CreateDTARequests $request)
    {
        $input = $request->all();
        $uid = Auth::id();
        $staff_id = $this->staffRepository->getByUserId($uid);
        if(!$staff_id){
            Flash::error('Admin can not add new DTA Request. DTA request should be added by a staff only');
            return redirect(route('dtarequests.index'));
        } else{
            $department = $this->staffRepository->getByUserId($uid);
            $department_id = $department->department_id;
        $unit_head_id = $this->dtaRequestsRepository->isUnitHeadInSameDepartment($uid, $department_id);

        $input['staff_id'] = isset($staff_id) ? $staff_id->id : 0;
        $input['user_id'] = $uid;
        $input['unit_head_id'] = $unit_head_id;
        $input['hod_status'] = 0;
        $input['supervisor_status'] = 0;
        $input['md_status'] = 0;
        $input['approval_status'] = 0;

        if ($request->hasFile('uploaded_doc')) {
            $file = $request->file('uploaded_doc');
            $fileName = $file->hashName();
            $path = $file->store('public');
            $input['uploaded_doc'] = $fileName;
        }

        $dtarequests = $this->dtaRequestsRepository->create($input);

        $unit_head = $this->dtaRequestsRepository->getUnitHeadInfo($uid, $department_id);
        // Send notification to unit head about the dta request
        Notification::send($unit_head, new UserCreated($unit_head));


        Flash::success('DTA Requests saved successfully.');

        return redirect(route('dtarequests.index'));
    }

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $dtarequests = $this->dtaRequestsRepository->find($id);

        if (empty($dtarequests)) {
            Flash::error('DTA Requests not found');

            return redirect(route('dtarequests.index'));
        }

        return view('dtarequests::dtarequests.show')->with('dtarequests', $dtarequests);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $dtarequests = $this->dtaRequestsRepository->find($id);

        if (empty($dtarequests)) {
            Flash::error('DTA Requests not found');

            return redirect(route('dtarequests.index'));
        }

        $user_id = Auth::id();
        $unit_head_data = UnitHead::with('user')->where('user_id',$user_id)->first();
        $department_head_data = DepartmentHead::with('user')->where('user_id',$user_id)->first();

        $branches = $this->branchRepository->all()->pluck('branch_name', 'id');
        $branches->prepend('Select branch', '');
        return view('dtarequests::dtarequests.edit')->with(['department_head_data' => $department_head_data,'unit_head_data' => $unit_head_data,'dtarequests' => $dtarequests, 'branches' => $branches]);
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update($id, UpdateDTARequests $request)
    {
        $dtarequests = $this->dtaRequestsRepository->find($id);

        if (empty($dtarequests)) {
            Flash::error('DTA Requests not found');

            return redirect(route('dtarequests.index'));
        }

        $input = $request->all();

        //$staff_id = $this->dtaRequestsRepository->find($id);
        $user_id = Auth::id();
        $input['staff_id'] = $user_id;

        if ($request->hasFile('uploaded_doc')) {
            $file = $request->file('uploaded_doc');
            $fileName = $file->hashName();
            $path = $file->store('public');
            $input['uploaded_doc'] = $fileName;
        } else {
            // prevent images from updating db since there is no upload
            unset($input['uploaded_doc']);
        }

        $dtarequests1 = $this->dtaRequestsRepository->update($input, $id);

        $staff = $this->staffRepository->getByUserId($user_id);

        $input_r = null;
        $input_r['staff_id'] = isset($staff->id) ? $staff->id : 0;
        $input_r['user_id'] = $user_id;
        $input_r['dtarequest_id'] = $id;
        $input_r['dta_id'] = $id;
        $input_r['comments'] = $request->input('comments');
        $input_r['review_status'] = $request->input('approval_status');
        $input_r['created_at'] = now();
        $input_r['updated_at'] = now();
        $this->dtaReviewRepository->create($input_r);

        Flash::success('DTA Requests updated successfully.');

        return redirect(route('dtarequests.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $dtarequests = $this->dtaRequestsRepository->find($id);

        if (empty($dtarequests)) {
            Flash::error('DTA Requests not found');

            return redirect(route('dtarequests.index'));
        }

        $this->dtaRequestsRepository->delete($id);

        Flash::success('DTA Requests deleted successfully.');

        return redirect(route('dtarequests.index'));
    }
}

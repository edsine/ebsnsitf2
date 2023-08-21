<?php

namespace Modules\OPERequests\Http\Controllers;

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
use Modules\OPERequests\Models\OPERequests;
use Illuminate\Contracts\Support\Renderable;
use Modules\Shared\Repositories\BranchRepository;
use Modules\OPERequests\Http\Requests\CreateOPERequests;
use Modules\OPERequests\Http\Requests\UpdateOPERequests;
use Modules\UnitManager\Repositories\UnitHeadRepository;
use Modules\OPERequests\Repositories\OPEReviewRepository;
use Modules\OPERequests\Repositories\OPERequestsRepository;
use Illuminate\Support\Facades\Notification;
use Modules\OPERequests\Notifications\UnitHeadNotification;
use Illuminate\Database\Eloquent\ModelNotFoundException;



class OPERequestsController extends AppBaseController
{

    /** @var OPERequestsRepository $opeRequestsRepository*/
    private $opeRequestsRepository;

    /** @var BranchRepository $branchRepository*/
    private $branchRepository;

    /** @var OPEReviewRepository $opeReviewRepository*/
    private $opeReviewRepository;

    /** @var StaffRepository $staffRepository*/
    private $staffRepository;

    /** @var UnitHeadRepository $unitHeadRepository*/
    private $unitHeadRepository;

    /** @var $userRepository UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo, UnitHeadRepository $unitHeadRepo, OPERequestsRepository $opeRequestsRepo, BranchRepository $branchRepo, OPEReviewRepository $opeReviewRepo, StaffRepository $staffRepo)
    {
        $this->opeRequestsRepository = $opeRequestsRepo;
        $this->branchRepository = $branchRepo;
        $this->opeReviewRepository = $opeReviewRepo;
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
        $department_id = isset($department->department_id) ? $department->department_id : "";
        $unit_head_id = $this->opeRequestsRepository->isUnitHeadInSameDepartment($user_id, $department_id);


        $s_branchId = intval(session('branch_id'));
        $unit_head_data = UnitHead::with('user')->where('user_id', $user_id)->first();
        $department_head_data = DepartmentHead::with('user')->where('user_id', $user_id)->first();
        $department_head_data1 = !empty($department_head_data->user_id) ? $department_head_data->user_id : 0;
        $operequests1 = $this->opeRequestsRepository->getByUserId($user_id);

        if (empty($operequests1)) {
            # code...
            $operequests = $this->opeRequestsRepository->getByUserId($user_id);
            //$operequests = $this->opeRequestsRepository->paginate(10);
            $id ="1";
        } else {
            # code...

            $id ="2";
            //$operequests = $this->opeRequestsRepository->getByUnitHeadId($unit_head_id);
            $operequests = $this->opeRequestsRepository->getByBranchId($s_branchId);
            //$operequests = $this->opeRequestsRepository->paginate(10);
        }
        //$operequests = $this->opeRequestsRepository->paginate(10);
        // echo  "exh-0n ".$id." //";
        return view('operequests::operequests.index')->with(['department_head_data' => $department_head_data, 'operequests' => $operequests, 'unit_head_data' => $unit_head_data]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $user_id = Auth::id();

        $department = $this->staffRepository->getByUserId($user_id);
        if (!$department) {
            Flash::error('Admin can not add new OPE Request. OPE request should be added by a staff only');
            return redirect(route('operequests.index'));
        } else {

            $department_id = $department->department_id;

            $unit_head_id = $this->opeRequestsRepository->isUnitHeadInSameDepartment($user_id, $department_id);
            if (!$unit_head_id) {
                Flash::error("You can not add new ope request because you don'\t have a unit head in your department. Contact administrator for assistance.");
                return redirect(route('operequests.index'));
            }

            $unit_head_department = $this->staffRepository->getByUserId($unit_head_id);
            $unit_head_department_id = $unit_head_department->department_id;


            if ($unit_head_department_id == $department_id) {
                # code...
                $unit_head_data = UnitHead::with('user')->where('user_id', $user_id)->first();
                $department_head_data = DepartmentHead::with('user')->where('user_id', $user_id)->first();

                $branches = $this->branchRepository->all()->pluck('branch_name', 'id');
                $branches->prepend('Select branch', '');
                return view('operequests::operequests.create')->with(['department_head_data' => $department_head_data, 'branches' => $branches, 'unit_head_data' => $unit_head_data]);
            } else {
                # code...
                Flash::error('You can not create a OPE request because there is no unit head in your department.');
                return redirect(route('operequests.index'));
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */

    public function store(CreateOPERequests $request)
    {
        $input = $request->all();
        $uid = Auth::id();
        $staff_id = $this->staffRepository->getByUserId($uid);
        if (!$staff_id) {
            Flash::error('Admin can not add new OPE Request. OPE request should be added by a staff only');
            return redirect(route('operequests.index'));
        } else {
            try {
            $department = $this->staffRepository->getByUserId($uid);
            $department_id = $department->department_id;
            $unit_head_id = $this->opeRequestsRepository->isUnitHeadInSameDepartment($uid, $department_id);

            $input['staff_id'] = isset($staff_id) ? $staff_id->id : 0;
            $input['user_id'] = $uid;
            $input['unit_head_id'] = $unit_head_id;
            $input['hod_status'] = 0;
            $input['supervisor_status'] = 0;
            $input['md_status'] = 0;
            $input['approval_status'] = 0;
            $s_branchId = intval(session('branch_id'));
            $input['branch_id'] = $s_branchId;
            $s_depId = intval(session('department_id'));
            $input['department_id'] = $s_depId;

            if ($request->hasFile('uploaded_doc')) {
                $file = $request->file('uploaded_doc');
                $fileName = $file->hashName();
                $path = $file->store('public');
                $input['uploaded_doc'] = $fileName;
            }

            $operequests = $this->opeRequestsRepository->create($input);

            $unitHeadUser = $this->opeRequestsRepository->getUnitHeadInfo($uid, $department_id);


            if ($unitHeadUser) {
                $user = $unitHeadUser->user;

                // Assuming User model has a method to send email notifications
                //$user->sendUnitHeadNotification();
              // $user->notify(new UnitHeadNotification($user));
            }


            Flash::success('OPE Requests saved successfully.');

            //INITIATE APPROVAL FLOW || ALSO FOR UPDATING create|update
            $approval_request = $operequests->request()->create([
                'staff_id' => $staff_id->id,
                'type_id' => 3,//for ope requests
                'order' => 1,//order/step of the flow
                'action_id' => 1,//action taken id 1= create
            ]);

            return redirect(route('operequests.index'));
        } catch (ModelNotFoundException $e) {
            Flash::error('Request not successful. ' .$e);

            return redirect(route('operequests.index'));
        }
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $operequests = $this->opeRequestsRepository->find($id);

        if (empty($operequests)) {
            Flash::error('OPE Requests not found');

            return redirect(route('operequests.index'));
        }

        return view('operequests::operequests.show')->with('operequests', $operequests);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $operequests = $this->opeRequestsRepository->find($id);

        if (empty($operequests)) {
            Flash::error('OPE Requests not found');

            return redirect(route('operequests.index'));
        }

        $user_id = Auth::id();
        $unit_head_data = UnitHead::with('user')->where('user_id', $user_id)->first();
        $department_head_data = DepartmentHead::with('user')->where('user_id', $user_id)->first();

        $branches = $this->branchRepository->all()->pluck('branch_name', 'id');
        $branches->prepend('Select branch', '');
        return view('operequests::operequests.edit')->with(['department_head_data' => $department_head_data, 'unit_head_data' => $unit_head_data, 'operequests' => $operequests, 'branches' => $branches]);
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update($id, UpdateOPERequests $request)
    {
        $operequests = $this->opeRequestsRepository->find($id);

        if (empty($operequests)) {
            Flash::error('OPE Requests not found');

            return redirect(route('operequests.index'));
        }

        $input = $request->all();

        //$staff_id = $this->opeRequestsRepository->find($id);
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

        $operequests1 = $this->opeRequestsRepository->update($input, $id);

        $staff = $this->staffRepository->getByUserId($user_id);

        $input_r = null;
        $input_r['staff_id'] = isset($staff->id) ? $staff->id : 0;
        $input_r['user_id'] = $user_id;
        $input_r['operequest_id'] = $id;
        $input_r['ope_id'] = $id;
        $input_r['comments'] = $request->input('comments');
        $input_r['review_status'] = $request->input('approval_status');
        $input_r['created_at'] = now();
        $input_r['updated_at'] = now();
        $s_branchId = intval(session('branch_id'));
            $input_r['branch_id'] = $s_branchId;
            $s_depId = intval(session('department_id'));
            $input_r['department_id'] = $s_depId;
        $this->opeReviewRepository->create($input_r);

        Flash::success('OPE Requests updated successfully.');

        return redirect(route('operequests.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $operequests = $this->opeRequestsRepository->find($id);

        if (empty($operequests)) {
            Flash::error('OPE Requests not found');

            return redirect(route('operequests.index'));
        }

        $this->opeRequestsRepository->delete($id);

        Flash::success('OPE Requests deleted successfully.');

        return redirect(route('operequests.index'));
    }
}

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

    public function __construct(UnitHeadRepository $unitHeadRepo, DTARequestsRepository $dtaRequestsRepo, BranchRepository $branchRepo, DTAReviewRepository $dtaReviewRepo, StaffRepository $staffRepo)
    {
        $this->dtaRequestsRepository = $dtaRequestsRepo;
        $this->branchRepository = $branchRepo;
        $this->dtaReviewRepository = $dtaReviewRepo;
        $this->staffRepository = $staffRepo;
        $this->unitHeadRepository = $unitHeadRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $user_id = Auth::id();
        $unit_head_data = UnitHead::with('user')->where('user_id',$user_id)->first();
        $department_head_data = DepartmentHead::with('user')->where('user_id',$user_id)->first();

        if (!empty($user_id) && $user_id != 1) {
            # code...
            $dtarequests = $this->dtaRequestsRepository->getByUserId($user_id);
        } else {
            # code...
            $dtarequests = $this->dtaRequestsRepository->paginate(10);
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
        $unit_head_data = UnitHead::with('user')->where('user_id',$user_id)->first();
        $department_head_data = DepartmentHead::with('user')->where('user_id',$user_id)->first();

        $branches = $this->branchRepository->all()->pluck('branch_name', 'id');
        $branches->prepend('Select branch', '');
        return view('dtarequests::dtarequests.create')->with(['department_head_data'=>$department_head_data, 'branches'=> $branches,'unit_head_data'=>$unit_head_data]);
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
        $input['staff_id'] = $staff_id->id;
        $input['user_id'] = $uid;
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


        Flash::success('DTA Requests saved successfully.');

        return redirect(route('dtarequests.index'));
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
        $input_r['officer_id'] = $staff->id;
        $input_r['user_id'] = $user_id;
        $input_r['dta_reviewid'] = $id;
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

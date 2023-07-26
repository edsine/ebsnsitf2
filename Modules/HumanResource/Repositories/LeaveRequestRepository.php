<?php

namespace Modules\HumanResource\Repositories;

use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;
use Modules\HumanResource\Models\LeaveRequest;
//use LeaveRequest as GlobalLeaveRequest;

class LeaveRequestRepository extends BaseRepository
{
     protected $fieldSearchable = [
//
     ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return LeaveRequest::class;
    }

    public function findByBranch($branch_id)
    {
        $query = $this->model->newQuery();

        return $query->where('branch_id', $branch_id)->get();
    }

    public function getByUserId($id)
    {
        return DB::table('dta_requests')->where('user_id', $id)->paginate(10);
    }
}

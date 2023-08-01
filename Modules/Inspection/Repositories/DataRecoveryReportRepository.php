<?php

namespace Modules\Inspection\Repositories;

use Modules\Inspection\Models\DataRecoveryReport;
use App\Repositories\BaseRepository;

class DataRecoveryReportRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'created_by',
        'branch_id',
        'employer_id',
        'date_of_inspection',
        'debt_established',
        'debt_paid',
        'total_debt_paid',
        'balance',
        'date_of_payment',
        'rrr_receipt_number',
        'nsitf_receipt_number',
        'remark'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return DataRecoveryReport::class;
    }
}

<?php

namespace Modules\Inspection\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DataRecoveryReportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'branch_id' => $this->branch_id,
            'employer_id' => $this->employer_id,
            'date_of_inspection' => $this->date_of_inspection,
            'debt_established' => $this->debt_established,
            'debt_paid' => $this->debt_paid,
            'total_debt_paid' => $this->total_debt_paid,
            'balance' => $this->balance,
            'date_of_payment' => $this->date_of_payment,
            'rrr_receipt_number' => $this->rrr_receipt_number,
            'nsitf_receipt_number' => $this->nsitf_receipt_number,
            'remark' => $this->remark
        ];
    }
}

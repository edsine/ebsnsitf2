<?php

namespace Modules\Inspection\Http\Requests;

use Modules\Inspection\Models\DataRecoveryReport;
use Illuminate\Foundation\Http\FormRequest;

class CreateDataRecoveryReportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return DataRecoveryReport::$rules;
    }
}

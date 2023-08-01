<?php

namespace Modules\Inspection\Http\Requests\API;

use Modules\Inspection\Models\DataRecoveryReport;
use InfyOm\Generator\Request\APIRequest;

class CreateDataRecoveryReportAPIRequest extends APIRequest
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

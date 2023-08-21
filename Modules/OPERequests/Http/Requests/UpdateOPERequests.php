<?php

namespace Modules\OPERequests\Http\Requests;

use Modules\OPERequests\Models\OPERequests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOPERequests extends FormRequest
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
        $rules = OPERequests::$rules;

        return $rules;
    }
}

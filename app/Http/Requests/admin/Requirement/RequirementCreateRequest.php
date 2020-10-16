<?php

namespace App\Http\Requests\admin\Requirement;

use Illuminate\Foundation\Http\FormRequest;

class RequirementCreateRequest extends FormRequest
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
        return [
            'description_ar'=>'required',
            'description_en'=>'required',
            'title_ar'=>'required',
            'title_en'=>'required',
            'order'=>'required|min:1',
            'country_id'=>'required',
        ];
    }
}

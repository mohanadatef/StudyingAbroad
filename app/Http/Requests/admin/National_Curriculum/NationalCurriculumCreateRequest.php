<?php

namespace App\Http\Requests\admin\National_Curriculum;

use Illuminate\Foundation\Http\FormRequest;

class NationalCurriculumCreateRequest extends FormRequest
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
            'country_name_en'=>'required',
            'country_name_ar'=>'required',
            'result'=>'required',
            'section_en'=>'required',
            'section_ar'=>'required',
            'country_id'=>'required',
            'order'=>'required|min:1',
        ];
    }
}

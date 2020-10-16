<?php

namespace App\Http\Requests\admin\American_High_School;

use Illuminate\Foundation\Http\FormRequest;

class AmericanHighSchoolCreateRequest extends FormRequest
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
            'subjects_en'=>'required',
            'subjects_ar'=>'required',
            'units_en'=>'required',
            'units_ar'=>'required',
            'information_en'=>'required',
            'information_ar'=>'required',
            'country_id'=>'required',
            'order'=>'required|min:1',
        ];
    }
}

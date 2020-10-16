<?php

namespace App\Http\Requests\admin\International_Baccalaureate;

use Illuminate\Foundation\Http\FormRequest;

class InternationalBaccalaureateCreateRequest extends FormRequest
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
            'country_id'=>'required|unique:international_baccalaureates',
            'description_ar'=>'required',
            'description_en'=>'required',
        ];
    }
}
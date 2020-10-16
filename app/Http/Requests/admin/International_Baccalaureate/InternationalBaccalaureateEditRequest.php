<?php

namespace App\Http\Requests\admin\International_Baccalaureate;

use Illuminate\Foundation\Http\FormRequest;

class InternationalBaccalaureateEditRequest extends FormRequest
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
                'country_id'=>'required',
                'description_ar'=>'required',
                'description_en'=>'required',
            ];

    }
}

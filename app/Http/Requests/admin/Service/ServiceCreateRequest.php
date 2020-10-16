<?php

namespace App\Http\Requests\admin\Service;

use Illuminate\Foundation\Http\FormRequest;

class ServiceCreateRequest extends FormRequest
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
            'name_ar'=>'required|unique:services',
            'name_en'=>'required|unique:services',
            'description_ar'=>'required',
            'description_en'=>'required',
            'order'=>'required|min:1',
            'log'=> 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ];
    }
}

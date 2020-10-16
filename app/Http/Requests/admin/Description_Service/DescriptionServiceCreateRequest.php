<?php

namespace App\Http\Requests\admin\Description_Service;

use Illuminate\Foundation\Http\FormRequest;

class DescriptionServiceCreateRequest extends FormRequest
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
            'service_id'=>'required',
            'country_id'=>'required',
            'image'=> 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ];
    }
}

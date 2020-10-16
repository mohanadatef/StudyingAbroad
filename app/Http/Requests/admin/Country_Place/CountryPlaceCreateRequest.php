<?php

namespace App\Http\Requests\admin\Country_Place;

use Illuminate\Foundation\Http\FormRequest;

class CountryPlaceCreateRequest extends FormRequest
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
            'name_ar'=>'required',
            'country_id'=>'required',
            'name_en'=>'required',
            'order'=>'required|min:1',
            'image'=> 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ];
    }
}

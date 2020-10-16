<?php

namespace App\Http\Requests\admin\Contact_Us;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsEditRequest extends FormRequest
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
            'address_ar'=>'required',
            'email' => 'required|string|email|max:255',
            'time_work_ar'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
            'phone_ar'=>'required',
            'address_en'=>'required',
            'time_work_en'=>'required',
            'phone_en'=>'required',
        ];
    }
}

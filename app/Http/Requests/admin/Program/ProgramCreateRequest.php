<?php

namespace App\Http\Requests\admin\Program;

use Illuminate\Foundation\Http\FormRequest;

class ProgramCreateRequest extends FormRequest
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
            'name_ar'=>'required|unique:programs',
            'name_en'=>'required|unique:programs',
            'description_ar'=>'required',
            'description_en'=>'required',
            'order'=>'required|min:1',
            'image'=> 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ];
    }
}

<?php

namespace App\Http\Requests\admin\Description_Program;

use Illuminate\Foundation\Http\FormRequest;

class DescriptionProgramEditRequest extends FormRequest
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
        if ($this->image == null && $this->log == null)
        {
            return [
                'description_ar'=>'required',
                'description_en'=>'required',
                'title_ar'=>'required',
                'title_en'=>'required',
                'program_id'=>'required',
                'country_id'=>'required',
                'order'=>'required|min:1',
            ];
        }
        elseif($this->image == null )
        {
            return [
                'description_ar'=>'required',
                'description_en'=>'required',
                'title_ar'=>'required',
                'title_en'=>'required',
                'order'=>'required|min:1',
                'program_id'=>'required',
                'country_id'=>'required',
                'log' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            ];
        }
        elseif($this->log == null )
        {
            return [
                'description_ar'=>'required',
                'description_en'=>'required',
                'title_ar'=>'required',
                'title_en'=>'required',
                'order'=>'required|min:1',
                'program_id'=>'required',
                'country_id'=>'required',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            ];
        }
        else
        {
            return [
                'description_ar'=>'required',
                'description_en'=>'required',
                'title_ar'=>'required',
                'title_en'=>'required',
                'order'=>'required|min:1',
                'program_id'=>'required',
                'country_id'=>'required',
                'log' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            ];
        }
    }
}

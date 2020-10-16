<?php

namespace App\Http\Requests\admin\Setting;

use Illuminate\Foundation\Http\FormRequest;

class SettingEditRequest extends FormRequest
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
        if ($this->image == null && $this->logo == null)
        {
            return [
                'facebook'=> 'required',
                'youtube'=> 'required',
                'twitter'=> 'required',
                'name_ar'=> 'required',
                'name_en'=> 'required',
            ];
        }
        elseif ($this->image != null && $this->logo == null)
        {
            return [
                'facebook'=> 'required',
                'youtube'=> 'required',
                'twitter'=> 'required',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            ];
        }
        elseif ($this->image == null && $this->logo != null)
        {
            return [
                'facebook'=> 'required',
                'youtube'=> 'required',
                'twitter'=> 'required',
                'logo' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            ];
        }
        else
        {
            return [
                'facebook'=> 'required',
                'youtube'=> 'required',
                'twitter'=> 'required',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
                'logo' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            ];
        }
    }
}

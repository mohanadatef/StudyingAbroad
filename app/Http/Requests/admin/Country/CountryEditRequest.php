<?php

namespace App\Http\Requests\admin\Country;

use Illuminate\Foundation\Http\FormRequest;

class CountryEditRequest extends FormRequest
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
        if ($this->image != null && $this->loge != null)
        {
            return [
                'name_en'=>'required',
                'name_ar'=>'required',
                'about_country_en'=>'required',
                'about_country_ar'=>'required',
                'residence_country'=>'required',
                'residence_usd'=>'required',
                'transportation_country'=>'required',
                'transportation_usd'=>'required',
                'food_country'=>'required',
                'food_usd'=>'required',
                'cinema_country'=>'required',
                'cinema_usd'=>'required',
                'net_country'=>'required',
                'net_usd'=>'required',
                'clothing_country'=>'required',
                'clothing_usd'=>'required',
                'order'=>'required|min:1',
                'loge' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            ];
        }
        elseif($this->image != null)
        {
            return [
                'name_en'=>'required',
                'name_ar'=>'required',
                'about_country_en'=>'required',
                'about_country_ar'=>'required',
                'residence_country'=>'required',
                'residence_usd'=>'required',
                'transportation_country'=>'required',
                'transportation_usd'=>'required',
                'food_country'=>'required',
                'food_usd'=>'required',
                'cinema_country'=>'required',
                'cinema_usd'=>'required',
                'net_country'=>'required',
                'net_usd'=>'required',
                'clothing_country'=>'required',
                'clothing_usd'=>'required',
                'order'=>'required|min:1',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            ];
        }
        elseif($this->loge != null)
        {
            return [
                'name_en'=>'required',
                'name_ar'=>'required',
                'about_country_en'=>'required',
                'about_country_ar'=>'required',
                'residence_country'=>'required',
                'residence_usd'=>'required',
                'transportation_country'=>'required',
                'transportation_usd'=>'required',
                'food_country'=>'required',
                'food_usd'=>'required',
                'cinema_country'=>'required',
                'cinema_usd'=>'required',
                'net_country'=>'required',
                'net_usd'=>'required',
                'clothing_country'=>'required',
                'clothing_usd'=>'required',
                'order'=>'required|min:1',
                'loge' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            ];
        }
       else
        {
            return [
                'name_en'=>'required',
                'name_ar'=>'required',
                'about_country_en'=>'required',
                'about_country_ar'=>'required',
                'residence_country'=>'required',
                'residence_usd'=>'required',
                'transportation_country'=>'required',
                'transportation_usd'=>'required',
                'food_country'=>'required',
                'food_usd'=>'required',
                'cinema_country'=>'required',
                'cinema_usd'=>'required',
                'net_country'=>'required',
                'net_usd'=>'required',
                'clothing_country'=>'required',
                'clothing_usd'=>'required',
                'order'=>'required|min:1',
            ];
        }
    }
}

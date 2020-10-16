<?php

namespace App\Http\Requests\frontend;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
        if($this->service_id !=null)
        {

            return [
            'email' => 'required|string|email|max:255',
            'full_name' => 'required|string|regex:/^[a-zA-Z]+$/u',
            'country_id' => 'required',
            'english_level' => 'required',
            'country_level' => 'required',
            'program_id' => 'required',
            'phone' => 'required|numeric|digits_between:2,5',
            'service_id' => 'required|exists:services,id',
        ];
        }
        else
        {
            return [
                'email' => 'required|string|email|max:255',
                'full_name' => 'required|string|regex:/^[a-zA-Z]+$/u',
                'country_id' => 'required',
                'program_id' => 'required',
                'english_level' => 'required',
                'phone' => 'required|numeric|digits_between:2,5',
                'country_level' => 'required',
            ];
        }
    }
}

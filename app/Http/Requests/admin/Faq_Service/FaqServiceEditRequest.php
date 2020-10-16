<?php

namespace App\Http\Requests\admin\Faq_Service;

use Illuminate\Foundation\Http\FormRequest;

class FaqServiceEditRequest extends FormRequest
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
            'question_ar'=>'required',
            'question_en'=>'required',
            'answer_en'=>'required',
            'answer_ar'=>'required',
            'service_id'=>'required',
            'country_id'=>'required',
            'order'=>'required|min:1',
        ];
    }
}

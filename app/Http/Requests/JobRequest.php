<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'name_ar'=>'required',
            'name_en'=>'required',
            'description_ar'=>'required',
            'description_en'=>'required',
            'salary'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>__('messages.name_required'),
            'description.required'=>__('messages.description_required'),
            'salary.required'=>__('messages.salary_required'),
        ];
    }
}

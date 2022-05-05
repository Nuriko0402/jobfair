<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacancyCreateRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'experience' => ['required', 'string', 'max:255'],
            'schedule' => ['required', 'string', 'max:255'],
            'salary' => ['required', 'digits', 'max:8'],
            'employment_type' => ['required', 'string', 'max:255'],
            'description' => ['required', 'text'],
            'company_id' => ['required', 'integer'],
            // 'password_confirm' => 'required|confirmed',
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'Обязательно к заполнению',
            'experience.required' => 'Обязательно к заполнению',
            'schedule.required' => 'Обязательно к заполнению',
            'salary.required' => 'Обязательно к заполнению',
            'employment_type.required' => 'Обязательно к заполнению',
            'description.required' => 'Обязательно к заполнению',
            'company_id.required' => 'Обязательно к заполнению',
        ];
    }
}

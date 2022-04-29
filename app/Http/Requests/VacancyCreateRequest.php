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
        return false;
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
            'salary' => ['required', 'string', 'max:255'],
            'employment_type' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'company_id' => ['required', 'unique:company', 'string', 'max:255'],
            // 'password_confirm' => 'required|confirmed',
        ];
    }
}

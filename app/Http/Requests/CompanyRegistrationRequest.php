<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class CompanyRegistrationRequest extends FormRequest
{
    // /**
    //  * Determine if the user is authorized to make this request.
    //  *
    //  * @return bool
    //  */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'bin' => ['required', 'string', 'max:255'],
            'iik' => ['required', 'string', 'max:255'],
            'kbe' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => 'required|confirmed',
            // 'password_confirm' => 'required|confirmed',
        ];
    }

    public function messages() 
    {
        return [
            'title.required' => 'Обязательно к заполнению',
            'address.required' => 'Обязательно к заполнению',
            'bin.required' => 'Обязательно к заполнению',
            'iik.required' => 'Обязательно к заполнению',
            'kbe.required' => 'Обязательно к заполнению',
            'phone.required' => 'Обязательно к заполнению',
            'email.required' => 'Обязательно к заполнению',
            'password.required' => 'Обязательно к заполнению',
            'password.confirmed' => 'Пароли не совпадают',
            // 'password_confirm.same' => 'Пароли не совпадают',
        ];
    }
}

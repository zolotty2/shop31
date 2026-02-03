<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email'=>'required|email|min:5',
            'password'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'email.required' => 'Почта обязательна',
            'email.email' => 'Введите корректный email',
            'email.min' => 'min = 5',
            'password.required' => 'Пароль обязателен'
        ];

    }
}

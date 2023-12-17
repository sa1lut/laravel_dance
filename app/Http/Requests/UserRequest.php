<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'login' => ['required', 'string', 'max:25', 'unique:users'],
            'password' => ['required', 'string', 'regex:/^[a-zA-Z0-9]+$/', 'min:8', 'max:64'],
        ];
    }

    public function messages(): array {
        return [
            'required' => 'Поле должно быть заполнено',
            'max' => 'Не более 25 символов',
            'login.unique' => 'Пользователь с таким логином уже зарегистрирован',
            'password.min' => 'Не менее 8 символов',
            'password.max' => 'Не более 64 символов',
            'password.regex' => 'Пароль должен состоять только из английских букв и цифр',
        ];
    }
}

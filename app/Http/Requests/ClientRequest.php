<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'surname' => ['required', 'string', 'max:30'],
            'name' => ['required', 'string', 'max:15'],
            'birthday' => ['required', 'regex:/^(([0-9]{4})-[0-9]{2})-([0-9]{2})$/'],
            'telephone' => ['required', 'string', 'regex:/^(8)\d{3}\d{3}\d{2}\d{2}$/i'],
        ];
    }
    
    public function messages(): array {
        return [
            'required' => 'Поле должно быть заполнено',
            'surname.max' => 'Не более 30 символов',
            'name.max' => 'Не более 15 символов',
            'telephone.regex' => 'Введите номер с цифры 8',
            'birthday.regex' => 'Некорректный формат даты рождения',
        ];
    }
}

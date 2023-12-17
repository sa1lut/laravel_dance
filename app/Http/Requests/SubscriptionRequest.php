<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscriptionRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:50'],
            'price' => ['required', 'numeric', 'gt:0', 'lte:9999.99'],
            'period' => ['required', 'integer', 'gt:0'],
            'count' => ['required', 'integer', 'gt:0'],
            'lesson_id' => ['required', 'integer', 'gt:0'],
            'description' => ['required', 'string', 'max:500'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Поле должно быть заполнено',
            'max' => 'Не более 50 символов',
            'description.max' => 'Не более 500 символов',
            'numeric' => 'Введите число',
            'integer' => 'Введите целое число',
            'gt' => 'Число должно быть больше 0',
            'lte' => 'Число должно быть меньше или равно 9999.99'
        ];
    }
}

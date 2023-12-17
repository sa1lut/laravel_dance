<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
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
            'image' => ['nullable', 'mimes:jpg,jpeg,png'],
            'teachers' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Поле должно быть заполнено',
            'max' => 'Не более 50 символов',
            'mimes' => 'Неподдерживаемый формат изображения',
        ];
    }
}

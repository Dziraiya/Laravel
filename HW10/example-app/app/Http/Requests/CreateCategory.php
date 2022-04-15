<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategory extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:3', 'max:100'],
            'description' => ['required', 'string'],
            'is_visible' => ['sometimes']
        ];
    }

    public function authorize()
    {
        return TRUE;
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute необходимо заполнить'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'название',
            'description' => 'текст'
        ];
    }
}

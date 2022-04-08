<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategory extends FormRequest
{
    public function rules()
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
}

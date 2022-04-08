<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNews extends FormRequest
{
    public function rules()
    {
        return [
            'category_id' => ['required', 'numeric'],
            'title' => ['required'],
            'text' => ['sometimes']
        ];
    }

    public function authorize()
    {
        return TRUE;
    }
}

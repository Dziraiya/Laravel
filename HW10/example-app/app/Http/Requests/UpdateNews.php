<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNews extends FormRequest
{
    public function rules()
    {
        return [
            'category_id' => ['required', 'numeric'],
            'title' => ['required'],
            'text' => ['sometimes'],
            'image' => ['sometimes', 'image: jpg,jpeg,png']
        ];
    }

    public function authorize()
    {
        return TRUE;
    }
}

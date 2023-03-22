<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriesRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => 'required|unique:categories|max:255',
        ];
    }

public function messages()
{
    return [
        'name.required' => 'A name is required',
    ];
}
}

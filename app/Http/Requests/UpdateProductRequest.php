<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'image' => ['required'],
            'brand' => ['required'],
            'description' => ['required'],
            'title' => ['required'],
            'status' => ['required'],
            'price' => ['required', 'integer'],
        ];
    }
}

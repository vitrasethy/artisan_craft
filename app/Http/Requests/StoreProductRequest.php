<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'image' => ['required', 'image'],
            'brand' => ['required', 'string'],
            'description' => ['required', 'string'],
            'title' => ['required', 'string'],
            'status' => ['required', 'string'],
            'price' => ['required', 'integer'],
        ];
    }
}

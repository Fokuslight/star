<?php

namespace App\Http\Requests\Api\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'published_at' => 'required|date_format:Y-m-d',
            'content' => 'required|string',
            'author' => 'required|string',
            'category' => 'required|string',
            'view' => 'required|integer',
            'is_commentable' => 'required|boolean',
        ];
    }
}


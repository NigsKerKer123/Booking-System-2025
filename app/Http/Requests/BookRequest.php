<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'author' => 'required|email|unique:students,email',
            'quantity' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The book title is required.',
            'title.string' => 'The book title must be a valid string.',
            'title.max' => 'The book title may not be greater than 255 characters.',

            'author.required' => 'The author email is required.',
            'author.email' => 'The author must be a valid email address.',
            'author.unique' => 'This email has already been used by another student.',

            'quantity.required' => 'The quantity field is required.',
            'quantity.string' => 'The quantity must be a string value.',
            'quantity.max' => 'The quantity may not exceed 255 characters.',
        ];
    }
}

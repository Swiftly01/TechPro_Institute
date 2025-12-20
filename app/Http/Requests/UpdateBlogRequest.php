<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
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
            'title' => ['nullable', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:100'],
            'excerpt' => ['nullable', 'string', 'max:300'],
            'blog_content' => ['nullable', 'string'],
            'blog_highlight' => ['required', 'string'],
            'featured_image' => ['nullable', 'image', 'mimes:png,jpg,jpeg', 'max:3048']
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:100'],
            'excerpt' => ['required', 'string', 'max:300'],
            'blog_content' => ['required', 'string'],
            'blog_highlight' => ['required', 'string'],
            'featured_image' => ['required', 'array'],
            'featured_image.*' => ['image', 'mimes:png,jpg,jpeg', 'max:8000'],

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please enter a blog title',
            'category.required' => 'Please specify a blog category',
            'excerpt.required' => 'Excerpt is required for previous',
            'blog_content.required' => 'You must add content to your blog',
            'featured_image.image' => 'Uploaded file must be an image',
        ];
    }
}

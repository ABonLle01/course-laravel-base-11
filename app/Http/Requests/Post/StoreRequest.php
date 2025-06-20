<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title'         => 'required|string|max:500',
            'slug'          => 'required|string|max:500|unique:posts',
            'description'   => 'required|string',
            'content'       => 'required|string',
            'image'         => 'nullable|image|max:2048',
            'posted'        => 'required',
            'category_id'   => 'required|exists:categories,id',
        ];
    }
}

<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PutRequest extends FormRequest
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
            'slug'          => 'required|string|max:500|unique:posts,slug,' . $this->route('post')->id,
            'description'   => 'required|string',
            'content'       => 'required|string',
            'image'         => 'nullable|mimes:jpg,jpeg,png,webp|max:10240',
            'posted'        => 'required',
            'category_id'   => 'required|exists:categories,id',
        ];
    }
}

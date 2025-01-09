<?php

namespace App\Http\Requests\Model;

use Illuminate\Foundation\Http\FormRequest;

class StoreModelRequest extends FormRequest
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
            'name' => 'required|string',
            'description' => 'nullable|string',
            'date_of_birth' => 'required|date',
            'height' => 'required|numeric',
            'shoe_size' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'picture' => 'nullable|image',
        ];
    }
}

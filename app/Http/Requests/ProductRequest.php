<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'category_id' => ['required', 'string'],
            'image' => ['required', 'string']
        ];
    }

    public function messages()
    {
        return [
            "name" => 'Nome é obrigatório',
            "price" => 'Preço é obrigatório',
            "category_id" => 'Categoria é obrigatório',
            "image" => 'Imagem é obrigatório',
        ];
    }
}

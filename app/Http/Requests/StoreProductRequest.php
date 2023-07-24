<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => ['required', 'min:3'],
            'price' => ['required', 'numeric'],
            'stored' => ['required', 'numeric'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O :attribute é obrigatório.',
            'name.min' => 'O :attribute deve conter pelo menos 3 caracteres.',
            'price.required' => 'O :attribute é obrigatório.',
            'price.decimal' => 'O :attribute deve ser um número válido.',
            'stored.required' => 'A quantidade em :attribute é obrigatória.',
            'stored.numeric' => 'A quantidade em :attribute deve ser um número válido.',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'nome',
            'price' => 'preço',
            'stored' => 'estoque',
        ];
    }
}

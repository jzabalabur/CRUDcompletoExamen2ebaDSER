<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrdenadorRequest extends FormRequest
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
            'nombre' => 'required',
            'descripcion' => 'required|max:255',
        ];
    }

    public function messages(): array
{
    return [
        'nombre.required' => 'El nombre es necesario',
        'descripcion.required' => 'La descripcion es necesaria',
        'descripcion.max' => 'La descripcion es demasiado larga (max:255 caracteres)',
    ];
}
}

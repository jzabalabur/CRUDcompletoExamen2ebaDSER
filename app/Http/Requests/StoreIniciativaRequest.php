<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIniciativaRequest extends FormRequest
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
            'nombre' => 'required|min:3',
            'ordenador_id' => 'required',
            'numero' => 'required|integer',
        ];
    }

    public function messages(): array
{
    return [
        'nombre.required' => 'El nombre es necesario',
        'nombre.min' => 'El nombre tiene que tener un minimo de 3 caracteres',
        'ordenador_id.required' => 'Ordenador_id es necesario',
        'numero.required' => 'El numero es necesario',
        'numero.integer' => 'El campo numero debe contener solo cifras',
    ];
}
}

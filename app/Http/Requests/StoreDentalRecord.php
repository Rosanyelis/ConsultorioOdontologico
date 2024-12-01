<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDentalRecord extends FormRequest
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
            'type_image' => 'required',
            'archivo' => 'required|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'type_image.required' => 'El Tipo de Registro Dental es obligatorio.',
            'archivo.required' => 'El archivo es obligatorio.',
            'archivo.mimes' => 'El archivo debe ser de tipo: png, jpg, jpeg, pdf.',
            'archivo.max' => 'El archivo no debe superar los 2048 kilobytes.',
        ];
    }
}

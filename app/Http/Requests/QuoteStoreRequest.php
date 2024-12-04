<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteStoreRequest extends FormRequest
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
            'dni'               => ['required'],
            'firstname'         => ['required'],
            'lastname'          => ['required'],
            'phone'             => ['required'],
            'valid_end'         => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'dni.required'                  => "El DNI es obligatorio.",
            'firstname.required'            => "El Nombre del Paciente es obligatorio.",
            'lastname.required'             => "El Primer Apellido es obligatorio.",
            'phone.required'                => "El Teléfono es obligatorio.",
            'valid_end.required'            => "La Fecha de Nacimiento es obligatoria.",
        ];
    }
}

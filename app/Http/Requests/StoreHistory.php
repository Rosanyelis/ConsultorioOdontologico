<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHistory extends FormRequest
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
            'reason_consultation' => 'required',
            'teethData' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'reason_consultation.required' => 'El campo motivo de consulta es obligatorio',
            'teethData.required' => 'Indicar el Tratamiento de Diente es obligatorio',
        ];
    }
}

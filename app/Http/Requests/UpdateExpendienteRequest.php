<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExpendienteRequest extends FormRequest
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
            'clientes_id'           => 'required',
            'juzgados_id'           => 'required',
            'materias_id'           => 'required',
            'asunto'                => 'required',
            'numero_expendiente'    => 'required',
            'contraparte'           => 'required',
            'tipo_costo'            => 'required',
            'valor_porcentaje'      => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'clientes_id.required'           => 'El Cliente es requerido',
            'juzgados_id.required'           => 'El Juzgado es requerido',
            'materias_id.required'           => 'La Materia es requerida',
            'asunto.required'                => 'El Asunto es requerido',
            'numero_expendiente.required'    => 'El N° de Expediente es requerido',
            'contraparte.required'           => 'La Contraparte es requerida',
            'tipo_costo.required'            => 'El Tipo de Costo es requerido',
            'valor_porcentaje.required'      => 'El Valor Porcentaje o Costo del Asunto es requerido',
        ];
    }
}

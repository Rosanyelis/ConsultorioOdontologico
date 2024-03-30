<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExamInstraoral extends FormRequest
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
            'cheeks'                => ['required'],
            'mucous_membranes'      => ['required'],
            'gums'                  => ['required'],
            'language'              => ['required'],
            'palate'                => ['required'],
            'torus'                 => ['required'],
            'aftas'                 => ['required'],
            'supragingival_tartar'  => ['required'],
            'subgingival'           => ['required'],
            'plate'                 => ['required'],
            'crowding'              => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'cheeks.required'               => "El campo Carrillos es obligatorio.",
            'mucous_membranes.required'     => "El campo Mucosa es obligatorio.",
            'gums.required'                 => "El campo Encía es obligatorio.",
            'language.required'             => "El campo Lengua es obligatorio.",
            'palate.required'               => "El campo Paladar es obligatorio.",
            'torus.required'                => "El campo Torus es obligatorio.",
            'aftas.required'                => "El campo Aftas es obligatorio.",
            'supragingival_tartar.required' => "El campo Sarro Supragingival es obligatorio.",
            'subgingival.required'          => "El campo Subgingival es obligatorio.",
            'plate.required'                => "El campo Placa es obligatorio.",
            'crowding.required'             => "El campo Apiñamiento es obligatorio.",
        ];

    }
}

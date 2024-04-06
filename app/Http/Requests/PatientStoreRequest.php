<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientStoreRequest extends FormRequest
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
            'firstname'         => ['required','string'],
            'lastname'          => ['required','string'],
            'phone'             => ['required','string'],
            'birthdate'         => ['required','date'],
            // 'age'               => [],
            'sex'               => ['required','string'],
            'civil_status'      => ['required','string'],
            'occupation'        => ['required','string'],
            'has_disease'       => ['required','string'],
            'disease'           => ['nullable','string'],
            'medical_treatment' => ['required','string'],
            'treatment_text'    => ['nullable','string'],
            'allergies'         => ['required','string'],
            'epilepsy'          => ['required','string'],
            'anemia'            => ['required','string'],
            'hepatitis'         => ['required','string'],
            'hypertension'      => ['required','string'],
            'vih'               => ['required','string'],
            'hypotension'       => ['required','string'],
            'tuberculosis'      => ['required','string'],
            'heart_disease'     => ['required','string'],
            'have_diabetes'     => ['required','string'],
            'type_diabete'      => ['nullable','string'],
            'pregnant'          => ['required','string'],
            'drugs'             => ['required','string'],
            'alcohol'           => ['required','string'],
            'tobacco'           => ['required','string'],
            'asthma'            => ['required','string'],
            'asthma_text'       => ['nullable','string'],
            'ets'               => ['required','string'],
            'ets_text'          => ['nullable','string'],
            'harmful_habits'    => ['nullable','string'],
        ];
    }
    public function messages()
    {
        return [
            'firstname.required'            => "El Nombre del Paciente es obligatorio.",
            'lastname.required'             => "El Primer Apellido es obligatorio.",
            'phone.required'                => "El Teléfono es obligatorio.",
            'birthdate.required'            => "La Fecha de Nacimiento es obligatoria.",
            // 'age.required'                  => "La edad es obligatorio.",
            'sex.required'                  => "El Sexo es obligatorio.",
            'civil_status.required'         => "El Civil Estatus es obligatorio.",
            'occupation.required'           => "La Ocupación es obligatorio.",
            'has_disease.required'          => 'El campo ¿Padece alguna enfermedad? es obligatorio.',
            'has_disease.string'            => 'El campo ¿Padece alguna enfermedad? debe ser un texto.',
            'disease.string'                => 'El campo Enfermedad debe ser un texto.',
            'medical_treatment.required'    => 'El campo ¿Recibe tratamiento médico? es obligatorio.',
            'medical_treatment.string'      => 'El campo ¿Recibe tratamiento médico? debe ser un texto.',
            'treatment_text.string'         => 'El campo Texto del tratamiento debe ser un texto.',
            'allergies.required'            => 'El campo ¿Tiene alergias? es obligatorio.',
            'allergies.string'              => 'El campo ¿Tiene alergias? debe ser un texto.',
            'epilepsy.required'             => 'El campo ¿Tiene epilepsia? es obligatorio.',
            'epilepsy.string'               => 'El campo ¿Tiene epilepsia? debe ser un texto.',
            'anemia.required'               => 'El campo ¿Tiene anemia? es obligatorio.',
            'anemia.string'                 => 'El campo ¿Tiene anemia? debe ser un texto.',
            'hepatitis.required'            => 'El campo ¿Tiene hepatitis? es obligatorio.',
            'hepatitis.string'              => 'El campo ¿Tiene hepatitis? debe ser un texto.',
            'hypertension.required'         => 'El campo ¿Tiene hipertensión? es obligatorio.',
            'hypertension.string'           => 'El campo ¿Tiene hipertensión? debe ser un texto.',
            'vih.required'                  => 'El campo ¿Tiene VIH? es obligatorio.',
            'vih.string'                    => 'El campo ¿Tiene VIH? debe ser un texto.',
            'hypotension.required'          => 'El campo ¿Tiene hipotensión? es obligatorio.',
            'hypotension.string'            => 'El campo ¿Tiene hipotensión? debe ser un texto.',
            'tuberculosis.required'         => 'El campo ¿Tiene tuberculosis? es obligatorio.',
            'tuberculosis.string'           => 'El campo ¿Tiene tuberculosis? debe ser un texto.',
            'heart_disease.required'        => 'El campo ¿Tiene enfermedad cardíaca? es obligatorio.',
            'heart_disease.string'          => 'El campo ¿Tiene enfermedad cardíaca? debe ser un texto.',
            'have_diabetes.required'        => 'El campo ¿Tiene diabetes? es obligatorio.',
            'have_diabetes.string'          => 'El campo ¿Tiene diabetes? debe ser un texto.',
            'type_diabete.string'           => 'El campo Tipo de diabetes debe ser un texto.',
            'pregnant.required'             => 'El campo ¿Está embarazada? es obligatorio.',
            'pregnant.string'               => 'El campo ¿Está embarazada? debe ser un texto.',
            'drugs.required'                => 'El campo ¿Consume drogas? es obligatorio.',
            'drugs.string'                  => 'El campo ¿Consume drogas? debe ser un texto.',
            'alcohol.required'              => 'El campo ¿Consume alcohol? es obligatorio.',
            'alcohol.string'                => 'El campo ¿Consume alcohol? debe ser un texto.',
            'tobacco.required'              => 'El campo ¿Consume tabaco? es obligatorio.',
            'tobacco.string'                => 'El campo ¿Consume tabaco? debe ser un texto.',
            'asthma.required'               => 'El campo ¿Tiene asma? es obligatorio.',
            'asthma.string'                 => 'El campo ¿Tiene asma? debe ser un texto.',
            'asthma_text.string'            => 'El campo Texto del asma debe ser un texto.',
            'ets.required'                  => 'El campo ¿Tiene ETS? es obligatorio.',
            'ets.string'                    => 'El campo ¿Tiene ETS? debe ser un texto.',
            'ets_text.string'               => 'El campo Texto de las ETS debe ser un texto.',
        ];

    }
}

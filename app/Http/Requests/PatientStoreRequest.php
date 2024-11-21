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
            'whatsapp'          => ['required','string'],
            'birthdate'         => ['required','date'],
            'age'               => ['required','integer'],
            'has_disease'       => ['required','string'],
            'disease'           => ['nullable','string'],
            'allergies'         => ['required','string'],
            'epilepsy'          => ['required','string'],
            'hepatitis'         => ['required','string'],
            'hypertension'      => ['required','string'],
            'heart_disease'     => ['required','string'],
            'have_diabetes'     => ['required','string'],
            'pregnant'          => ['required','string'],
            'dental_floss'      => ['required','string'],
            'tooth_pain'        => ['required','string'],
            'bad_smell_taste'   => ['required','string'],

        ];
    }
    public function messages()
    {
        return [
            'firstname.required'            => "El Nombre del Paciente es obligatorio.",
            'lastname.required'             => "El Primer Apellido es obligatorio.",
            'phone.required'                => "El Teléfono es obligatorio.",
            'birthdate.required'            => "La Fecha de Nacimiento es obligatoria.",
            'age.required'                  => "La Edad es obligatoria.",
            'whatsapp.required'             => "El Whatsapp es obligatorio.",
            'has_disease.required'          => 'El campo ¿Padece alguna enfermedad? es obligatorio.',
            'has_disease.string'            => 'El campo ¿Padece alguna enfermedad? debe ser un texto.',
            'disease.string'                => 'El campo Enfermedad debe ser un texto.',
            'treatment_text.string'         => 'El campo Texto del tratamiento debe ser un texto.',
            'allergies.required'            => 'El campo ¿Tiene alergias? es obligatorio.',
            'allergies.string'              => 'El campo ¿Tiene alergias? debe ser un texto.',
            'epilepsy.required'             => 'El campo ¿Tiene epilepsia? es obligatorio.',
            'epilepsy.string'               => 'El campo ¿Tiene epilepsia? debe ser un texto.',
            'hepatitis.required'            => 'El campo ¿Tiene hepatitis? es obligatorio.',
            'hepatitis.string'              => 'El campo ¿Tiene hepatitis? debe ser un texto.',
            'hypertension.required'         => 'El campo ¿Tiene hipertensión? es obligatorio.',
            'hypertension.string'           => 'El campo ¿Tiene hipertensión? debe ser un texto.',
            'heart_disease.required'        => 'El campo ¿Tiene enfermedad cardíaca? es obligatorio.',
            'heart_disease.string'          => 'El campo ¿Tiene enfermedad cardíaca? debe ser un texto.',
            'have_diabetes.required'        => 'El campo ¿Tiene diabetes? es obligatorio.',
            'have_diabetes.string'          => 'El campo ¿Tiene diabetes? debe ser un texto.',
            'pregnant.required'             => 'El campo ¿Está embarazada? es obligatorio.',
            'pregnant.string'               => 'El campo ¿Está embarazada? debe ser un texto.',
            'dental_floss.required'         => 'El campo ¿Usa Hilo Dental? es obligatorio.',
            'dental_floss.string'           => 'El campo ¿Usa Hilo Dental? debe ser un texto.',
            'tooth_pain.required'           => 'El campo ¿Dolor en los dientes? es obligatorio.',
            'tooth_pain.string'             => 'El campo ¿Dolor en los dientes? debe ser un texto.',
            'bad_smell_taste.required'      => 'El campo ¿Tiene Mal olor o sabor? es obligatorio.',
            'bad_smell_taste.string'        => 'El campo ¿Tiene Mal olor o sabor? debe ser un texto.',
        ];

    }
}

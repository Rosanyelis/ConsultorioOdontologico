<?php

namespace App\Http\Requests;

use Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'rol' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255',
                        'unique:App\Models\User,email'],
            'password' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'rol.required' => "El rol de usuario es obligatorio.",
            'name.required' => "El nombre de usuario es obligatorio.",
            'email.required' => "El correo es obligatorio.",
            'email.email' => "El email no tiene formato válido.",
            'email.unique' => "El email ya se encuentra registrado.",
            'password.required' => "La contraseña es obligatoria.",
        ];

    }
}

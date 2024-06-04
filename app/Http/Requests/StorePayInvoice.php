<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePayInvoice extends FormRequest
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
            'pay_amount' => 'required|numeric|min:0',
            'pay_method' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'pay_amount.min' => 'El monto debe ser mayor que 0.',
            'pay_method.required' => 'El método de pago es obligatorio.',
            'pay_amount.required' => 'La monto es obligatorio.',
            'pay_amount.numeric' => 'El monto debe ser un valor numérico.',
        ];
    }
}

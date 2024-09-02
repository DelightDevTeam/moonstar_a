<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class DepositRequest extends FormRequest
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
            'agent_payment_id' => ['required', 'exists:user_payments,id'],
            'amount' => ['required', 'integer', 'min:1000'],
            'refrence_no' => ['required', 'integer', 'digits:6'],
            'note' => ['nullable', 'string'],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            // Honeypot must be empty (bots will fill it)
            'company' => ['nullable', 'prohibited_unless:company,'],
            'name'    => ['required', 'string', 'max:120'],
            'email'   => ['required', 'email:rfc,dns', 'max:180'],
            'phone'   => ['nullable', 'string', 'max:40'],
            'message' => ['required', 'string', 'max:5000'],
            'cf-turnstile-response' => ['required', 'turnstile'],
        ];
    }

    public function messages(): array
    {
        return [
            'company.prohibited_unless' => 'Spam detected.',
            'name.required'             => 'Please enter your name.',
            'email.required'            => 'Please enter your email.',
            'email.email'               => 'Please enter a valid email address.',
            'message.required'          => 'Please enter your message.',
        ];
    }
}

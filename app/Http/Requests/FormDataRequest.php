<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormDataRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string' , 'min:2', 'max:100', 'not_regex:' . ValidatorRules::NAME_REGEX_RULE],
            'subject' => ['required', 'string', 'min:2', 'max:100', 'not_regex:' . ValidatorRules::NAME_REGEX_RULE],
            'email' => ['required', 'email', 'max:100'],
            'message' => ['required', 'string', 'min:2', 'max:100'],
        ];
    }

    public function messages(): array
    {
        return [
            'subject.not_regex' => 'The subject field has special characters',
            'name.not_regex' => 'The name field has special characters'
        ];
    }
}

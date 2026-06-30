<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'between:8,40', 
                'regex:/^(?=.{8,40}$)[a-zA-Z]+(\s[a-zA-Z]+)*$/'],
            'email' => ['required', 'email', 'unique:users,email','max:100'],
            'password' => ['required', 
            'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[^a-zA-Z\d\s])\S{8,20}$/'],
            'confirm_password' => ['required', 'same:password'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.between' => 'The number of characters must be between 8 and 40 .',
            'name.regex' => 'Name must contain only characters and white spaces .',
            'email.unique' => 'This Email is already used before .',
            'password.regex' => 'Password must contain small char , Capital char , number and special char at least without white spaces between 8,20 chars .',
            'confirm_password.same' => "Two Passwords dosen't match ."
        ];
    }
}
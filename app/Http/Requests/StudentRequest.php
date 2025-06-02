<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $this->route('id'), // unique validation with exception for the current record
            'age' => 'required|integer|min:18',
            'city' => 'required|string|max:255',
        ];
    }


    /**
     * Get custom messages for validator errors.
     *

     */
    // public function messages(): array
    // {
    //     return [
    //         'name.required' => 'The name field is requiredddddddddddddddddddd.',
    //         'email.required' => 'The email field is requiredtttttttttttttt.',
    //         'email.unique' => 'The email has already been taken.',
    //         'age.required' => 'The age field is requiredddddddddd.',
    //         'age.integer' => 'The age must be an integer.',
    //         'age.min' => 'The age must be at least 18.',
    //         'city.string' => 'The city must be a string.',
    //         'city.required' => 'The city field is requiredddddddddddd.',
    //     ];
    // }
}

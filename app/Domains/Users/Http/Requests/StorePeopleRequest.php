<?php

namespace App\Domains\Users\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePeopleRequest extends FormRequest
{
    //
    public function __construct()
    {
        // ##
    }

    public function authorize(): bool   
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email|unique',
            'gender' => 'required',
            'name' => 'requied|max:20',
            'date_of_birth' => 'required|date_format:m/d/Y',
            'bio' => 'text|max:255',
            'password' => 'required|max:8'
            
        ];
    }

    public function messages(): array
    {
        return [
            
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'email.',
            'gender' => 'Gênero (sexo).',
            'date_of_birth' => 'Data de nascimento.',
            'bio' => 'Biografia.'
        ];
    }

}







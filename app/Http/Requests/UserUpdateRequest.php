<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
			'name' => 'required|string',
			'phone' => 'required|unique:users|phone',
            'password' => 'required|string|confirmed|min:8',
            'location' => 'required|string',
            'sex' => 'required|integer',
            'account' => 'required',
            'birthdate' => 'required|date'
        ];
    }
}

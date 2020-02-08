<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CentreUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
			'name' => 'required|string',
            'location' => 'required|string',
        ];
    }
}

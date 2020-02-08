<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
			'location' => 'required|string',
            'carrier_number' => 'required|string',
            'plate_number' => 'required|string',
            'description' => 'required|string',
            'user_id' => 'required|integer'
        ];
    }
}

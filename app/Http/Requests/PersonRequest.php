<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'person_id' => ['required', 'integer'],
            'name' => ['required'],
            'last_name' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

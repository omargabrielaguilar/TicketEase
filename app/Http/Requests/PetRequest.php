<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'integer'],
            'message' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

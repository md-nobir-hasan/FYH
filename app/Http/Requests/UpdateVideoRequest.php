<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVideoRequest extends FormRequest
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
            'for'=>"required|string",
            'embed_code'=>"required",
            'title'=>"required|string|nullable",
            'des'=>"required|string|nullable",
            'additional_des'=>"required|string|nullable",
            'default'=>"required|numeric|nullable",
        ];
    }
}

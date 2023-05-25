<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientTypeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' =>'required|string|max:255|unique:client_types,name',
            'currency' =>'required',
            'billing_period' =>'required',
            'price'=>"required|numeric",
           // 'dis'=>"required|numeric",
            'des'=>"required|string",
            'interval_count' => "required"

        ];
    }
}

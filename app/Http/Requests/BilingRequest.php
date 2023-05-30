<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BilingRequest extends FormRequest
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
            'f_name' => 'required',
             'l_name' => 'required',
            	'email' => 'required|email',
            	'phone' => 'required|min:10|max:16',
            	'country' => 'required',
            	'city' => 'required',
            	'zip' => 'required',
                 

        ];
    }
}

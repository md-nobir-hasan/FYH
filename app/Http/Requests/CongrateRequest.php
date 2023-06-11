<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CongrateRequest extends FormRequest
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
            'image' => 'nullable',
            	'title' => 'required',
                'heading' => 'required',
             'subtitle' => 'required',
             'opOne' => 'required|min:5',
             'opTwo' => 'required|min:5',
             'opThree' => 'required|min:5',
             'opFour' => 'required|min:5',
             'icon' => 'required',
            	'option_title' => 'nullable',
            	'button_one' => 'required',
             'button_two' => 'required'

        ];
    }
}

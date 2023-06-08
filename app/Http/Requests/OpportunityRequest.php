<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OpportunityRequest extends FormRequest
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
            'title' => 'required',
            'heading' => 'required',
            	'subtitle' => 'required',
            	'opOne' => 'required',
            	'opTwo' => 'required',
            	'opThree' => 'required',
            	'opFour' => 'required',
            	'opFive' => 'required',
            	'opSix' => 'required',
            	'opSeven' => 'required',
            	'opEight' => 'required',
            	'opNine' => 'required',
            	'icon' => 'required',
            
            
        ];
    }
}

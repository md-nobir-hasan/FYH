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
            	'subtitle' => 'required',
            	'description' => 'required',
            	'benefit_title' => 'required',
            	'benefit_subtitle' => 'required',
                	'story_title' => 'required',
                	'story_subtitle' => 'required',
                	'service_title' => 'required',
                	'service_subtitle'	=> 'required'
        ];
    }
}

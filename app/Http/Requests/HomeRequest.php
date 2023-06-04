<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
            

             'title_one' => 'required',
             'title_one_description' => 'required',
             'title_two' => 'required',
             'title_two_description' => 'required',
             'benefit_title' => 'required',
             'benefit_subtitle' => 'required',
             'story_title' => 'required',
             'story_subtitle' => 'required',
             'feature_title' => 'required',
             'feature_subtitle' => 'required',
             'image_title' => 'required',
             'image_subtitle' => 'required',
             'service_title' => 'required',
             'service_subtitle' => 'required',
             'share_title' => 'required',
             'share_subtitle' => 'required',
             'image' => 'nullable',
        ];
    }
}

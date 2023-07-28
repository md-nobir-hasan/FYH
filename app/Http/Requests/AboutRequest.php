<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'title_description' => 'required',
            'heading' => 'required',
            'heading_description' => 'required' ,
            'images' => 'nullable',
            'images_description' => 'required',
              'first_image' => 'nullable',
              'fimg_story' => 'nullable',
              'second_image' => 'nullable',
              	'simg_story' => 'nullable'
        ];
    }
}

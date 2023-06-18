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
            

             'title_one' => 'required|max:240',
             'title_one_description' => 'required',
             'title_two' => 'required|max:240',
             'title_two_description' => 'required',
             'benefit_title' => 'required|max:240',
             'benefit_subtitle' => 'required',
             'story_title' => 'required|max:240',
             'story_subtitle' => 'required',
             'feature_title' => 'required|max:240',
             'feature_subtitle' => 'required',
             'image_title' => 'required|max:240',
             'image_subtitle' => 'required',
             'service_title' => 'required|max:240',
             'service_subtitle' => 'required',
             'customer_title' => 'required|max:240',
              'customer_subtitle' => 'required',
             'share_title' => 'required|max:240',
             'share_subtitle' => 'required',
             'image' => 'nullable',
             'lgImage' => 'nullable',
             'move_title' => 'required|max:240',
             'move_subtile' => 'required',
             'intr_title' => 'required|max:240',
             'intr_subtile' => 'required',
             'help_image' => 'nullable',
             'help_title' => 'required|max:240',
             'help_subtile' => 'required',
             'thank_heading' => 'required|max:240',
             'thank_image' => 'nullable',
             'thank_subtitle' => 'required',
             'thank_title' => 'required|max:240',
             'reaction_heading' => 'required',
'reaction_titleOne' => 'required|max:240',
'reaction_titleTwo' => 'required|max:240',
'community_sub_title' => 'required|max:240',
'community_sub_subtitle' => 'required',
        ];
    }
}

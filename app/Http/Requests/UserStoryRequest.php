<?php

namespace App\Http\Requests;

use App\Models\Story;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserStoryRequest extends FormRequest
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
        if(Story::where('user_id',Auth::user()->id)->first()){
            return [
                'name' => 'required|string|max:255',
                'title' => 'required|string',
                'description' => 'required|min:30',
                'profession' => 'required|string|max:255',
                'city' => 'required',
                'country_id' => 'required',
           ];
         }else{
            return [
                'name' => 'required|string|max:255',
                'title' => 'required|string|unique:stories,title',
               'image' =>'required|mimes:jpg,jpeg,png',
               'description' => 'required|min:30',
               'profession' => 'required|string|max:255',
               // 'address' => 'required',
               'city' => 'required',
               'country_id' => 'required',
           ];
         }
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMenuRequest extends FormRequest
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
        $id = $this->menu->id;
        return [
            'name' =>'required|string|max:255|unique:menus,name,'.$id.',id',
            'serial' =>'nullable|numeric',
            // 'link_id' =>'nullable|exists:links,id',
            // 'client_type_id.*' =>'nullable|exists:client_types,id',
        ];
    }
}

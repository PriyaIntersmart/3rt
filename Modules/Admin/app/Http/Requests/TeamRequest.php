<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $rules = [
            'type'=>'required',
            'name'=> 'required|max:20',
            'designation'=>'required',
            'description' => 'required|min:3|max:500',
            'sort_order' => 'integer|min:0',

        ];
        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['type'] = 'required' ;
            $rules['name'] = 'required|max:20';
            $rules['designation'] = 'required';
            $rules['sort_order'] = 'integer|min:0';
        }

        return $rules;
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}

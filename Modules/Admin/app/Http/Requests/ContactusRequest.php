<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactusRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $rules= [
            'title'=>'required|max:80',
            'iframe'=>'required',
            'address'=>'required',
            'sort_order' => 'integer|min:0',

        ];
        if (in_array($this->method(), ['PUT', 'PATCH'])) {

            $rules['title'] = 'required|max:80';
            $rules['iframe'] = 'required';
            $rules['address'] = 'required';
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

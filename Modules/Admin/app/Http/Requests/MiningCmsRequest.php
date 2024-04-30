<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MiningCmsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $rules= [
            'title'=>'required|max:80',
            'subtitle'=>'required|max:150',

        ];
        if (in_array($this->method(), ['PUT', 'PATCH'])) {

            $rules['title'] = 'required|max:80';
            $rules['subtitle'] = 'required|max:150';
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

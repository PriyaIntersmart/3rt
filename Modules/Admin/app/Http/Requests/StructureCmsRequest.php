<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StructureCmsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $rules= [
            'left_section_title'=>'required|max:80',
            'right_section_title'=>'required|max:80',
            'section_two_image' => 'nullable|image|mimes:png,jpg,webp,jpeg|max:1024',

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

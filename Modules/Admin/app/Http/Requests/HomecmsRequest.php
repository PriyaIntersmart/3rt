<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomecmsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'section_one_title' => 'required|min:3|max:80',
            'section_one_subtitle' => 'required|min:3|max:150',
            'section_one_description' => 'max:500',
            'section_three_title' => 'required|min:3|max:80',
            'section_four_title'=> 'required|min:3|max:80',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}

<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KeyElementsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {

            $rules = [
                'title' => 'required|max:255',
                'logo_image' => 'nullable|image|mimes:png,jpg,webp,jpeg|max:1024',
                'description'=>'required|max:150',
                'sort_order' => 'integer|min:0',
            ];

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

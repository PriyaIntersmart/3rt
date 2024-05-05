<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KeyTrendRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'starting_year'=>'required',
            'starting_value'=>'required',
            'ending_year'=>'required',
            'ending_value'=>'required',
            'title'=>'required',
            'percentage'=>'required',
            'heading'=>'required',
            'description'=>'required'
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

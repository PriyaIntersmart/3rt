<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TokenRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'title_one'=>'required',
            'title_two'=>'required',
            'title_three'=>'required',
            'title_four'=>'required',
            'title_five'=>'required',
            'title_six'=>'required',
            'title_seven'=>'required',
            'title_eight'=>'required',
            'title_nine'=>'required',
            'title_ten'=>'required',

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

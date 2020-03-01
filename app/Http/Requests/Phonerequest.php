<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Phonerequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'phone'=>'numeric|required|digits:11|starts_with:010,011,012|unique:phones',

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'first_name'=>'bail|required|max:100',
            //'email'=>'email:rfc,dns',
            //'password'=>'password:api',
            'phone'=>'digits_between:8,10',
            'last_name'=>'bail|required|max:100'
        ];
    }
}

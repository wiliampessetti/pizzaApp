<?php

namespace CodeDelivery\Http\Requests;

use CodeDelivery\Http\Requests\Request;

class AdminClientRequest extends Request
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
            'user.name' => 'required|max:255',
            //'user.email' => 'required|email|max:255|unique:users,email',
            'phone' => 'required|max:255',
            'neighborhood' => 'required|min:3',
            'street' => 'required|min:3',
            'number' => 'required',
            'city' => 'required|max:255|',
            'zipcode' => 'required|max:9|',
            'state' => 'required|max:2|',
            'user.password' => 'required|min:6|confirmed',
            'user.password_confirmation' => 'required|min:6',
        ];
    }
}

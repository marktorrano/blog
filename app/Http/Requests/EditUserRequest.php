<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditUserRequest extends Request
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
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:users,email,' . $this->route('users')
        ];
    }
    
    public function messages()
    {
        return [
            //
            'firstname.required'=>'Fill this up',
            'lastname.required'=>'Fill this up',
            'email.required'=>'Fill this up',
            'email.unique'=>'Already Taken'
        ];
    }
}

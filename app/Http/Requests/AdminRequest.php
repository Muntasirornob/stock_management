<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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

     
    public function rules()
    {
        return [
                'username'=> 'required',
                'fullname'=> 'required',
                'email'=> 'required',
                'image'=> 'required',
                'password'=> 'required',
                'repassword'=> 'required',
               
        ];
    }

    public function messages(){
        return [
           
        ];
    }
}
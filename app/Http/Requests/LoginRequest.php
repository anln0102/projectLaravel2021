<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
            'student_code' =>'required|string|regex:/([1-9]0?)[0-9](TE|te|ad|AD)\B[0-9]+[1-9]/m',
        ];
        
    }

    public function messages(){

        return[
            
            'email.required' => 'Eメールを入力してください！',
            'email' => 'Eメールの形が正しくない！',
            'password.required' => 'パスワードを入力してください！',
            'password.min' => '8文字以上を入力してください！',
            'student_code.required' => '学生番号入力してください！',
            'student_code.regex'   => '学生番号無効！',
        ];

    }
}

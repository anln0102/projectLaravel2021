<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
            'student_code' =>'required|string|regex:/([1-9]0?)[0-9](TE|te|ad|AD)\B[0-9]+[1-9]/m|unique:users',
            'seminar_room' =>'string',
            'grade' => 'required|string',
        ];
    }

    public function messages(){

        return[
            'name.required' => 'お名前を入力してください！',
            'name.max' => '50文字以下入力してください！',
            'email.required' => 'Eメールを入力してください！',
            'email' => 'Eメールの形が正しくない！',
            'password.required' => 'パスワードを入力してください！',
            'password.min' => '8文字以上を入力してください！',
            'password.confirmed' => 'パスワードの確認が一致しません！',
            'student_code.required' => '学生番号入力してください！',
            'student_code.regex'   => '学生番号無効！',
        ];

    }
}

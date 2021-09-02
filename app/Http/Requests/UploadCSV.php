<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadCSV extends FormRequest
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
            'fileimport'=>'required|max:50000|mimes:csv,xls,xlsx'
        ];
    }
    //

    public function messages(){ 

        return[
            'fileimport.required' => 'ファイルを選択してください',
            'fileimport.max' => '５Mb以下のファイルを選択してください',

        ];

    }
}

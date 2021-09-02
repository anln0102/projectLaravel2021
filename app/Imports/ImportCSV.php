<?php

namespace App\Imports;

use App\Models\Information;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\Importable;
//use Carbon\Carbon; 

class ImportCSV implements ToModel, WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function getCsvSettings(): array
    {
        return [
            'input_encoding' => 'Shift_JIS'
        ];
    }
    public function rules(): array
    {
        return [
            'company_name'  =>  'required',
            'locationInfo'  =>  'required',
            'date'          =>  'required'
        ];
    }
    
    public function model(array $row)
    {
        return new Information([

            'company_name'          => $row['company_name'],
            'location_info'         => $row['location_info'],
            'date'                  => $row['date'],
            'info'                  => $row['info'],
            'recruited_occupation'  => $row['recruited_occupation'],
            'written_test'          => $row['written_test'],
            'written_test_content'  => $row['written_test_content'],
            'interview'             => $row['interview'],
            'industry'              => $row['industry'],
            'qualification'         => $row['qualification'],
            'country'               => $row['country'],
            'age_limit'             => $row['age_limit'],
            'grade'                 => $row['grade'],
            'graduate'              => $row['graduate'],
            'part_time_job'         => $row['part_time_job'],
            'intership'             => $row['intership'],
            'condidate'             => $row['condidate'],
            'url'                   => $row['url'],
            'logo'                  => '/Template/Gui2019/img/sample.png',
        ]);
    }
    // public function headingRow(): int
    // {
    //     return 3;
    // }

    

}

<?php

namespace App\Exports;

use App\Models\Information;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CSVExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Information::all()->first();
    }
    public function headings(): array {
        return [
            'company_name',        
			'location_info',       
			'date',                
			'info',                
			'recruited_occupation',
			'written_test',      
			'written_test_content',
			'interview',           
			'industry',            
			'qualification',       
			'country',             
			'age_limit',          
			'grade',               
			'graduate',            
			'part_time_job',
			'intership',           
			'condidate',           
			'url',                                  
            
        ];
    }
    public function map($information): array {
        return [
        ];
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Information extends Model
{
    //
    protected $table = 'information';

    protected $fillable = [
    	'location_info', 'date', 'company_name', 'infor', 'written_test', 'written_test_content', 'interview', 'industry', 'country', 'recruited_occupation', 'qualification', 'age_limit', 'grade', 'graduate', 'condidate', 'job_vote', 'part_time_job', 'intership','url','logo',
    ];
   
   
    public function students(){
    	return $this->belongstoMany('App\Models\Student','book','information_id','students_id')->withTimestamps();
    }
}

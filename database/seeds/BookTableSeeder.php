<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('book')->delete();
        
        DB::table('book')->insert(array (
            0 => 
            array (
                'id' => 100,
                'information_id' => 16,
                'students_id' => 41,
                'created_at' => '2019-10-17 09:52:34',
                'updated_at' => '2019-10-17 09:52:34',
            ),
            1 => 
            array (
                'id' => 108,
                'information_id' => 20,
                'students_id' => 41,
                'created_at' => '2019-10-21 01:35:44',
                'updated_at' => '2019-10-21 01:35:44',
            ),
            2 => 
            array (
                'id' => 109,
                'information_id' => 19,
                'students_id' => 41,
                'created_at' => '2019-10-21 01:35:53',
                'updated_at' => '2019-10-21 01:35:53',
            ),
            3 => 
            array (
                'id' => 110,
                'information_id' => 23,
                'students_id' => 41,
                'created_at' => '2019-10-21 01:35:59',
                'updated_at' => '2019-10-21 01:35:59',
            ),
            4 => 
            array (
                'id' => 111,
                'information_id' => 23,
                'students_id' => 32,
                'created_at' => '2019-11-27 05:50:28',
                'updated_at' => '2019-11-27 05:50:28',
            ),
            5 => 
            array (
                'id' => 112,
                'information_id' => 23,
                'students_id' => 35,
                'created_at' => '2019-11-27 05:50:38',
                'updated_at' => '2019-11-27 05:50:38',
            ),
            6 => 
            array (
                'id' => 113,
                'information_id' => 42,
                'students_id' => 32,
                'created_at' => '2020-01-04 18:26:22',
                'updated_at' => '2020-01-04 18:26:22',
            ),
            7 => 
            array (
                'id' => 114,
                'information_id' => 47,
                'students_id' => 32,
                'created_at' => '2020-01-04 18:26:39',
                'updated_at' => '2020-01-04 18:26:39',
            ),
            8 => 
            array (
                'id' => 115,
                'information_id' => 63,
                'students_id' => 32,
                'created_at' => '2020-01-05 13:09:15',
                'updated_at' => '2020-01-05 13:09:15',
            ),
        ));
        
        
    }
}
<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SerminaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sermina')->delete();
        
        \DB::table('sermina')->insert(array (
            0 => 
            array (
                'id' => 2,
                'serminaName' => '渡辺研究室',
                'teacherName' => '渡辺　哲',
                'created_at' => '2019-09-22 04:09:56',
                'updated_at' => '2019-09-22 04:09:56',
            ),
            1 => 
            array (
                'id' => 3,
                'serminaName' => '第一工大上野研究室',
                'teacherName' => '上野　仁',
                'created_at' => '2019-09-22 04:16:07',
                'updated_at' => '2019-09-22 04:16:07',
            ),
            2 => 
            array (
                'id' => 4,
                'serminaName' => '建宮研究室',
                'teacherName' => '建宮　努',
                'created_at' => '2019-09-22 04:17:15',
                'updated_at' => '2019-09-22 04:17:15',
            ),
            3 => 
            array (
                'id' => 5,
                'serminaName' => '衣川研究室',
                'teacherName' => '衣川 功一',
                'created_at' => '2019-09-22 04:17:39',
                'updated_at' => '2019-09-22 04:17:39',
            ),
            4 => 
            array (
                'id' => 6,
                'serminaName' => '木下研究室',
                'teacherName' => '木下 和歩',
                'created_at' => '2019-09-22 04:18:23',
                'updated_at' => '2019-09-22 04:18:23',
            ),
            5 => 
            array (
                'id' => 7,
                'serminaName' => '陳研究室',
                'teacherName' => '陳　泓',
                'created_at' => '2019-09-22 04:18:45',
                'updated_at' => '2019-09-22 04:18:45',
            ),
            6 => 
            array (
                'id' => 8,
                'serminaName' => '丹野研究室',
                'teacherName' => '丹野　健一郎',
                'created_at' => '2019-09-22 04:19:10',
                'updated_at' => '2019-09-22 04:19:10',
            ),
            7 => 
            array (
                'id' => 9,
                'serminaName' => '鮑研究室',
                'teacherName' => '鮑 慎琪',
                'created_at' => '2019-09-22 04:19:31',
                'updated_at' => '2019-09-22 04:19:31',
            ),
            8 => 
            array (
                'id' => 10,
                'serminaName' => '第一工大鈴木研究室',
                'teacherName' => '鈴木 康治',
                'created_at' => '2019-09-22 04:20:25',
                'updated_at' => '2019-09-22 04:20:25',
            ),
            9 => 
            array (
                'id' => 11,
                'serminaName' => '平田研究室',
                'teacherName' => '平田 昌子',
                'created_at' => '2019-09-22 04:20:51',
                'updated_at' => '2019-09-22 04:20:51',
            ),
        ));
        
        
    }
}
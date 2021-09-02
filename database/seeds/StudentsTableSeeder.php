<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('students')->delete();
        
        DB::table('students')->insert(array (
            0 => 
            array (
                'id' => 25,
                'student_code' => '10te555',
                'name' => '555',
                'password' => '$2y$10$VoW7oxyHle3/F7tFMVbSxOQyR.Jq5ASUSxgIbBZV.gkK0k8I.AC7q',
                'picture' => '20161219191306dream.jpg',
                'email' => 'houkowamail@gamil.com',
                'seminar_room' => '陳',
                'grade' => '3年生',
                'resume' => NULL,
                'isAdmin' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'remember_token' => NULL,
            ),
            1 => 
            array (
                'id' => 31,
                'student_code' => '10te250',
                'name' => 'zh',
                'password' => '3dd635a808ddb6dd4b6731f7c409d53dd4b14df2',
                'picture' => 'Lighthouse.jpg',
                'email' => '11419125@qq.com',
                'seminar_room' => '鮑 研',
                'grade' => '1年生',
                'resume' => '',
                'isAdmin' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'remember_token' => NULL,
            ),
            2 => 
            array (
                'id' => 32,
                'student_code' => '16te435',
                'name' => 'Duc',
                'password' => '$2y$10$z3YEofTROwvneoXju5dMCeGaH0kTG6e39UoS33YgEB9y/JmE9g62W',
                'picture' => '/uploads/images/user/duc_1572332912.jpg',
                'email' => 'nguyendinhduc269@gmail.com',
                'seminar_room' => '鮑研究室',
                'grade' => '1',
                'resume' => NULL,
                'isAdmin' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'remember_token' => '5FlApAVkz5NYsRuYblCp6WSau5qv6z9y0TACWSQtqYz80T6WREZyLeuLBo0g',
            ),
            3 => 
            array (
                'id' => 34,
                'student_code' => '16TE436',
                'name' => 'Kuro Neko',
                'password' => '$2y$10$P7.Fe/KwaNJPhA8863sriOgaVw0Cjq7UAvIkvFyQ0VX41StHyZBM2',
                'picture' => 'C:\\xampp\\tmp\\php6A6.tmp',
                'email' => 'kuroneko@gmail.com',
                'seminar_room' => 'aaa',
                'grade' => '4',
                'resume' => NULL,
                'isAdmin' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'remember_token' => NULL,
            ),
            4 => 
            array (
                'id' => 35,
                'student_code' => '17TE222',
                'name' => '山本　太郎',
                'password' => '$2y$10$/Vg1eLNKKFueiKxj/w1WEu5mznX1fPkgByNKt3TkfTiFBG8znf/1W',
                'picture' => '/uploads/images/_1566915445.jpg',
                'email' => 'yamamototaro@gmail.com',
                'seminar_room' => 'あああ',
                'grade' => '3',
                'resume' => NULL,
                'isAdmin' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'remember_token' => NULL,
            ),
            5 => 
            array (
                'id' => 36,
                'student_code' => '17TE999',
                'name' => '大和　太郎',
                'password' => '$2y$10$zw3aDs4SVS5Zn2fzEsm82uZF3Bu.5FTcAWVGnSZy11PFnQJBXlJaq',
                'picture' => '/Template/Gui2019/img/avatar-mini.jpg',
                'email' => 'yamatotaro@gmail.com',
                'seminar_room' => '丹野研究室',
                'grade' => '3',
                'resume' => NULL,
                'isAdmin' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'remember_token' => NULL,
            ),
            6 => 
            array (
                'id' => 37,
                'student_code' => '17TE８８８',
                'name' => '川口　みつき',
                'password' => '$2y$10$MH1DJI/j6PS2nFWKYdLg6uoRbwKLjUtk4Ewoe5JqXU.cM61Y.1TE2',
                'picture' => '/Template/Gui2019/img/avatar-mini.jpg',
                'email' => 'kawaguchimitsuki@gmail.com',
                'seminar_room' => '無し',
                'grade' => '1年',
                'resume' => NULL,
                'isAdmin' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'remember_token' => NULL,
            ),
            7 => 
            array (
                'id' => 41,
                'student_code' => '16te219',
                'name' => 'Test',
                'password' => '$2y$10$4hR6MCbaOtEj0bm0u422hO.V.YE1lUhc/f3FzLl5EVbMJL1NcL0yS',
                'picture' => 'http://localhost:8000/Template/Gui2019/img/user.jpg',
                'email' => 'test@yahoo.com',
                'seminar_room' => '鮑研究室',
                'grade' => '1',
                'resume' => NULL,
                'isAdmin' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'remember_token' => NULL,
            ),
            8 => 
            array (
                'id' => 43,
                'student_code' => '10te998',
                'name' => '田中 二朗',
                'password' => '$2y$10$CRavmhRY1CjQk7TdkPGxn.l6GhglhWce21WAYiJITD3xLL4yVAvTS',
                'picture' => '/uploads/images/_1570001778.jpg',
                'email' => 'tanakajiro@gmail.com',
                'seminar_room' => '鮑研究室',
                'grade' => '3',
                'resume' => NULL,
                'isAdmin' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'remember_token' => NULL,
            ),
            9 => 
            array (
                'id' => 44,
                'student_code' => '10te001',
                'name' => 'Admin',
                'password' => '$2y$10$q8eUFHnmIqgeTeQE6.OePuOKf5gO4Llpb2lsBe7dft.IlaK.BPuM6',
                'picture' => '/Template/Gui2019/img/user.jpg',
                'email' => 'admin@gmail.com',
                'seminar_room' => '渡辺研究室',
                'grade' => '1',
                'resume' => NULL,
                'isAdmin' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'remember_token' => NULL,
            ),
            10 => 
            array (
                'id' => 46,
                'student_code' => '16te452',
                'name' => 'DucDat',
                'password' => '$2y$10$u70zU8x9XG9ntXxsnXVIs.Y8ki0HsBmynD..fcldthi/xxpr8ycY6',
                'picture' => 'http://localhost/Gui2019/public/Template/Gui2019/img/user.jpg',
                'email' => 'vuducdat@gmail.com',
                'seminar_room' => '研究室選択',
                'grade' => '1',
                'resume' => NULL,
                'isAdmin' => NULL,
                'created_at' => '2020-01-02 18:16:22',
                'updated_at' => '2020-01-02 18:16:22',
                'remember_token' => NULL,
            ),
        ));
        
        
    }
}
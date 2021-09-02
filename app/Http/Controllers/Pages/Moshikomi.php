<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Information;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;
use App\Http\Controllers\Controller;


class Moshikomi extends Controller
{
    //
    public function getmoshikomi(Request $request)
    {
        $infor = Information::find( $request->get('infor_id'));
        //申し込み重複するか確認する。
        if ( $infor->students()->exists()) {
            foreach ($infor->students as $student) {
                if($student->id == $request->get('student_id'))
                {
                    return redirect()->back()->with('danger', '失敗しました！　この説明会は申し込みしています！');
                }
            }  
        }
        // 開催日を確認する
        if (Carbon::parse($infor->date) < Carbon::now()) {
            return redirect()->back()->with('danger', '失敗しました！　この説明会はすぎしています！');
        }
        $infor->students()->attach($request->get('student_id'));
        return redirect()->back()->with('success', '追加完成した！');
    }

}

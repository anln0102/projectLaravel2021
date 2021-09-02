<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $infors = Information::has('students')->get();
     $infor = DB::table('information')->get();
     $students = DB::table('students')->orderBy('student_code')->get();
     return view('admin.book.index',compact('infors','infor','students'));
   }
   public function store(Request $request)
   {
        $request->validate([
        'student_id'   =>  'required',
        'infor_id'     =>  'required'
      ]);
      $infor = Information::find( $request->get('infor_id'));
      if ( $infor->students()->exists()) {
        foreach ($infor->students as $student) {
          if($student->id == $request->get('student_id'))
          {
            return redirect('/admin/book')->with('danger', '失敗しました！　この説明会は申し込みしています！');
          }
        }
      }
      $infor->students()->attach($request->get('student_id'));
      return redirect('/admin/book')->with('success', '追加完成した！');
  }
  public function destroy(Request $request)
  {
    $infor = Information::find( $request->get('infor_id'));
    $infor->students()->detach($request->get('student_id'));
    return redirect('/admin/book')->with('success', '削除しました！');
  }
}

<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Models\Sermina;
use App\Http\Controllers\Controller;


class SerminaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
     $sermina = Sermina::latest()->paginate(20);

     return view('admin.sermina.index', compact('sermina'));
 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.sermina.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $sermina = new Sermina([
            'serminaName' =>  $request->get('serminaName'),
            'teacherName' => $request->get('teacherName'), 
        ]);
        $sermina->save();
        return redirect('/admin/sermina')->with('success', '追加完成した！');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $sermina = Sermina::find($id);
        return view('admin.sermina.edit', compact('sermina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $sermina = Sermina::find($id);
        $sermina->serminaName =  $request->get('serminaName');
        $sermina->teacherName = $request->get('teacherName'); 

        $sermina->save();

        return redirect('/admin/sermina')->with('success', '更新した！');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $sermina = Sermina::find($id);
        $sermina->delete();

        return redirect('/admin/sermina')->with('success', '削除しました!');
    }

     
}

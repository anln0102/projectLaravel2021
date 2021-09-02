@extends('admaster')

@section('main')

<!-- List View Start -->
<div class="row">
  <div class="col-lg-12">

    <div class="col-sm-12">
      @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
      @endif
    </div>
    <section class="panel">
    <h3 class="display-3">会員新規登録</h3>
    <div>
      <a style="margin: 19px;" href="{{ route('student.create')}}" class="btn btn-primary">新規登録</a>
    </div>
    </section>  
    <section class="panel">
      <header class="panel-heading">
        <h3>会員一覧</h3>
        
      </header>
      <div class="panel-body">
        <div class="row">
          <p class="col-sm-4">研究室: 
            <select size="1" name="links" onchange="window.location.href=this.value;">
              <option>選択</option>
              @foreach($serminas as $select)
              <option value="{{ route('student.index', [
              'seminar_room' => $select->serminaName,
              'sort'  => request('sort')
              ]) }}">{{$select->serminaName}}</option>
              @endforeach
              <option value="{{ route('student.index')}}">無し</option>
            </select>
          </p>
          <p class="col-sm-4 text-right">
           学籍番号  ソート:
           <a href="{{ route('student.index', [
           'seminar_room' => request('seminar_room'),
           'sort' => 'asc'
           ]) }}">昇順</a> |　|
           <a href="{{ route('student.index', [
           'seminar_room' => request('seminar_room'),
           'sort' => 'desc'
           ]) }}">降順</a>
         </p>
       </div>
     </div>


     <table class="table table-striped table-advance table-hover">
      <tbody>
        <tr class="thtop">
          <th><i class="icon_profile"></i> 名前</th>
          <th><i class="icon_profile"></i>写真</th>
          <th><i class="icon_piechart"></i> 学生番号</th>
          <th><i class="icon_mail_alt"></i> メール</th>
          <th><i class="icon_desktop"></i> 研究室</th>
          <th><i class="icon_clock_alt"></i> 年生</th>
          <th><i class="icon_profile"></i> 区別</th>
          <th><i class="icon_cogs"></i> アクション</th>
        </tr>
        @foreach($students as $users)
        <tr>
          <td>{{$users->name}}</td>
          <td><img src="{{asset($users->picture)}}" class="img-circle" style="max-width: 50px; max-height: 50px;"></td>
          <td>{{$users->student_code}}</td>
          <td>{{$users->email}}</td>
          <td>{{$users->seminar_room}}</td>
          <td>{{$users->grade}}</td>
          <td>{{($users->isAdmin == 1) ? '管理者':'一般'}}</td>
          <td>
            <div class="btn-row">
              <div class="btn-group">
                <form class="form-inline" onsubmit="return confirm('本当に削除しますか?');" action="{{ route('student.destroy', $users->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                   <a href="{{ route('student.edit',$users->id)}}" class="btn btn-primary"> <i class="icon_check_alt2">編集</i></a>
                  <button class="btn btn-danger" type="submit"> <i class="icon_close_alt2">削除</i></button>
                </form>

              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="text-center">
        {{ $students->links() }}
      </div>
    </section>
  </div>
</div>
<!-- List View End -->
@endsection 
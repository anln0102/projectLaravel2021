@extends('admaster')

@section('main')


<!-- List View Start -->
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <div class="col-sm-12">
        @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div>
        @endif
      </div>
      <h1 class="display-3">研究室追加</h1>
      <div>
        <a style="margin: 19px;" href="{{ route('sermina.create')}}" class="btn btn-primary">研究室追加</a>
      </div>
      </section>
      <section class="panel">
      <header class="panel-heading">
        <h3>研究室一覧</h3>
        
      </header>  
      <table class="table table-striped table-advance table-hover">
        <tbody>
          <tr class="thtop">
            <th><i class="icon_profile"></i> No.</th>
            <th><i class="icon_calendar"></i> 研究室名</th>
            <th><i class="icon_profile"></i> 担任先生</th>
            <th><i class="icon_cogs"></i> アクション</th>
          </tr>
          @foreach($sermina as $new)
          <tr>
            <td>{{$loop->index +1}}</td>
            <td>{{$new->serminaName}}</td>
            <td>{{$new->teacherName}}</td>
            <td>
              <div class="btn-group">
                <form class="form-inline" onsubmit="return confirm('本当に削除しますか?');" action="{{ route('sermina.destroy', $new->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <a href="{{ route('sermina.edit',$new->id)}}" class="btn btn-primary"> <i class="icon_check_alt2">編集</i></a>
                  <button class="btn btn-danger" type="submit"> <i class="icon_close_alt2">削除</i></button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </section>
  </div>
</div>
<!-- List View End -->
@endsection 
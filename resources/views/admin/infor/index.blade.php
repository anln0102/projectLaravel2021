@extends('admaster')

@section('main')


<!-- List View Start -->
<div class="row">
  
  <div class="col-lg-12">
    <div class="col-sm-12">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif
      @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
      @endif
    </div>
    <section class="panel">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="display-3">会社の説明会追加</h1>
        <div class="col-sm-2" > 
          <a href="{{ route('infor.create')}}" class="btn btn-primary">説明会追加</a>
        </div> 
        <div class="col-sm-9">
          <form class="form-inline" role="form" action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <input type="file" name="fileimport" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary mb-2">説明会データをアップロードする</button>
              <a class="btn btn-warning" href="{{ route('export') }}">CSVテンプレート</a>
                
          </form>
        </div>
      </div>
  </div>
  </section>
  <section class="panel">
    <header class="panel-heading">
      <h3>説明会情報一覧</h3>
    </header>
    <div class="panel-body">
      <div class="row">
        <p class="col-sm-4">採用職種: 
          <select size="1" name="links" onchange="window.location.href=this.value;">
            <option>選択</option>
            <option value="{{ route('infor.index', [
            'recruited_occupation' => 'SE',
            'sort'  => request('sort')
            ]) }}">SE</option>
            <option value="{{ route('infor.index', [
            'recruited_occupation' => '教師',
            'sort'  => request('sort')
            ]) }}">教師</option>
            <option value="{{ route('infor.index', [
            'recruited_occupation' => '販売',
            'sort'  => request('sort')
            ]) }}">販売</option>
            <option value="{{ route('infor.index')}}">無し</option>
          </select>
        </p>
        <p class="col-sm-4 text-right">
         開催日  ソート:
         <a href="{{ route('infor.index', [
         'recruited_occupation' => request('recruited_occupation'),
         'sort' => 'asc'
         ]) }}">昇順</a> |　|
         <a href="{{ route('infor.index', [
         'recruited_occupation' => request('recruited_occupation'),
         'sort' => 'desc'
         ]) }}">降順</a>
       </p>
     </div>
   </div>
   <table class="table table-striped table-advance table-hover">
    <tbody>
      <tr class="thtop">
        <th><i class="icon_profile"></i> 会社名</th>
        <th><i class="icon_calendar"></i> 開催日</th>
        <th><i class="icon_pin_alt"></i> 説明会の場所</th>
        <th><i class="icon_mail_alt"></i> 企業の業種</th>
        <th><i class="icon_laptop"></i> 採用職種</th>
        <th><i class="icon_cogs"></i> アクション</th>
      </tr>
      @foreach($infors as $new)
      <tr>
        <td>{{$new->company_name}}</td>
        <td>{{$new->date}}</td>
        <td>{{$new->location_info}}</td>
        <td>{{$new->industry}}</td>
        <td>{{$new->recruited_occupation}}</td>
        <td>
          <div class="btn-group">
            <form class="form-inline" onsubmit="return confirm('本当に削除しますか?');" action="{{ route('infor.destroy', $new->id)}}" method="post">
              @csrf
              @method('DELETE')
               <a href="{{ route('infor.edit',$new->id)}}" class="btn btn-primary"> <i class="icon_check_alt2">編集</i></a>
              <button  class="btn btn-danger" type="submit"> <i class="icon_close_alt2">削除</i></button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="text-center">
    {{ $infors->links() }}
  </div>
</section>
</div>
</div>
<!-- List View End -->
@endsection 
@extends('admaster')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
  <h1 class="display-3">研究室追加</h1>
  <div>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div><br />
    @endif
    <form method="post" action="{{ route('sermina.store')}}">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="serminaName">研究室名:</label>
          <input type="text" class="form-control" name="serminaName">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="teacherName">担任先生:</label>
          <input type="text" class="form-control" name="teacherName">
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">追加</button>
        <a style="margin: 19px;" href="{!! url('admin/sermina') !!}" class="btn btn-danger">キャンセル</a>
      </div>
    </form>
  </div>
</div>
</div>
@endsection
@extends('admaster')

@section('main')


<!-- List View Start -->
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
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
      <h1 class="display-3">申し込み追加</h1>
      <div>
        <form method="post" action="{{route('book.store')}}">
          @csrf
          <div class="col-sm-4">
            <select class="form-control" name="infor_id">
              <option value="">説明会選択</option>
              @foreach ($infor as $infor)
              <option value="{{ $infor->id }}"> {{ $infor->company_name }}</option>
              @endforeach    
            </select>
          </div>
          <div class="col-sm-4">
            <select class="form-control" name="student_id">
              <option value="">学生番号選択</option>
              @foreach ($students as $students)
              <option value="{{ $students->id }}"> {{ $students->student_code }}</option>
              @endforeach    
            </select>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">追加</button>
            <button type="reset" class="btn btn-secondary">キャンセル</button>
          </div>
        </form>
      </div> 
    </section> 

    <section class="panel">
      <header class="panel-heading">
        <h3>申し込みした一覧</h3>
        
      </header>
      <table class="table table-striped table-advance table-hover">
        <tr class="thtop">
         <th><i class="icon_profile"></i> No.</th>
         <th><i class="icon_profile"></i> 企業名</th>
         <th><i class="icon_profile"></i> 説明会場所</th>
         <th><i class="icon_profile"></i> 開催日</th>
         <th><i class="icon_profile"></i> 学生名</th>
         <th><i class="icon_profile"></i> 学生画像</th>
         <th><i class="icon_profile"></i> アクション</th>
       </tr>
       @foreach($infors as $infor)
       <tr>
        <td rowspan="{{count($infor->students) + 1}}">{{$loop->index + 1}}</td>
        <td rowspan="{{count($infor->students) + 1}}">{{$infor->company_name}}</td>
        <td rowspan="{{count($infor->students) + 1}}">{{$infor->location_info}}</td>
        <td rowspan="{{count($infor->students) + 1}}">{{$infor->date}}</td>
      </tr>
      @foreach($infor->students as $student)
      <tr>
        <td>{{$student->name}}</td>
        <td><img src="{{asset($student->picture)}}" style="max-width: 50px; max-height: 50px"></td>
        <td> 
          <form onsubmit="return confirm('本当に削除しますか?')" method="post" action="{{route('destroy')}}">
            @csrf
            <input type="hidden" name="infor_id" value="{{$infor->id}}">
            <input type="hidden" name="student_id" value="{{$student->id}}">
            <button type="submit" class="btn btn-danger">削除</button>
          </form>
        </tr>
        @endforeach
        @endforeach
      </table>
    </section>
  </div>
</div>
<!-- List View End -->
@endsection 
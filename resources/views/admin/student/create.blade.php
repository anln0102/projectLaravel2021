@extends('admaster')

@section('main')
<div class="row">
  <div class="col-sm-8">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    <br />
    @endif
    <section class="panel">
      <header class="panel-heading">
        利用者新規登録
      </header>
      <div class="panel-body">
        <form class="form-horizontal" role="form" method="post" action="{{ route('student.store')}}">
        @csrf
          <div class="form-group">
            <div class="form-row">
              <div class="col-sm-6">
                <label for="name">名前<span class="label label-danger">必須</span></label>
                <input type="text" class="form-control" name="name" required>
                @error('name')
                  <span class="alert-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
              <div class="col-sm-6">
                <label for="student_code">学生番号<span class="label label-danger">必須</span></label>
                  <input type="text" class="form-control" name="student_code" required>
                  @error('student_code')
                    <span class="alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-sm-6">
                <label for="password">パスワード<span class="label label-danger">必須</span></label>
                
                <input id="password" type="password" class="form-control" name="password" required>
                @error('password')
                  <span class="alert-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
              <div class="col-sm-6">
                <label for="password-confirm">パスワード確認<span class="label label-danger">必須</span></label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                  @error('password_confirmation')
                  <span class="alert-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-sm-6">
                <label for="email">メール<span class="label label-danger">必須</span></label>
                <input id="email" type="email" class="form-control" name="email">
                @error('email')
                  <span class="alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-sm-6">
                <label for="seminar_room">研究室:</label>
                <select class="form-control" name="seminar_room">
                  <option>研究室選択</option>
                  @foreach ($sermina as $select)
                  <option value="{{ $select->serminaName }}"> {{ $select->serminaName }}</option>
                  @endforeach    
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-sm-6">
                <label for="grade">年生</label>
                <select class="form-control input-sm m-bot15" name="grade">
                  <option value="">選択</option>
                  <option value="1">1年</option>
                  <option value="2">２年</option>
                  <option value="3">３年</option>
                  <option value="4">４年</option>
                </select> 
              </div>
              <div class="col-sm-6">
                <label for="isAdmin">権限</label>
                <br>
                <input type="radio" name="isAdmin" value="" checked>  一般 
                <input type="radio" name="isAdmin" value=1>管理者
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-offset-5 col-lg-10">
              <button type="submit" class="btn btn-primary">登録</button>
              <a href="{!! url('admin/student') !!}" class="btn btn-danger">キャンセル</a>
              
            </div>
            
          </div>
        </form>
      </div>
    </section>
    
  </div>
</div>
@endsection
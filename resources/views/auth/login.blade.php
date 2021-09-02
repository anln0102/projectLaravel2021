@extends('pagemaster')

@section('main')
<div>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">ホームページ</a></li>
        </ol>
</div>
<div >
    @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-4">

        <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="login-wrap">
            
            <p class="login-img"><i class="icon_lock_alt"></i></p> 
            <div>
            <div class="input-group">
                <span class="input-group-addon glyphicon glyphicon-user"></span>
                <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus placeholder="Eメールまた学生番号" style="text-transform: lowercase">
                @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon glyphicon glyphicon-lock"></span>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="パスワード">
            </div>
            @error('password')
                <span class="alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            <label class="checkbox">
                <input type="checkbox" name="remember"{{ old('remember') ? 'checked' : '' }}> ログインしたままにする
                <!-- <span class="pull-right">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">パスワードを忘れた</a>
                    @endif
                </span> -->
                
            </label>

            <button type="submit" class="btn btn-primary btn-lg btn-block">
                {{ __('ログイン') }}
            </button>
                
            <button class="btn btn-info btn-lg btn-block" type="reset"  onclick="location.href = '{{ route('register') }}';">登録</button>
        </div>
        </form>
    </div>
    
</div>

  
@endsection

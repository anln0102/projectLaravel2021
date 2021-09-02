 @extends('pagemaster')

 @section('main')
 <div>
    <ol class="breadcrumb">
        <li><a href="{{route('home')}}">ホームページ</a></li>
    </ol>
</div>
<div class="row">
   <div class="col-lg-4 col-xlg-3 col-md-5">
    <div class="card">
        <div class="card-block">
            <center class="m-t-30"> <img src="{{asset(Auth::user()->picture)}}" class="img-circle" width="150" />
                <h4 class="card-title m-t-10"><i class="icon_profile"></i>名前：{{Auth::user()->name}}</h4>
                <h6 class="card-subtitle"><i class="icon_contacts"></i>学生番号：{{Auth::user()->student_code}}</h6>
            </center>
        </div>
    </div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-lg-8 col-xlg-9 col-md-7">
    <div class="card">
        <div card-block>
            <h4>説明会申し込み一覧<h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>会社名</th>
                            <th>説明会場所</th>
                            <th>開催日</th>
                            <th>アクション</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($infors as $infor)
                     <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td> {{ $infor->company_name }}</td>
                        <td> {{ $infor->location_info }}</td>
                        <td> {{ $infor->date }}</td>
                        <td>
                            <form onsubmit="return confirm('本当に削除しますか?')" action="{{route('cancel')}}" method="POST">
                                @csrf
                                <input type="hidden" name="infor_id" value="{{$infor->id}}">
                                <input type="hidden" name="student_id" value="{{Auth::user()->id}}">
                                <button type="submit" class="btn btn-danger">削除</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-block">
            @foreach ($errors->all() as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}  
                </div>
            @endif
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                パスワード変更
            </button>
                
                <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">パスワード変更</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-horizontal form-material" action="{{route('profile.passwordchange')}}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">現在のパスワード<span class="label label-danger">必須</span></label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">新パスワード<span class="label label-danger">必須</span></label>
                                <div class="col-md-6">
                                    <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">新パスワード確認<span class="label label-danger">必須</span></label>
                                <div class="col-md-6">
                                    <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                            <button type="submit"" class="btn btn-primary">更新</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
                {{-- end modal --}}
            <form class="form-horizontal form-material" action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="example-email" class="col-md-12">学生番号</label>
                    <div class="col-md-12">
                        <input type="email" placeholder="{{Auth::user()->student_code}}" class="form-control form-control-line" name="student_code"value="{{ old('email', auth()->user()->student_code) }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-email" class="col-md-12">Eメール</label>
                    <div class="col-md-12">
                        <input type="email" placeholder="{{Auth::user()->email}}" class="form-control form-control-line" name="email" id="example-email" value="{{ old('email', auth()->user()->email) }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">名前<span class="label label-danger">必須</span></label>
                    <div class="col-md-12">
                        <input type="text" placeholder="{{Auth::user()->name}}" class="form-control form-control-line" name="name" value="{{ old('name', auth()->user()->name) }}">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="picture" class="col-md-12 col-form-label text-md-right">画像</label>
                    <div class="col-md-12">
                        <input id="picture" type="file" class="form-control" name="picture">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-sm-6">
                            <label for="seminar_room">研究室:</label>
                            <select class="form-control" name="seminar_room">
                                @foreach ($sermina as $select )
                                <option value="{{ $select->serminaName }}" {{($select->serminaName == Auth::user()->seminar_room )? 'selected':''}}> {{ $select->serminaName }}</option>
                                @endforeach    
                            </select>
                        </div>
                    
                        <div class="col-sm-6">
                            <label for="grade">年生:</label>
                            <select class="form-control" name="grade"> 
                                @switch( Auth::user()->grade)
                                    @case(1)
                                        <option value="1" selected>1 年生</option>
                                        <option value="2">2 年生</option>
                                        <option value="3">3 年生</option>
                                        <option value="4">4 年生</option>
                                        @break
                                    @case(2)
                                        <option value="1" >1 年生</option>
                                        <option value="2" elected>2 年生</option>
                                        <option value="3">3 年生</option>
                                        <option value="4">4 年生</option>
                                        @break
                                    @case(3)
                                        <option value="1" >1 年生</option>
                                        <option value="2" >2 年生</option>
                                        <option value="3" selected>3 年生</option>
                                        <option value="4">4 年生</option>
                                        @break
                                    @default
                                        <option value="1" >1 年生</option>
                                        <option value="2">2 年生</option>
                                        <option value="3">3 年生</option>
                                        <option value="4" selected>4 年生</option>
                                        @break
    
                                @endswitch
                            </select>
                        </div>
                    </div>
                </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <button class="btn btn-success">保存</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Column -->
@endsection

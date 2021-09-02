@extends('admaster') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
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
              会員情報更新
            </header>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="post" action="{{ route('student.update', $student->id) }}">
                    @method('PATCH') 
                    @csrf
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-sm-6">
                                
                                <label for="student_code">学生番号</label><span class="label label-danger">必須</span>
                                <input type="text" class="form-control" name="student_code" value= "{{ $student->student_code }}" required>
                            
                            </div>
        
                            <div class="col-sm-6">
                            
                                <label for="name">名前</label><span class="label label-danger">必須</span>
                                <input type="text" class="form-control" name="name" value={{ $student->name }} required>
                            
                            </div>
                        </div>
                    </div>
                       
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-sm-6">
                                <label for="password">パスワード</label><span class="label label-danger">必須</span>
                                <input type="password" class="form-control" name="password" value={{ $student->password }} required>
                            </div>
                            
                            <div class="col-sm-6">
                                <label for="email">Eメール</label><span class="label label-danger">必須</span>
                                <input type="email" class="form-control" name="email" value={{ $student->email }} required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-sm-6">
                                <label for="seminar_room">研究室:</label>
                                <select class="form-control" name="seminar_room">
                                    @foreach ($sermina as $select )
                                    <option value="{{ $select->serminaName }}" {{($select->serminaName == $student->seminar_room )? 'selected':''}}> {{ $select->serminaName }}</option>
                                    @endforeach    
                                </select>
                            </div>
                        
                            <div class="col-sm-6">
                                <label for="grade">年生:</label>
                                <select class="form-control" name="grade"> 
                                    @switch( $student->grade)
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
                        <div class="form-row">
                            <div class="col-sm-6">
                                <label for="isAdmin">権限</label><br>
                                <input type="radio" name="isAdmin" value=0 {{( $student->isAdmin != '1') ? 'checked' : '' }}>&nbsp;一般 &emsp; 
                                <input type="radio" name="isAdmin" value=1 {{( $student->isAdmin == '1') ? 'checked' : '' }}>&nbsp;管理者
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-lg-offset-5 col-lg-10">
                            <button type="submit" class="btn btn-primary">更新</button>
                            <a style="margin: 19px;" href="{!! url('admin/student') !!}" class="btn btn-danger">キャンセル</a>
                        </div>
                    </div>
                </form>

            </div>
        </section>
        
    </div>
</div>
@endsection
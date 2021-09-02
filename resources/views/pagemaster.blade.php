<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>就職支援システム2021</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('Template/Pages/assets/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="{{asset('Template/Pages/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- custom CSS here -->
    <link href="{{asset('Template/Pages/assets/css/style.css')}}" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}"><strong>GUI</strong> 2021</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    @guest
                    <li><a href="{{ route('login') }}">{{ __('ログイン') }}</a></li>
                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">{{ __('登録') }}</a></li>
                    @endif
                    @else
                    <li class="dropdown nav navbar-nav navbar-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="img-circle" src="{{asset(Auth::user()->picture)}}" style="max-width: 50px; max-width:50px">{{ Auth::user()->name }}さん<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profile')}}"><strong> {{ __('会員情報') }}</strong></a></li>
                            <li class="divider"></li>
                            @if(Auth::user()->isAdmin == 1)
                            <li><a href="{{Route('adminIndex')}}"><strong>{{ __('管理ページ') }}</strong>
                            </a></li>
                            @endif
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('ログアウト') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                </ul>
                <!-- search form -->
                <form class="navbar-form navbar-left" action="{{route('postsearch')}}" role="search">
                    @csrf
                    @method('GET')
                    <div class="form-group">
                        <input type="text" placeholder="Enter Keyword Here ..." class="form-control" name="search">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-primary">検索</button>
                </form>
                <!-- end search form -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-9 slide-box">
                    <div class="slider">
                          <div class="slide_viewer">
                            <div class="slide_group">
                              <div class="slide">
                                <div class="img-div">
                                    <img class="img-fluid" src="{{ asset('uploads/images/slide/1.jpg')}}" alt="img01" >
                                </div>
                              </div>
                              <div class="slide">
                                <div class="img-div">
                                    <img class="img-fluid" src="{{ asset('uploads/images/slide/2.png')}}" alt="img02">                           
                                </div>
                              </div>
                              <div class="slide">
                                <div class="img-div">
                                    <img class="img-fluid" src="{{ asset('uploads/images/slide/3.png')}}" alt="img03" >
                                </div>
                              </div>
                              <div class="slide">
                                <div class="img-div">
                                    <img class="img-fluid" src="{{ asset('uploads/images/slide/4.jpg')}}" alt="img04" >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End // .slider -->

                        <div class="slide_buttons">
                        </div>

                        <!-- End // .directional_nav -->
                <br />
            </div>
            <!-- /.col -->
            
            <!-- ranks -->
            <div class="col-md-3 text-center">
                @foreach($ranks as $rank)
                <div class=" col-md-12 col-sm-6 col-xs-6" >
                    <div class="offer-text">
                        人気No{{$loop->index + 1}}
                    </div>
                    <div class="thumbnail product-box">
                        <a href="{{$rank->url}}" target="_blank">
                        <div class="product-images" style="background-image:url({{asset($rank->logo)}});">
                           
                        </div>
                         </a>
                        <div class="caption">
                            <h3>{{$rank->company_name}}</h3>
                            <p>{{$rank->date}}</p>
                            <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inforModal{{(Auth::check()) ? $rank->id :'signup'}}">詳しく</button></p>
                        </div>
                        <div class="modal fade" id="inforModalsignup" tabindex="-1" role="dialog" aria-labelledby="inforModalsignup" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title alert-danger" id="inforModalsignup">ログインが必要です！</h4>
                    </div>
                    <div class="modal-body">
                      ログインページに移動しますか？
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                      <a href="{{route('login')}}"><button　 type="button" class="btn btn-primary">移動します</button></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ----------------- -->
              @if(Auth::check())
              <!-- Modal then logined-->
              <div class="modal fade" id="inforModal{{$rank->id}}" tabindex="-1" role="dialog" aria-labelledby="inforModal{{$rank->id}}Title" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="inforModal{{$rank->id}}Title">{{$rank->company_name}}</h5>
                            </div>
                            <div class="modal-body">
                                <table class="table table-striped text-left">
                                <tbody>
                                    <tr>
                                    <td>会社名</td>
                                    <td>{{ $rank->company_name }}</td>
                                    </tr>
                                    <tr>
                                    <td>説明会場所</td>
                                    <td>{{ $rank->location_info }}</td>
                                    </tr>
                                    <tr>
                                    <td>開催日</td>
                                    <td>{{ $rank->date }}</td>
                                    </tr>
                                    <tr>
                                    <td>企業業種</td>
                                    <td>{{ $rank->recruited_occupation }}</td>
                                    </tr>
                                    <tr>
                                    <td>筆記試験</td>
                                    <td>{{ $rank->written_test }}</td>
                                    </tr>
                                    <tr>
                                    <td>筆記試験内容</td>
                                    <td>{{ $rank->written_test_content }}</td>
                                    </tr>
                                    <tr>
                                    <td>面接</td>
                                    <td>{{ $rank->interview }}</td>
                                    </tr>
                                    <tr>
                                    <td>採用職種</td>
                                    <td>{{ $rank->industry }}</td>
                                    </tr>
                                    <tr>
                                    <td>求める資格</td>
                                    <td>{{ $rank->qualification }}</td>
                                    </tr>
                                    <tr>
                                    <td>歓迎する国籍</td>
                                    <td>{{ $rank->country }}</td>
                                    </tr>
                                    <tr>
                                    <td>年齢制限</td>
                                    <td>{{ $rank->age_limit }}</td>
                                    </tr>
                                    <tr>
                                    <td>対象学年</td>
                                    <td>{{ $rank->grade }}</td>
                                    </tr>
                                    <tr>
                                    <td>既卒者受け入れ</td>
                                    <td>{{ $rank->graduate }}</td>
                                    </tr>
                                    <tr>
                                    <td>アルバイト受け入れ</td>
                                    <td>{{ $rank->part_time_job }}</td>
                                    </tr>
                                    <tr>
                                    <td>インターシップ</td>
                                    <td>{{ $rank->intership }}</td>
                                    </tr>
                                    <tr>
                                    <td>卒業内定者</td>
                                    <td>{{ $rank->condidate }}</td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <div class="text-center">

                                <form method="post" action="{{route('app')}}">
                                @csrf
                                <input type="hidden" name="infor_id" value="{{$rank->id}}">
                                <input type="hidden" name="student_id" value="{{Auth::user()->id}}">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>

                                <button type="submit" class="btn btn-primary">申し込み</button>
                                </form>


                            </div>
                        </div>
                        </div>
                    </div>
                </div>
              </div>
              @endif
              
                    </div>
                </div>
                @endforeach
                
            </div>

            
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="#" class="list-group-item active">申し込み状態
                    </a>
                    <ul class="list-group">
                        @foreach($lists as $list)
                        <li class="list-group-item">{{$list->company_name}}
                        <span class="label label-primary pull-right">{{$list->students_count}}</span>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
                <!-- /.div -->
            <!-- /.col -->
            <div class="col-md-9">
               @yield('main')
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="col-md-12 download-app-box text-center">

       
    </div>

    <!--Footer -->
    <!-- /.col -->
    <div class="col-md-12 end-box ">
        &copy; 2021 | &nbsp; All Rights Reserved | &nbsp; 第一工科大学上野キャンパス| &nbsp;鮑研究室 | &nbsp; NGUYEN VAN AN |
    </div>
    <!-- /.col -->
    <!--Footer end -->
    <!--Core JavaScript file  -->
    <script src="{{ asset('Template/Pages/assets/js/jquery-1.10.2.js')}}"></script>
    <!--bootstrap JavaScript file  -->
    <script src="{{ asset('Template/Pages/assets/js/bootstrap.js')}}"></script>
    <!--Slider JavaScript file  -->
    <script src="{{asset('Template/Pages/assets/js/slide.js')}}"></script>
    
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>就職支援システム2021</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('Template/Gui2019/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('Template/Gui2019/css/bootstrap-theme.css')}}" rel="stylesheet">
  <!-- bootstrap date picker -->
  <link href="{{ asset('Template/Gui2019/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{ asset('Template/Gui2019/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{{ asset('Template/Gui2019/css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('Template/Gui2019/css/style-responsive.css')}}" rel="stylesheet" />
  @yield('style')

</head>

<body>
  <!-- container section start -->
  @if (Auth::check() && Auth::user()->isAdmin ==1 )
  <section id="container" class="">
    @else
    <section id="container" class="sidebar-closed">
      @endif

      <!--header start-->

      <header class="header dark-bg">
        @if (Auth::check() && Auth::user()->isAdmin == 1)
        <div class="toggle-nav">
          <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>
        @endif

        <!--logo start-->
        <a href="{{route('home')}}" class="logo">GUI <span class="lite">2021</a>
          <!--logo end-->

          <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
              <li>
                <form class="navbar-form" action="{{route('postsearch')}}">
                  @csrf
                  @method('GET')
                  <input class="form-control" placeholder="Search" type="text" name="search">
                </form>
              </li>
            </ul>
            <!--  search form end -->
          </div>

          <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">
              <!-- user login dropdown end -->
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
              </li>
              @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('登録') }}</a>
              </li>
              @endif
              @else
              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <span class="profile-ava">
                    <img alt="" src="{{ asset(Auth::user()->picture)}}" style="max-width: 50px; max-height: 50px;">
                  </span>
                  <span class="username">{{ Auth::user()->name }}さん</span>
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                  <div class="log-arrow-up"></div>
                  <li class="eborder-top">
                    <a href="{{ route('profile')}}"><i class="icon_profile"></i> 会員情報</a>
                  </li>
                  @if(Auth::user()->isAdmin == 1)
                  <li>
                    <a href="{{Route('adminIndex')}}"><i class="icon_lock-open"></i>管理ページ</a>
                  </li>
                  @endif
                  <li>
                   <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"><i class="icon_key_alt"></i>
                   {{ __('ログアウト') }}
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </ul>
            </li>
            @endguest
          </ul>
          <!-- notificatoin dropdown end-->
        </div>
      </header>
      <!--header end-->

      <!--sidebar start-->

      @if (Auth::check() && Auth::user()->isAdmin == 1)
      <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">

            <li class="sub-menu ">
              <a href="javascript:;" class="">
                <i class="icon_building_alt"></i>
                <span>説明会情報</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <!--information of action -->
              <ul class="sub">
                <li><a class="active" href="{{route('infor.index')}}">リスト</a></li>
                <li><a class="" href="{{route('infor.create')}}"><span>追加</span></a></li>
              </ul>
            </li>

            <!-- Student of action -->
            <li class="sub-menu ">
              <a href="javascript:;" class="">
                <i class="icon_profile"></i>
                <span>会員</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="{{ route('student.index')}}">リスト</a></li>
                <li><a class="" href="{{ route('student.create')}}"><span>新規登録</span></a></li>

              </ul>
            </li>
            <li class="sub-menu ">
              <a href="javascript:;" class="">
                <i class="icon_desktop"></i>
                <span>研究室</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="{{ route('sermina.index')}}">リスト</a></li>
                <li><a class="" href="{{ route('sermina.create')}}"><span>研究室追加</span></a></li>

              </ul>
            </li>
            <li class="sub-menu ">
              <a href="javascript:;" class="">
                <i class="icon_calendar"></i>
                <span>申し込み</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="{{ route('book.index')}}">リスト</a></li>


              </ul>
            </li>

          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      @endif
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <div class="row">
            <div class="col-lg-12">

              <div class="page-header" style=" background-image: url({{ asset('/uploads/images/header.jpg')}});height: 250px;width: width=device-width;background-repeat: no-repeat;background-size: cover;">
              </div>

              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="{{Route('adminIndex')}}">Home</a></li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        @yield('main')
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->

  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="{{ asset('Template/Gui2019/js/jquery.js')}}"></script>
  <script src="{{ asset('Template/Gui2019/js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{ asset('Template/Gui2019/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{ asset('Template/Gui2019/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="{{ asset('Template/Gui2019/js/scripts.js')}}"></script>
  @yield('scripts')


</body>

</html>

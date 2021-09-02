@extends('pagemaster') 
@section('main')          
    <div>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">ホームページ</a></li>
        </ol>
    </div>
    <!-- /.row -->
    <div class="row">
        @foreach($infors as $item)
        <div class="col-md-4 text-center col-sm-6 col-xs-6">
            <div class="thumbnail product-box">
              <a href="{{$item->url}}" target="_blank">
              <div class="product-images" style="background-image:url({{asset($item->logo)}});">
              </div>
                </a>
                <div class="caption">
                    <h3><a href="{{$item->url}}" target="_blank">{{$item->company_name}}</a></h3>
                    <p>開催日 : <strong>{{$item->date}}</strong>  </p>
                    <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inforModal{{(Auth::check()) ? $item->id :'signup'}}">
                  詳しく
                </button></p>
                </div>
                <!-------------------- -->
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
              <div class="modal fade" id="inforModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="inforModal{{$item->id}}Title" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="inforModal{{$item->id}}Title">{{$item->company_name}}</h5>
                    </div>

                    <div class="modal-body">
                      <div class="row">

                        <div class="bio-row">
                          <p><span>会社名</span>: {{ $item->company_name }} </p>
                        </div>
                        <div class="bio-row">
                          <p><span>説明会場所</span>: {{ $item->location_info }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>開催日</span>: {{ $item->date }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>企業業種 </span>: {{ $item->recruited_occupation }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>筆記試験 </span>: {{ $item->written_test }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>筆記試験内容 </span>:{{ $item->written_test_content }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>面接 </span>: {{ $item->interview }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>採用職種 </span>: {{ $item->industry }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>求める資格 </span>:{{ $item->qualification }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>歓迎する国籍 </span>: {{ $item->country }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>年齢制限 </span>: {{ $item->age_limit }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>対象学年 </span>:{{ $item->grade }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>既卒者受け入れ </span>: {{ $item->graduate }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>アルバイト受け入れ </span>: {{ $item->part_time_job }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>インターシップ </span>: {{ $item->intership }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>卒業内定者 </span>: {{ $item->condidate }}</p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <div class="text-center">

                        <form method="post" action="{{route('app')}}">
                          @csrf
                          <input type="hidden" name="infor_id" value="{{$item->id}}">
                          <input type="hidden" name="student_id" value="{{Auth::user()->id}}">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>

                          <button type="submit" class="btn btn-primary">申し込み</button>
                        </form>


                      </div>

                    </div>
                  </div>
                </div>
              </div>
              @endif
              @csrf
            </div>
        </div>
        @endforeach
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
        <ul class="pagination alg-right-pad">
            {{ $infors->links() }}
        </ul>
    </div>
@endsection

                    
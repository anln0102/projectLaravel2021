@extends('pagemaster') 
@section('main')          
    <div>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">ホームページ</a></li>
        </ol>
    </div>
    <!-- /.row -->
    <div class="row">
    @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div>
        @endif
        @if(session()->get('danger'))
        <div class="alert alert-danger">
          {{ session()->get('danger') }}  
        </div>
        @endif
        @foreach($infors as $item)
        <div class="col-md-4 text-center col-sm-6 col-xs-6">
            <div class="thumbnail product-box">
              <a href="{{$item->url}}" target="_blank">
              <div class="product-images" style="background-image: url({{asset($item->logo)}});">
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
                      <table class="table table-striped text-left">
                      <tbody>
                        <tr>
                          <td>会社名</td>
                          <td>{{ $item->company_name }}</td>
                        </tr>
                        <tr>
                          <td>説明会場所</td>
                          <td>{{ $item->location_info }}</td>
                        </tr>
                        <tr>
                          <td>開催日</td>
                          <td>{{ $item->date }}</td>
                        </tr>
                        <tr>
                          <td>企業業種</td>
                          <td>{{ $item->recruited_occupation }}</td>
                        </tr>
                        <tr>
                          <td>筆記試験</td>
                          <td>{{ $item->written_test }}</td>
                        </tr>
                        <tr>
                          <td>筆記試験内容</td>
                          <td>{{ $item->written_test_content }}</td>
                        </tr>
                        <tr>
                          <td>面接</td>
                          <td>{{ $item->interview }}</td>
                        </tr>
                        <tr>
                          <td>採用職種</td>
                          <td>{{ $item->industry }}</td>
                        </tr>
                        <tr>
                          <td>求める資格</td>
                          <td>{{ $item->qualification }}</td>
                        </tr>
                        <tr>
                          <td>歓迎する国籍</td>
                          <td>{{ $item->country }}</td>
                        </tr>
                        <tr>
                          <td>年齢制限</td>
                          <td>{{ $item->age_limit }}</td>
                        </tr>
                        <tr>
                          <td>対象学年</td>
                          <td>{{ $item->grade }}</td>
                        </tr>
                        <tr>
                          <td>既卒者受け入れ</td>
                          <td>{{ $item->graduate }}</td>
                        </tr>
                        <tr>
                          <td>アルバイト受け入れ</td>
                          <td>{{ $item->part_time_job }}</td>
                        </tr>
                        <tr>
                          <td>インターシップ</td>
                          <td>{{ $item->intership }}</td>
                        </tr>
                        <tr>
                          <td>卒業内定者</td>
                          <td>{{ $item->condidate }}</td>
                        </tr>
                      </tbody>
                      </table>
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
            </div>
        </div>
        @endforeach
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
        <ul class="pagination alg-center-pad">
            {{ $infors->links() }}
        </ul>
    </div>
@endsection

                    
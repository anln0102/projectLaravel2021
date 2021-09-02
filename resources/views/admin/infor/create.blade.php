@extends('admaster')

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
@endsection

@section('main')
<div class="row">
  
 <div class="col-sm-8 offset-sm-2">
  <h1 class="display-3">会社の説明会追加</h1>
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
    <form method="POST" action="{{ route('infor.store')}}" enctype="multipart/form-data">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="company_name">会社名<span class="label label-danger">必須</span></label>
          <input type="text" class="form-control" name="company_name">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="locationInfo">説明会場所<span class="label label-danger">必須</span></label>
          <input type="text" class="form-control" name="locationInfo">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="url">会社ホームページ:</label>
          <input type="text" class="form-control" name="url">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="date">開催日<span class="label label-danger">必須</span></label>
          <input type="text" class="form-control" id="date" name="date">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="recruited_occupation">企業業種:</label>
          <input type="text" class="form-control" name="recruited_occupation">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="written_test">筆記試験:</label>
          <select class="form-control input-sm m-bot15" name="written_test">
            <option value="">選ぶ</option>
            <option value="有">有り</option>
            <option value="無し">無し</option>
            <option value="不明">不明</option>
          </select> 
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="interview">面接:</label>
          <input type="text" class="form-control" name="interview">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="industry">採用職種:</label>
          <input type="text" class="form-control" name="industry">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="qualification">求める資格:</label>
          <input type="text" class="form-control" name="qualification">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="country">歓迎する国籍:</label>
          <input type="text" class="form-control" name="country">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="age_limit">年齢制限:</label>
          <input type="text" class="form-control" name="age_limit">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="written_test_content">筆記試験内容:</label>
          <select class="form-control input-sm m-bot15" name="written_test_content">
            <option value="">選ぶ</option>
            <option value="有">有り</option>
            <option value="無し">無し</option>
            <option value="不明">不明</option>
          </select> 
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="grade">対象学年:</label>
          <select class="form-control input-sm m-bot15" name="grade">
            <option value="">選ぶ</option>
            <option value=4>4年生</option>
            <option value=3>3年生も可</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="graduate">既卒者受け入れ:</label>
          <select class="form-control input-sm m-bot15" name="graduate">
            <option value="">選ぶ</option>
            <option value="有">有り</option>
            <option value="無し">無し</option>
            <option value="不明">不明</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="part_time_job">アルバイト受け入れ:</label>
          <select class="form-control input-sm m-bot15" name="part_time_job">
            <option value="">選ぶ</option>
            <option value="有">有り</option>
            <option value="無し">無し</option>
            <option value="不明">不明</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="intership">インターシップ:</label>
          <select class="form-control input-sm m-bot15" name="intership">
            <option value="">選ぶ</option>
            <option value="有">有り</option>
            <option value="無し">無し</option>
            <option value="不明">不明</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="condidate">卒業内定者:</label>
          <select class="form-control input-sm m-bot15" name="condidate">
            <option value="">選ぶ</option>
            <option value="有">有り</option>
            <option value="無し">無し</option>
            <option value="不明">不明</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
            <label for="logo" class="form-label text-md-right">ロゴ</label>
            <input id="logo" type="file" class="form-control" name="logo">
        </div>
      </div>

      <div class="form-group row mb-0">
        <div class="text-center">
            <div class="col-md-8 offset-md-6">
                <button type="submit" class="btn btn-primary">
                    {{ __('追加') }}
                </button>
                <a style="margin: 19px;" href="{!! url('admin/infor') !!}" class="btn btn-danger">キャンセル</a>
            </div>
        </div>
    </div>
    </form>
  </div>
</div>
</div>
@endsection

@section('scripts')
  <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
  <script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
  <script>
    flatpickr(document.getElementById('date'), {
      locale: 'ja',
      dateFormat: "Y-m-d",
      minDate: new Date()
    });
  </script>
  @endsection
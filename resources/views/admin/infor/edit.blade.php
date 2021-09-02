@extends('admaster')

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
@endsection

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">企業の情報更新</h1>

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
        <form method="post" action="{{ route('infor.update', $infor->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="company_name">会社名<span class="label label-danger">必須</span></label>
                    <input type="text" class="form-control" name="company_name" value={{ $infor->company_name }} >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="url">ホームページ:</label>
                    <input type="text" class="form-control" name="url" value={{ $infor->url }} >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="locationInfo">説明会場所<span class="label label-danger">必須</span></label>
                    <input type="text" class="form-control" name="locationInfo" value={{ $infor->location_info }} >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="date">開催日<span class="label label-danger">必須</span></label>
                    <input type="text" class="form-control" id="date" name="date" value={{ $infor->date }} >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="industry">企業業種:</label>
                    <input type="text" class="form-control" name="industry" value={{ $infor->industry }} >
                </div>
            </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="written_test">筆記試験:</label>
                    <select class="form-control input-sm m-bot15" name="written_test">
                        <option value="{{ $infor->written_test}}" {{( $infor->written_test == '') ? 'selected' : '' }}>選ぶ</option>
                        <option value="{{ $infor->written_test}}" {{( $infor->written_test == '有り') ? 'selected' : '' }}>有り</option>
                        <option value="{{ $infor->written_test}}" {{( $infor->written_test == '無し') ? 'selected' : '' }}>無し</option>
                        <option value="{{ $infor->written_test}}" {{( $infor->written_test == '不明') ? 'selected' : '' }}>不明</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="written_test_content">筆記試験内容:</label>
                    <select class="form-control input-sm m-bot15" name="written_test_content">
                        <option value="{{ $infor->written_test_content}}" {{( $infor->written_test_content == '') ? 'selected' : '' }}>選ぶ</option>
                        <option value="{{ $infor->written_test_content}}" {{( $infor->written_test_content == '有り') ? 'selected' : '' }}>有り</option>
                        <option value="{{ $infor->written_test_content}}" {{( $infor->written_test_content == '無し') ? 'selected' : '' }}>無し</option>
                        <option value="{{ $infor->written_test_content}}" {{( $infor->written_test_content == '不明') ? 'selected' : '' }}>不明</option>
                        <option value="{{ $infor->written_test_content}}" {{( $infor->written_test_content == 'SPI検査') ? 'selected' : '' }}>SPI検査</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="interview">面接:</label>
                    <input type="text" class="form-control" name="interview" value={{ $infor->interview }} >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="recruited_occupation">採用職種:</label>
                    <input type="text" class="form-control" name="recruited_occupation" value={{ $infor->recruited_occupation }} >
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="qualification">求める資格:</label>
                    <input type="text" class="form-control" name="qualification" value={{ $infor->qualification }} >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="country">歓迎する国籍:</label>
                    <input type="text" class="form-control" name="country" value={{ $infor->country }} >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="age_limit">年齢制限:</label>
                    <input type="text" class="form-control" name="age_limit" value={{ $infor->age_limit }} >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="grade">対象学年:</label>
                    <select class="form-control input-sm m-bot15" name="grade">
                        <option value="{{ $infor->grade}}" {{( $infor->grade == '') ? 'selected' : '' }}>選ぶ</option>
                        <option value="{{ $infor->grade}}" {{( $infor->grade == '4') ? 'selected' : '' }}>4年生</option>
                        <option value="{{ $infor->grade}}" {{( $infor->grade == '3') ? 'selected' : '' }}>３年生も可</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="graduate">既卒者受け入れ:</label>
                    <select class="form-control input-sm m-bot15" name="graduate">
                        <option value="{{ $infor->graduate}}" {{( $infor->graduate == '') ? 'selected' : '' }}>選ぶ</option>
                        <option value="{{ $infor->graduate}}" {{( $infor->graduate == '有り') ? 'selected' : '' }}>有り</option>
                        <option value="{{ $infor->graduate}}" {{( $infor->graduate == '無し') ? 'selected' : '' }}>無し</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="part_time_job">アルバイト受け入れ:</label>
                    <select class="form-control input-sm m-bot15" name="part_time_job">
                        <option value="{{ $infor->part_time_job}}" {{( $infor->part_time_job == '') ? 'selected' : '' }}>選ぶ</option>
                        <option value="{{ $infor->part_time_job}}" {{( $infor->part_time_job == '有り') ? 'selected' : '' }}>有り</option>
                        <option value="{{ $infor->part_time_job}}" {{( $infor->part_time_job == '無し') ? 'selected' : '' }}>無し</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="intership">インターシップ:</label>
                    <select class="form-control input-sm m-bot15" name="intership">
                        <option value="{{ $infor->intership}}" {{( $infor->intership == '') ? 'selected' : '' }}>選ぶ</option>
                        <option value="{{ $infor->intership}}" {{( $infor->intership == '有り') ? 'selected' : '' }}>有り</option>
                        <option value="{{ $infor->intership}}" {{( $infor->intership == '無し') ? 'selected' : '' }}>無し</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="condidate">卒業内定者:</label>
                    <select class="form-control input-sm m-bot15" name="condidate">
                        <option value="{{ $infor->condidate}}" {{( $infor->condidate == '') ? 'selected' : '' }}>選ぶ</option>
                        <option value="{{ $infor->condidate}}" {{( $infor->condidate == '有り') ? 'selected' : '' }}>有り</option>
                        <option value="{{ $infor->condidate}}" {{( $infor->condidate == '無し') ? 'selected' : '' }}>無し</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <label for="logo" class="form-label text-md-right">ロゴ</label>
                    <input id="logo" type="file" class="form-control" name="logo">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">更新</button>
                <a style="margin: 19px;" href="{!! url('admin/infor') !!}" class="btn btn-danger">キャンセル</a>
            </div>



        </form>
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

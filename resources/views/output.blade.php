<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    @yield('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{asset('assess/css/style.js')}}"></script>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('/assess/css/output.css')}}">

    <title>会員一覧</title>
</head>
<body>
  @csrf
  {{ csrf_field() }} 
    <div>
        <div class="header-bar">
            <p>会員一覧</p>
        </div>
        <div class="mx-3 my-3 d-flex flex-row bd-highlight out-box">
              <div class="pagination d-flex justify-content-center ">
                @if ($users->currentPage() > 1)
                <button type="button" class="btn btn-outline-secondary outbtn py-1 mx-2">
                  <a href="{{ $users->appends(request()->except('page'))->previousPageUrl() }}">&laquo; Prev</a>
                </button>
                @else
                <button type="button" class="btn btn-outline-secondary outbtn py-1 mx-2">
                <a href="{{ $users->appends(request()->except('page'))->previousPageUrl() }}">&laquo; Prev</a>
                </button>
                @endif
                @if ($users->currentPage() < $users->lastPage())
                  <button type="button" class="btn btn-outline-secondary outbtn py-1 mx-2">
                      <a href="{{ $users->appends(request()->except('page'))->nextPageUrl() }}">Next &raquo;</a>
                  </button>
                @endif
              </div>  
              <form action="{{ $users->appends(request()->except('page'))->url(1) }}" class="out-from" method="GET">
                  <input type="number" class=" in mx-2" name="page" min="1" max="{{ $users->lastPage() }}" value="{{ $users->currentPage() }}">
                  <input type="hidden" name="pmax" value="{{$size}}" class="in dis ms-1" >
                  <input type="hidden" value="{{$user_id1}}" name="user_id1" aria-describedby="basic-addon3">
                  <input type="hidden" value="{{$user_id2}}" name="user_id2" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control" value="{{$name}}" id="name" name="name" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control" value="{{$name_furigana}}" id="name_furigana" name="name_furigana" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control" value="{{$birth}}" id="birth" name="birth" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control" value="{{$phone_number}}" id="phone_number" name="phone_number" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control" value="{{$mail}}" id="mail" name="mail" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control" id="ad_code" value="{{$ad_code}}" name="ad_code" aria-describedby="basic-addon3">
                  <input type="hidden" id="year1-1" name="year1-1" value="{{$year1_1}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month1-1" name="month1-1" value="{{$month1_1}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date1-1" name="date1-1" value="{{$date1_1}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year1-2" name="year1-2" value="{{$year1_2}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month1-2" name="month1-2" value="{{$month1_2}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date1-2" name="date1-2" value="{{$date1_2}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year2-1" name="year2-1" value="{{$year2_1}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month2-1" name="month2-1" value="{{$month2_1}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date2-1" name="date2-1" value="{{$date2_1}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year2-2" name="year2-2" value="{{$year2_2}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month2-2" name="month2-2" value="{{$month2_2}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date2-2" name="date2-2" value="{{$date2_2}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year3-1" name="year3-1" value="{{$year3_1}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month3-1" name="month3-1" value="{{$month3_1}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date3-1" name="date3-1" value="{{$date3_1}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year3-2" name="year3-2" value="{{$year3_2}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month3-2" name="month3-2" value="{{$month3_2}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date3-2" name="date3-2" value="{{$date3_2}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year4-1" name="year4-1" value="{{$year4_1}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month4-1" name="month4-1" value="{{$month4_1}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date4-1" name="date4-1" value="{{$date4_1}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year4-2" name="year4-2" value="{{$year4_2}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month4-2" name="month4-2" value="{{$month4_2}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date4-2" name="date4-2" value="{{$date4_2}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year6-1" name="year6-1" value="{{$year6_1}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month6-1" name="month6-1" value="{{$month6_1}}" class="col-sm-3 input-year">
                  <input type="hidden" id="date6-1" name="date6-1" value="{{$date6_1}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year6-2" name="year6-2" value="{{$year6_2}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month6-2" name="month6-2" value="{{$month6_2}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date6-2" name="date6-2" value="{{$date6_2}}" class="col-sm-3 input-date" >
                  <input type="hidden" class="form-control p-1 bd-highlight" name="num_login1" value="{{$num_login1}}" id="num_login1" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" name="num_login2" value="{{$num_login2}}" id="num_login2" aria-describedby="basic-addon3">
                  <input type="hidden" id="year7-1" name="year7-1" value="{{$year7_1}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month7-1" name="month7-1" value="{{$month7_1}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date7-1" name="date7-1" value="{{$date7_1}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year7-2" name="year7-2" value="{{$year7_2}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month7-2" name="month7-2" value="{{$month7_2}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date7-2" name="date7-2" value="{{$date7_2}}" class="col-sm-3 input-date" >
                  {{-- <input type="date" class="form-control p-1 bd-highlight" id="remittance-date" name="remittance-date" aria-describedby="basic-addon3"> --}}
                  <input type="hidden" class="form-control p-1 bd-highlight" id="transfer_amount" value="{{$transfer_amount}}" name="transfer_amount" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="settlement_amount" value="{{$settlement_amount}}" name="settlement_amount" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="line" name="line" value="{{$line}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="address" name="address" value="{{$address}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="homephone_number" value="{{$homephone_number}}" name="homephone_number" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="companies" name="companies" value="{{$companies}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="work_phonenumber" name="work_phonenumber" value="{{$work_phonenumber}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="companies_address" name="companies_address" value="{{$companies_address}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="emergency_contact_name" name="emergency_contact_name" value="{{$emergency_contact_name}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="relationship_emergency" name="relationship_emergency" value="{{$relationship_emergency}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="relationship_emergency_phonenumber" name="relationship_emergency_phonenumber" value="{{$relationship_emergency_phonenumber}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="name_factoring_recent" name="name_factoring_recent" value="{{$name_factoring_recent}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="name_factoring_past" name="name_factoring_past" value="{{$name_factoring_past}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="name_pay_later" name="name_pay_later" value="{{$name_pay_later}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="name_buyer" name="name_buyer" value="{{$name_buyer}}" aria-describedby="basic-addon3">
                <button type="submit" class="btn btn-outline-secondary go">Go</button>
              </form>  
              <div class="out-from ">
                <label for="" class="ms-2" >表示件数</label>
                <form action="{{ route('users.search') }}" class="textla" method="post">
                  @csrf
                  {{ csrf_field() }} 
                  <input type="number" name="pmax" value="{{$size}}" class="in dis ms-1" >
                  <input type="hidden" value="{{$user_id1}}" name="user_id1" aria-describedby="basic-addon3">
                  <input type="hidden" value="{{$user_id2}}" name="user_id2" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control" value="{{$name}}" id="name" name="name" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control" value="{{$name_furigana}}" id="name_furigana" name="name_furigana" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control" value="{{$birth}}" id="birth" name="birth" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control" value="{{$phone_number}}" id="phone_number" name="phone_number" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control" value="{{$mail}}" id="mail" name="mail" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control" id="ad_code" value="{{$ad_code}}" name="ad_code" aria-describedby="basic-addon3">
                  <input type="hidden" id="year1-1" name="year1-1" value="{{$year1_1}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month1-1" name="month1-1" value="{{$month1_1}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date1-1" name="date1-1" value="{{$date1_1}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year1-2" name="year1-2" value="{{$year1_2}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month1-2" name="month1-2" value="{{$month1_2}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date1-2" name="date1-2" value="{{$date1_2}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year2-1" name="year2-1" value="{{$year2_1}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month2-1" name="month2-1" value="{{$month2_1}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date2-1" name="date2-1" value="{{$date2_1}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year2-2" name="year2-2" value="{{$year2_2}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month2-2" name="month2-2" value="{{$month2_2}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date2-2" name="date2-2" value="{{$date2_2}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year3-1" name="year3-1" value="{{$year3_1}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month3-1" name="month3-1" value="{{$month3_1}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date3-1" name="date3-1" value="{{$date3_1}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year3-2" name="year3-2" value="{{$year3_2}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month3-2" name="month3-2" value="{{$month3_2}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date3-2" name="date3-2" value="{{$date3_2}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year4-1" name="year4-1" value="{{$year4_1}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month4-1" name="month4-1" value="{{$month4_1}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date4-1" name="date4-1" value="{{$date4_1}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year4-2" name="year4-2" value="{{$year4_2}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month4-2" name="month4-2" value="{{$month4_2}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date4-2" name="date4-2" value="{{$date4_2}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year6-1" name="year6-1" value="{{$year6_1}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month6-1" name="month6-1" value="{{$month6_1}}" class="col-sm-3 input-year">
                  <input type="hidden" id="date6-1" name="date6-1" value="{{$date6_1}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year6-2" name="year6-2" value="{{$year6_2}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month6-2" name="month6-2" value="{{$month6_2}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date6-2" name="date6-2" value="{{$date6_2}}" class="col-sm-3 input-date" >
                  <input type="hidden" class="form-control p-1 bd-highlight" name="num_login1" value="{{$num_login1}}" id="num_login1" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" name="num_login2" value="{{$num_login2}}" id="num_login2" aria-describedby="basic-addon3">
                  <input type="hidden" id="year7-1" name="year7-1" value="{{$year7_1}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month7-1" name="month7-1" value="{{$month7_1}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date7-1" name="date7-1" value="{{$date7_1}}" class="col-sm-3 input-date" >
                  <input type="hidden" id="year7-2" name="year7-2" value="{{$year7_2}}" class="col-sm-3 input-year">
                  <input type="hidden" id="month7-2" name="month7-2" value="{{$month7_2}}" class="col-sm-3 input-month">
                  <input type="hidden" id="date7-2" name="date7-2" value="{{$date7_2}}" class="col-sm-3 input-date" >
                  {{-- <input type="date" class="form-control p-1 bd-highlight" id="remittance-date" name="remittance-date" aria-describedby="basic-addon3"> --}}
                  <input type="hidden" class="form-control p-1 bd-highlight" id="transfer_amount" value="{{$transfer_amount}}" name="transfer_amount" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="settlement_amount" value="{{$settlement_amount}}" name="settlement_amount" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="line" name="line" value="{{$line}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="address" name="address" value="{{$address}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="homephone_number" value="{{$homephone_number}}" name="homephone_number" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="companies" name="companies" value="{{$companies}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="work_phonenumber" name="work_phonenumber" value="{{$work_phonenumber}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="companies_address" name="companies_address" value="{{$companies_address}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="emergency_contact_name" name="emergency_contact_name" value="{{$emergency_contact_name}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="relationship_emergency" name="relationship_emergency" value="{{$relationship_emergency}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="relationship_emergency_phonenumber" name="relationship_emergency_phonenumber" value="{{$relationship_emergency_phonenumber}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="name_factoring_recent" name="name_factoring_recent" value="{{$name_factoring_recent}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="name_factoring_past" name="name_factoring_past" value="{{$name_factoring_past}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="name_pay_later" name="name_pay_later" value="{{$name_pay_later}}" aria-describedby="basic-addon3">
                  <input type="hidden" class="form-control p-1 bd-highlight" id="name_buyer" name="name_buyer" value="{{$name_buyer}}" aria-describedby="basic-addon3">
                </form>
                <label for="" class="ms-2">オプション</label>
                <div class="select out-from">
                  <select name="" id="">
                    <option value="1">この結果の全員へメールを送信</option>
                    <option value="108">この結果の全員へメッセージを送信</option>
                    <option value="2">この結果をCSV出力する</option>
                    <option value="10">この結果の会員のランクを設定する</option>
                    <option value="11">この結果の会員の会員ステータスを変更する</option>
                    <option value="105">この結果の会員の取引ステータスを変更する</option>
                    <option value="106">この結果の会員の前日確認を変更する</option>
                    <option value="107">この結果の会員の必要書類状態を変更する</option>
                    <option value="99">この結果の会員を削除する</option>
                  </select>
                  <button type="button" class="btn btn-outline-secondary outbtn py-1 mx-2">
                    実行
                  </button>
                </div>
                <div class="form-check ms-3">
                  <input type="checkbox" class="form-check-input" id="selectAll"  name="selectAll" value="">
                  <label class="form-check-label" for="check2">全てチェック</label>
                </div>

              </div>
        </div>
        <div class="mx-4">
          <div class="pagination">
              @if ($users->lastPage() > 1)
                  <div>
                    {{ $users->total() }} 件中 {{ ($users->currentPage() - 1) * $users->perPage() + 1 }}  
                    <?php
                    $usersPerPage = count($users);
                    echo "件目から" . $usersPerPage;
                    ?> 件を表示中.
                    (Page {{ $users->currentPage() }}/{{ $users->lastPage() }})
                  </div>
              @endif
          </div>
        </div>  
        <div class="table-width mx-3">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">対象</th>
                    <th scope="col">会員No</th>
                    <th scope="col">取引ステータス</th>
                    <th scope="col">メモ</th>
                    <th scope="col">必要書類</th>
                    <th scope="col">契約時・当日の日付</th>
                    <th scope="col">振込み金額</th>
                    <th scope="col">決済金額</th>
                    <th scope="col">買取金額</th>
                    <th scope="col">決済日</th>
                    <th scope="col">前日確認</th>
                    <th scope="col">広告コード</th>
                    <th scope="col">買取希望商品</th>
                    <th scope="col">買取方法</th>
                    <th scope="col">お名前</th>
                    <th scope="col">フリガナ</th>
                    <th scope="col">ライン</th>
                    <th scope="col">住所</th>
                    <th scope="col">ログイン日時</th>
                    <th scope="col">ログイン回数</th>
                    <th scope="col">登録日時</th>
                    <th scope="col">修正日時</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr class="@if ( $user->transaction_status == "1")
                          white
                        @elseif ( $user->transaction_status == "17")
                          orange
                        @elseif ( $user->transaction_status == '7' )
                          pink
                        @elseif ( $user->transaction_status == '19')
                          gray
                        @elseif ( $user->transaction_status == '3' )
                          yellow
                        @elseif ( $user->transaction_status == '11')
                          sky_blue
                        @elseif ( $user->transaction_status == '16' )
                          red 
                        @elseif ( $user->transaction_status == '4')
                          light_yellow
                        @elseif ( $user->transaction_status == '8' )
                          blue
                        @elseif ( $user->transaction_status == '2')
                          light_gray
                        @elseif ( $user->transaction_status == '9' )
                          gold
                        @elseif ( $user->transaction_status == '6')
                          light_pink
                        @elseif ( $user->transaction_status == '18' )
                          brown
                        @endif 
                                ">   
                      <td>
                        <div class="form-check">
                          <input class="checkbox" type="checkbox" class="form-check-input" >
                        </div>
                      </td>
                      <td><a href="{{ route('users.detail', ['id' => $user->user_id])}}" class="link">{{ $user->user_id }}</a></td>
                      <td>{{ $user->transaction_status }}</td>
                      <td>{{ $user->note }}</td>
                      <td>{{ $user->required_documents }}</td>
                      <td>{{ $user->contract_date }}</td>
                      <td>{{ $user->transfer_amount }}</td>
                      <td>{{ $user->settlement_amount }}</td>
                      <td>{{ $user->purchase_amount }}</td>
                      <td>{{ $user->settlement_date }}</td>
                      <td>{{ $user->confirmation_previousday }}</td>
                      <td>{{ $user->ad_code }}</td>
                      <td>{{ $user->items_purchase }}</td>
                      <td>{{ $user->method_purchase }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->name_furigana  }}</td>
                      <td>{{ $user->line }}</td>
                      <td>{{ $user->address }}</td>
                      <td>{{ $user->last_login_at }}</td>
                      <td>{{ $user->num_login }}</td>
                      <td>{{ $user->signup_at }}</td>
                      <td>{{ $user->modified_at }}</td>   
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>  
      </div>
      <script>
        const selectAllCheckbox = document.getElementById('selectAll');
        const checkboxes = document.querySelectorAll('.checkbox');

          selectAllCheckbox.addEventListener('change', function() {
            if (this.checked) {
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = true;
                });
            } else {
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = false;
                });
              }
          });
      </script>
</body>
</html>
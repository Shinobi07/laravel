@extends('layout.app_style')
@section('title','Search')

@section('header-text')
<h5 class="header-text">ファンネル Admin</h5>
@endsection

@section('nav')
    
@endsection

@section('main')
        <form action="{{ route('users.search') }}" method="post">
            @csrf
            <input type="hidden" name="pmax" size="100">
            <div class="col-sm-10 main">
                <h4 class="px-4">■検索条件1</h4>
                <div class="row ms-2 main-field">
                    <div class="col-sm-4 border border-secondary">
                        <div class="row mx-2 my-3">
                            <div class="col-sm-7">
                                <label for="basic-url" class="form-label">会員番号</label>
                                <div class=" d-flex flex-row bd-highlight align-items-center">
                                    <input type="number" class="form-control p-1 bd-highlight" id="user_id1" name="user_id1" aria-describedby="basic-addon3">
                                    <label for="id" name="id" class="form-label px-2">~</label>
                                    <input type="number" class="form-control p-1 bd-highlight" id="user_id2" name="user_id2" aria-describedby="basic-addon3">
                                </div>
                            </div>
                        </div>
                        <div class="row mx-2 my-3">
                            <div class="col-sm-3">
                                <label for="title" class="form-label">性別</label>
                                <div class="select">
                                    <select name="gender" id="gender">
                                    <option value="">全て</option>
                                    <option value="1">男性</option>
                                    <option value="2">女性</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-2 my-3">
                            <div>
                                <label for="title" class="form-label">お名前</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="basic-addon3">
                            </div>
                        </div>
                        <div class="row mx-2 my-3">
                            <div>
                                <label for="title" class="form-label">フリガナ</label>
                                <input type="text" class="form-control" id="name_furigana" name="name_furigana" aria-describedby="basic-addon3">
                            </div>
                        </div>
                        <div class="row mx-2 my-3">
                            <div>
                                <label for="title" class="form-label">生年月日</label>
                                <input type="date" class="form-control" id="birth" name="birth" aria-describedby="basic-addon3">
                            </div>
                        </div>
                        <div class="row mx-2 my-3">
                            <div>
                                <label for="title" class="form-label">電話番号</label>
                                <input type="tel" class="form-control" id="phone_number" name="phone_number" aria-describedby="basic-addon3">
                            </div>
                        </div>
                        <div class="row mx-2 my-3">
                            <div>
                                <label for="title" class="form-label">メールアドレス</label>
                                <input type="text" class="form-control" id="mail" name="mail" aria-describedby="basic-addon3">
                            </div>
                        </div>
                        <div class="row mx-2 my-3">
                            <div class="col-sm-4">
                                <label for="title" class="form-label">会員ステータス</label>
                                <div class="select">
                                    <select name="user_status" id="user_status">
                                        <option value="" ></option>
                                        <option value="1">指定無し</option>
                                        <option value="2">ﾌﾟﾛﾌｨｰﾙ未設定</option>
                                        <option value="3">有効会員</option>
                                        <option value="4">退会</option>
                                        <option value="5">強制退会</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-2 my-3">
                            <div class="col-sm-4">
                                <label for="title" class="form-label">取引ステータス</label>
                                <div class="select">
                                    <select name="transaction_status" id="transaction_status">
                                        <option value="">すべて</option>
                                        <option value="1">新規</option>
                                        <option value="2">新規出ず</option>
                                        <option value="3">審査中</option>
                                        <option value="4">審査中未進行</option>
                                        <option value="5">結果</option>
                                        <option value="6">結果出ず</option>
                                        <option value="7">契約書</option>
                                        <option value="8">商品購入</option>
                                        <option value="9">口コミ中</option>
                                        <option value="10">入金待ち</option>
                                        <option value="11">現客</option>
                                        <option value="12">再契約</option>
                                        <option value="13">再契約出ず</option>
                                        <option value="14">決済</option>
                                        <option value="15">決済(再禁)</option>
                                        <option value="16">当社断り</option>
                                        <option value="17">本人断り</option>
                                        <option value="18">コゲ</option>
                                        <option value="19">弁</option>
                                        <option value="20">分割中</option>
                                        <option value="21">遅れ決済</option>
                                        <option value="22">商品入力中</option>
                                        <option value="23">写真追加中</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-2 my-3">
                            <div>
                                <label for="title" class="form-label">広告コード</label>
                                <input type="text" class="form-control" id="ad_code" name="ad_code" aria-describedby="basic-addon3">
                            </div>
                            <div class="form-check ms-3">
                                <input type="checkbox" class="form-check-input" id="" name="" value="">
                                <label class="form-check-label" for="check2">広告コード無し</label>
                            </div>
                        </div>
                        <div>
                            <label for="title" class="form-label px-3 my-0">契約時・当日の日付</label>
                            <div class="mx-3 d-flex flex-row bd-highlight">
                                <input type="number" id="year1-1" name="year1-1" value="" class="col-sm-3 input-year">
                                <label for="title" class="form-label px-1">年</label>
                                <input type="number" id="month1-1" name="month1-1" value="" class="col-sm-3 input-month">
                                <label for="title" class="form-label px-1">月</label>
                                <input type="number" id="date1-1" name="date1-1" value="" class="col-sm-3 input-date" >
                                <label for="title" class="form-label px-1">日</label>
                                <label for="title" class="form-label">~</label>
                            </div>
                            <div class="mx-3 mb-3 mt-1 d-flex flex-row bd-highlight">
                                <input type="number" id="year1-2" name="year1-2" value="" class="col-sm-3 input-year">
                                <label for="title" class="form-label px-1">年</label>
                                <input type="number" id="month1-2" name="month1-2" value="" class="col-sm-3 input-month">
                                <label for="title" class="form-label px-1">月</label>
                                <input type="number" id="date1-2" name="date1-2" value="" class="col-sm-3 input-date" >
                                <label for="title" class="form-label px-1">日</label>
                            </div>
                        </div>
                        <div>
                            <label for="title" class="form-label px-3 my-0">決済日</label>
                            <div class="mx-3 d-flex flex-row bd-highlight">
                                <input type="number" id="year2-1" name="year2-1" value="" class="col-sm-3 input-year">
                                <label for="title" class="form-label px-1">年</label>
                                <input type="number" id="month2-1" name="month2-1" value="" class="col-sm-3 input-month">
                                <label for="title" class="form-label px-1">月</label>
                                <input type="number" id="date2-1" name="date2-1" value="" class="col-sm-3 input-date" >
                                <label for="title" class="form-label px-1">日</label>
                                <label for="title" class="form-label">~</label>
                            </div>
                            <div class="mx-3 mb-3 mt-1 d-flex flex-row bd-highlight">
                                <input type="number" id="year2-2" name="year2-2" value="" class="col-sm-3 input-year">
                                <label for="title" class="form-label px-1">年</label>
                                <input type="number" id="month2-2" name="month2-2" value="" class="col-sm-3 input-month">
                                <label for="title" class="form-label px-1">月</label>
                                <input type="number" id="date2-2" name="date2-2" value="" class="col-sm-3 input-date" >
                                <label for="title" class="form-label px-1">日</label>
                            </div>
                        </div>
                        </div>

                    <div class="col-sm-4 border border-secondary ">
                        <div class="mt-3">
                            <label for="title" class="form-label px-3 my-0">登錄日</label>
                            <div class="mx-3 d-flex flex-row bd-highlight">
                                <input type="number" id="year3-1" name="year3-1" value="" class="col-sm-3 input-year">
                                <label for="title" class="form-label px-1">年</label>
                                <input type="number" id="month3-1" name="month3-1" value="" class="col-sm-3 input-month">
                                <label for="title" class="form-label px-1">月</label>
                                <input type="number" id="date3-1" name="date3-1" value="" class="col-sm-3 input-date" >
                                <label for="title" class="form-label px-1">日</label>
                                <label for="title" class="form-label">~</label>
                            </div>
                            <div class="mx-3 mb-3 mt-1 d-flex flex-row bd-highlight">
                                <input type="number" id="year3-2" name="year3-2" value="" class="col-sm-3 input-year">
                                <label for="title" class="form-label px-1">年</label>
                                <input type="number" id="month3-2" name="month3-2" value="" class="col-sm-3 input-month">
                                <label for="title" class="form-label px-1">月</label>
                                <input type="number" id="date3-2" name="date3-2" value="" class="col-sm-3 input-date" >
                                <label for="title" class="form-label px-1">日</label>
                            </div>
                        </div>
                        <div>
                            <label for="title" class="form-label px-3 my-0">修正日</label>
                            <div class="mx-3 d-flex flex-row bd-highlight">
                                <input type="number" id="year4-1" name="year4-1" value="" class="col-sm-3 input-year">
                                <label for="title" class="form-label px-1">年</label>
                                <input type="number" id="month4-1" name="month4-1" value="" class="col-sm-3 input-month">
                                <label for="title" class="form-label px-1">月</label>
                                <input type="number" id="date4-1" name="date4-1" value="" class="col-sm-3 input-date" >
                                <label for="title" class="form-label px-1">日</label>
                                <label for="title" class="form-label">~</label>
                            </div>
                            <div class="mx-3 mb-3 mt-1 d-flex flex-row bd-highlight">
                                <input type="number" id="year4-2" name="year4-2" value="" class="col-sm-3 input-year">
                                <label for="title" class="form-label px-1">年</label>
                                <input type="number" id="month4-2" name="month4-2" value="" class="col-sm-3 input-month">
                                <label for="title" class="form-label px-1">月</label>
                                <input type="number" id="date4-2" name="date4-2" value="" class="col-sm-3 input-date" >
                                <label for="title" class="form-label px-1">日</label>
                            </div>
                        </div>
                        <div>
                            <label for="title" class="form-label px-3 my-0">アクセス日</label>
                            <div class="mx-3 d-flex flex-row bd-highlight">
                                <input type="number" id="year5-1" name="year5-1" value="" class="col-sm-3 input-year">
                                <label for="title" class="form-label px-1">年</label>
                                <input type="number" id="month5-1" name="month5-1" value="" class="col-sm-3 input-month">
                                <label for="title" class="form-label px-1">月</label>
                                <input type="number" id="date5-1" name="date5-1" value="" class="col-sm-3 input-date" >
                                <label for="title" class="form-label px-1">日</label>
                                <label for="title" class="form-label">~</label>
                            </div>
                            <div class="mx-3 mb-3 mt-1 d-flex flex-row bd-highlight">
                                <input type="number" id="year5-2" name="year5-2" value="" class="col-sm-3 input-year">
                                <label for="title" class="form-label px-1">年</label>
                                <input type="number" id="month5-2" name="month5-2" value="" class="col-sm-3 input-month">
                                <label for="title" class="form-label px-1">月</label>
                                <input type="number" id="date5-2" name="date5-2" value="" class="col-sm-3 input-date" >
                                <label for="title" class="form-label px-1">日</label>
                            </div>
                        </div>
                        <div class="row px-3 my-3">
                            <div class="col-sm-10">
                                <label for="basic-url" class="form-label">アクセス回数</label>
                                <div class=" d-flex flex-row bd-highlight align-items-center">
                                    <input type="number" class="form-control p-1 bd-highlight" name="access-number1" id="basic-url" aria-describedby="basic-addon3">
                                    <label for="access-number" class="form-label px-2">~</label>
                                    <input type="number" class="form-control p-1 bd-highlight" name="access-number2" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="title" class="form-label px-3 my-0">ログイン日</label>
                            <div class="mx-3 d-flex flex-row bd-highlight">
                                <input type="number" id="year6-1" name="year6-1" value="" class="col-sm-3 input-year">
                                <label for="title" class="form-label px-1">年</label>
                                <input type="number" id="month6-1" name="month6-1" value="" class="col-sm-3 input-year">
                                <label for="title" class="form-label px-1">月</label>
                                <input type="number" id="date6-1" name="date6-1" value="" class="col-sm-3 input-date" >
                                <label for="title" class="form-label px-1">日</label>
                                <label for="title" class="form-label">~</label>
                            </div>
                            <div class="mx-3 mb-3 mt-1 d-flex flex-row bd-highlight">
                                <input type="number" id="year6-2" name="year6-2" value="" class="col-sm-3 input-year">
                                <label for="title" class="form-label px-1">年</label>
                                <input type="number" id="month6-2" name="month6-2" value="" class="col-sm-3 input-month">
                                <label for="title" class="form-label px-1">月</label>
                                <input type="number" id="date6-2" name="date6-2" value="" class="col-sm-3 input-date" >
                                <label for="title" class="form-label px-1">日</label>
                            </div>
                        </div>
                        <div class="row px-3 my-3">
                            <div class="col-sm-10">
                                <label for="basic-url" class="form-label">ログイン回数</label>
                                <div class=" d-flex flex-row bd-highlight align-items-center">
                                    <input type="number" class="form-control p-1 bd-highlight" name="num_login1" id="num_login1" aria-describedby="basic-addon3">
                                    <label for="basic-url" class="form-label px-2">~</label>
                                    <input type="number" class="form-control p-1 bd-highlight" name="num_login2" id="num_login2" aria-describedby="basic-addon3">
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="title" class="form-label px-3 my-0">退金日</label>
                            <div class="mx-3 d-flex flex-row bd-highlight">
                                <input type="number" id="year7-1" name="year7-1" value="" class="col-sm-3 input-year">
                                <label for="title" class="form-label px-1">年</label>
                                <input type="number" id="month7-1" name="month7-1" value="" class="col-sm-3 input-month">
                                <label for="title" class="form-label px-1">月</label>
                                <input type="number" id="date7-1" name="date7-1" value="" class="col-sm-3 input-date" >
                                <label for="title" class="form-label px-1">日</label>
                                <label for="title" class="form-label">~</label>
                            </div>
                            <div class="mx-3 mb-3 mt-1 d-flex flex-row bd-highlight">
                                <input type="number" id="year7-2" name="year7-2" value="" class="col-sm-3 input-year">
                                <label for="title" class="form-label px-1">年</label>
                                <input type="number" id="month7-2" name="month7-2" value="" class="col-sm-3 input-month">
                                <label for="title" class="form-label px-1">月</label>
                                <input type="number" id="date7-2" name="date7-2" value="" class="col-sm-3 input-date" >
                                <label for="title" class="form-label px-1">日</label>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="px-4">■検索条件2</h4>
                <div class="row ms-4">
                    <div class="col-sm-2 border border-secondary">
                        <div class="row">
                            <div class="ms-3 mt-4 col-sm-10">
                                <label for="basic-url" class="form-label">送金日</label>
                                <input type="date" class="form-control p-1 bd-highlight" id="remittance-date" name="remittance-date" aria-describedby="basic-addon3">
                            </div>
                            <div class="ms-3 mt-4 col-sm-10">
                                <label for="basic-url" class="form-label">振込み金額</label>
                                <input type="number" class="form-control p-1 bd-highlight" id="transfer_amount" name="transfer_amount" aria-describedby="basic-addon3">
                            </div>
                            <div class="ms-3 my-4 col-sm-10">
                                <label for="basic-url" class="form-label">決済金額</label>
                                <input type="number" class="form-control p-1 bd-highlight" id="settlement_amount" name="settlement_amount" aria-describedby="basic-addon3">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 border border-secondary">
                        <div class="row">
                            <div class="ms-3 mt-4 col-sm-10">
                                <label for="basic-url" class="form-label">ライン</label>
                                <input type="text" class="form-control p-1 bd-highlight" id="line" name="line" aria-describedby="basic-addon3">
                            </div>
                            <div class="col-sm-10 ms-3 mt-4">
                                <label for="desired-purchase-amount" class="form-label">買取希望額 </label>
                                <div class="select">
                                    <select name="desired_amount" id="desired_amount">
                                        <option selected="" value="" >選択してください</option>
                                        <option value="1">1万円</option>
                                        <option value="2">2万円</option>
                                        <option value="3">3万円</option>
                                        <option value="4">4万円</option>
                                        <option value="5">5万円</option>
                                        <option value="6">6万円</option>
                                        <option value="7">7万円</option>
                                        <option value="8">8万円</option>
                                        <option value="9">9万円</option>
                                        <option value="10">10万円以上</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-10 ms-3 mt-4">
                                <label for="title" class="form-label">健康保険</label>
                                <div class="select">
                                    <select name="health_insurance" id="health_insurance">
                                        <option selected="" value="">選択してください</option>
                                        <option value="1">国民健康保険</option>
                                        <option value="2">社会保険</option>
                                        <option value="3">その他</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ms-3 mt-4 col-sm-10">
                                <label for="basic-url" class="form-label">住所</label>
                                <input type="text" class="form-control p-1 bd-highlight" id="address" name="address" aria-describedby="basic-addon3">
                            </div>
                            <div class="ms-3 my-4 col-sm-10">
                                <label for="basic-url" class="form-label">自宅番号</label>
                                <input type="text" class="form-control p-1 bd-highlight" id="homephone_number" name="homephone_number" aria-describedby="basic-addon3">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 border border-secondary">
                        <div class="row">
                            <div class="ms-3 mt-4 col-sm-10">
                                <label for="basic-url" class="form-label">勤務先名</label>
                                <input type="text" class="form-control p-1 bd-highlight" id="companies" name="companies" aria-describedby="basic-addon3">
                            </div>
                            <div class="ms-3 mt-4 col-sm-10">
                                <label for="basic-url" class="form-label">勤務先番号</label>
                                <input type="number" class="form-control p-1 bd-highlight" id="work_phonenumber" name="work_phonenumber" aria-describedby="basic-addon3">
                            </div>
                            <div class="ms-3 mt-4 col-sm-10">
                                <label for="basic-url" class="form-label">勤務先住所</label>
                                <input type="text" class="form-control p-1 bd-highlight" id="companies_address" name="companies_address" aria-describedby="basic-addon3">
                            </div>
                            <div class="col-sm-10 ms-3 mt-4">
                                <label for="title" class="form-label">雇用形態</label>
                                <div class="select">
                                    <select name="employment" id="employment">
                                        <option value="">選択してください</option>
                                        <option value="1">正社員</option>
                                        <option value="2">契約社員</option>
                                        <option value="3">派遣社員</option>
                                        <option value="4">アルバイト、パート</option>
                                        <option value="5">その他</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-10 ms-3 my-4">
                                <label for="title" class="form-label">手取り月収</label>
                                <div class="select">
                                    <select name="monthly_income" id="monthly_income">
                                        <option selected="" value="">選択してください</option>
                                        <option value="1">1万円</option>
                                        <option value="2">2万円</option>
                                        <option value="3">3万円</option>
                                        <option value="4">4万円</option>
                                        <option value="5">5万円</option>
                                        <option value="6">6万円</option>
                                        <option value="7">7万円</option>
                                        <option value="8">8万円</option>
                                        <option value="9">9万円</option>
                                        <option value="10">10万円</option>
                                        <option value="11">11万円</option>
                                        <option value="12">12万円</option>
                                        <option value="13">13万円</option>
                                        <option value="14">14万円</option>
                                        <option value="15">15万円</option>
                                        <option value="16">16万円</option>
                                        <option value="17">17万円</option>
                                        <option value="18">18万円</option>
                                        <option value="19">19万円</option>
                                        <option value="20">20万円</option>
                                        <option value="21">21万円</option>
                                        <option value="22">22万円</option>
                                        <option value="23">23万円</option>
                                        <option value="24">24万円</option>
                                        <option value="25">25万円</option>
                                        <option value="26">26万円</option>
                                        <option value="27">27万円</option>
                                        <option value="28">28万円</option>
                                        <option value="29">29万円</option>
                                        <option value="30">30万円以上</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 border border-secondary">
                        <div class="row">
                            <div class="ms-3 mt-4 col-sm-10">
                                <label for="basic-url" class="form-label">緊急連絡先名前</label>
                                <input type="text" class="form-control p-1 bd-highlight" id="emergency_contact_name" name="emergency_contact_name" aria-describedby="basic-addon3">
                            </div>
                            <div class="ms-3 mt-4 col-sm-10">
                                <label for="basic-url" class="form-label">緊急連絡先関係</label>
                                <input type="text" class="form-control p-1 bd-highlight" id="relationship_emergency" name="relationship_emergency" aria-describedby="basic-addon3">
                            </div>
                            <div class="ms-3 my-4 col-sm-10">
                                <label for="basic-url" class="form-label">緊急連絡先電話</label>
                                <input type="number" class="form-control p-1 bd-highlight" id="relationship_emergency_phonenumber" name="relationship_emergency_phonenumber" aria-describedby="basic-addon3">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 border border-secondary">
                        <div class="row">
                            <div class="ms-3 mt-4 col-sm-11">
                                <label for="basic-url" class="form-label">現在利用中のファクタリング業者名</label>
                                <input type="text" class="form-control p-1 bd-highlight" id="name_factoring_recent" name="name_factoring_recent" aria-describedby="basic-addon3">
                            </div>
                            <div class="ms-3 mt-4 col-sm-11">
                                <label for="basic-url" class="form-label">過去利用のファクタリング業者名</label>
                                <input type="text" class="form-control p-1 bd-highlight" id="name_factoring_past" name="name_factoring_past" aria-describedby="basic-addon3">
                            </div>
                            <div class="ms-3 mt-4 col-sm-11">
                                <label for="basic-url" class="form-label">現在利用中の後払い業者</label>
                                <input type="text" class="form-control p-1 bd-highlight" id="name_pay_later" name="name_pay_later" aria-describedby="basic-addon3">
                            </div>
                            <div class="ms-3 my-4 col-sm-11">
                                <label for="basic-url" class="form-label">現在利用中の買取業者</label>
                                <input type="text" class="form-control p-1 bd-highlight" id="name_buyer" name="name_buyer" aria-describedby="basic-addon3">
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="🔍 検索" class="search_btn ms-5 my-5" onchange='chang()'>
            </div>
        </form>
        
@endsection
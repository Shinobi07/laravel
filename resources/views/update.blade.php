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
    <link rel="stylesheet" href="{{asset('/assess/css/update.css')}}">
    
    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{asset('assess/css/detail.js')}}"></script>


    <title>@yield('title')</title>
</head>
<body>
    <header>
        @yield('header')
        <div class="header">
            <div class="header-text">会員情報</div>
        </div>
    </header>
    <main class="update-main">
        @yield('main')
        <table class="update-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>生年月日</th>
                    <th>年齢</th>
                    <th>住所</th>
                    <th>電話番号</th>
                    <th>メールアドレス</th>
                    <th>LINE</th>
                    <th>広告コード</th>
                    <th>登録日時</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                <tr class="
                    @if ( $user->transaction_status === '新規')
                    white
                    @elseif ( $user->transaction_status === '本人断り')
                    orange
                    @elseif ( $user->transaction_status === '結果出ず' )
                    pink
                    @elseif ( $user->transaction_status === '弁')
                    gray
                    @elseif ( $user->transaction_status === '審査中' )
                    yellow
                    @elseif ( $user->transaction_status === '現客')
                    sky_blue
                    @elseif ( $user->transaction_status === '当社断り' )
                    red 
                    @elseif ( $user->transaction_status === '審査中未進行')
                    light_yellow
                    @elseif ( $user->transaction_status === '商品購入' )
                    blue
                    @elseif ( $user->transaction_status === '新規出ず')
                    light_gray
                    @elseif ( $user->transaction_status === '口コミ中' )
                    gold
                    @elseif ( $user->transaction_status === '結果出ず')
                    light_pink
                    @elseif ( $user->transaction_status === 'コゲ' )
                    brown
                    @endif 
                    ">
                    <td>{{ $user->user_id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->birth }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>{{ $user->mail }}</td>
                    <td>{{ $user->line }}</td>
                    <td>{{ $user->ad_code }}</td>
                    <td>{{ $user->signup_at }}</td>
                    <td>{{ $user->transaction_status }}</td>
                </tr>
            </tbody>
        </table>
        <form action="{{ route('users.store', ['id' => $user->user_id])}}" method="post">
            @csrf
            <div class="note">
                <p for="">■メモ</p>
                <textarea name="note" id="note" value="" cols="100" rows="3">{{ $user->note }}</textarea><br>
                <button type="submit" class="btn btn-outline-dark">メモ更新</button>
            </div>
        </form>
            <div>

                <div class="cp_tab">
                    <input type="radio" name="cp_tab" id="tab_1" aria-controls="tab1" onclick="loadPageInIframe({{$id}})" checked="">
                    <label for="tab_1">申込み対応</label>
                    <input type="radio" name="cp_tab" id="tab_3" aria-controls="tab3" onclick="registration({{$id}})">
                    <label for="tab_3">登録情報</label>
                    <input type="radio" name="cp_tab" id="tab_4" aria-controls="tab4" onclick="required_doc({{$id}})">
                    <label for="tab_4">必要書類写真</label>
                    <input type="radio" name="cp_tab" id="tab_5" aria-controls="tab5" onclick="bank({{$id}})">
                    <label for="tab_5">銀行口座</label>

                    <input type="radio" name="cp_tab" id="tab_8" aria-controls="tab8">
                    <label for="tab_8">サイト確認</label>
                    <div class="cp_tabpanels" style="HEIGHT:0px">
                        <div id="tab1" class="cp_tabpanel">
                        </div>
                        <div id="tab2" class="cp_tabpanel">
                        </div>
                        <div id="tab3" class="cp_tabpanel">
                        </div>
                        <div id="tab4" class="cp_tabpanel">
                        </div>
                        <div id="tab5" class="cp_tabpanel">
                        </div>
                        <div id="tab6" class="cp_tabpanel">
                        </div>
                        <div id="tab7" class="cp_tabpanel">
                        </div>
                        <div id="tab8" class="cp_tabpanel">
                        </div>
                    </div>
                </div>
               
            </div>
    </main>
    <iframe src="{{ route('users.upapp', ['id' => $user->user_id , 'app_id' => '0'])}}" frameborder="0" id="myIframe" name="iframe_a" height="615px" width="100%" title="Iframe Example"></iframe>
</body>
</html>

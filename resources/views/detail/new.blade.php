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
    <script src="{{asset('assess/css/style.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <div class="split-g split">
        <div class="split__left">
            <div>
                <label for="■申し込み一覧" class="mx-4 detail-la1">■申し込み一覧</label>
            </div>
            <div class=" d-flex mx-4 mt-2">
                <div class=" d-flex justify-content-center ">
                    @if ($arr->currentPage() > 1)
                        <button type="button" class="btn btn-outline-secondary datail-btn py-1 mx-1">
                            <a href="{{ $arr->appends(request()->except('page'))->previousPageUrl() }}">Prev</a>
                        </button>
                    @else
                        <button type="button" class="btn btn-outline-secondary datail-btn py-1 mx-1">
                            <a href="{{ $arr->appends(request()->except('page'))->previousPageUrl() }}">Prev</a>
                        </button>
                    @endif

                    @if ($arr->currentPage() < $arr->lastPage())
                    <button type="button" class="btn btn-outline-secondary datail-btn py-1 mx-1">
                        <a href="{{ $arr->appends(request()->except('page'))->nextPageUrl() }}">Next</a>
                    </button>
                    @else
                        <button type="button" class="btn btn-outline-secondary datail-btn py-1 mx-1">
                            <a href="{{ $arr->appends(request()->except('page'))->nextPageUrl() }}">Next</a>
                        </button>
                    @endif
                </div>  
                <form action="{{route('users.upapp', ['id' => $id, 'app_id' => $app_id])}}" class="detail-from" method="GET">
                    <input type="number" class="" name="page" min="1" max="{{ $arr->lastPage() }}" value="{{ $arr->currentPage() }}">
                    <input type="hidden" name="pmax" value="{{$size}}" class="in dis ms-1" >
                    <button type="submit" class="btn btn-outline-secondary datail-btn py-1 mx-1"><p>Jump</p></button>
                </form> 

                <form action="{{ route('users.upapp', ['id' => $id , 'app_id' => $app_id])}}" class="detail-from " method="get">
                    @csrf
                    <label for="" class="ms-1">表示件数 </label>
                    <input type="number" name="pmax" value="{{$size}}" class="in dis ms-1" id="pmax" >
                </form>
                <div>
                    <button class="btn btn-outline-secondary datail-btn py-1 mx-3" id="renewalButton"><a href="{{ route('users.upapp', ['id' => $id , 'app_id' => '1'])}}" >再契約</a></button>
                </div>
            </div>
            <div class="mx-4 my-2 detail-la1">
                    @if ($arr->lastPage() >= 1)
                        <div>
                        {{ $arr->total() }} 件中 {{ ($arr->currentPage() - 1) * $arr->perPage() + 1 }}  
                        <?php
                        $arrPerPage = count($arr);
                        echo "件目から" . $arrPerPage;
                        ?> 件を表示中.
                        (Page {{ $arr->currentPage() }}/{{ $arr->lastPage() }})
                        </div>  
                    @endif
            </div>
            <table class="detail-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>申し込日時</th>
                        <th>契約書</th>
                        <th>希望額</th>
                        <th>ステータス</th>
                        <th>振込み金額</th>
                        <th>決済金額</th>
                        <th>買取金額</th>
                        <th>決済日</th>
                        {{-- <th>商品名</th> --}}
                        <th>写真</th>
                        <th>契約時・名前</th>
                        <th>契約時・決済日</th>
                        <th>契約時・決済金額</th>
                        <th>契約時・買取金額</th>
                        <th>契約時・当日の日付</th>
                        <th>契約時・住所</th>
                        <th>署名名前</th>
                        <th>署名日時</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($arr as $item)
                        <tr class="@if ( $item->transaction_status == "1")
                            white
                        @elseif ( $item->transaction_status == "17")
                            orange
                        @elseif ( $item->transaction_status == '7' )
                            pink
                        @elseif ( $item->transaction_status == '19')
                            gray
                        @elseif ( $item->transaction_status == '3' )
                            yellow
                        @elseif ( $item->transaction_status == '11')
                            sky_blue
                        @elseif ( $item->transaction_status == '16' )
                            red 
                        @elseif ( $item->transaction_status == '4')
                            light_yellow
                        @elseif ( $item->transaction_status == '8' )
                            blue
                        @elseif ( $item->transaction_status == '2')
                            light_gray
                        @elseif ( $item->transaction_status == '9' )
                            gold
                        @elseif ( $item->transaction_status == '6')
                            light_pink
                        @elseif ( $item->transaction_status == '18' )
                            brown
                        @endif 
                                ">   
                            <td><a id="application_status" href="{{ route('users.upapp', ['id' => $item->application_user_id, 'app_id' => $item->application_status ])}}" class="link">{{ $item->application_status }}</a></td>
                            <td>{{ $item->application_date }}</td>
                            <td>{{ $item->contract_document }}</td>
                            <td>{{ $item->Items_purchase }}</td>
                            <td>{{ $item->transaction_status }}</td>
                            <td>{{ $item->transfer_amount }}</td>
                            <td>{{ $item->settlement_mount }}</td>
                            <td>{{ $item->purchase_amount }}</td>
                            <td>{{ $item->contract_date }}</td>
                            {{-- <td>{{ $item->ad_code }}</td> --}}
                            <td>{{ $item->Items_photo }}</td>
                            <td>{{ $item->contract_name }}</td>
                            <td>{{ $item->contract_settlement_date }}</td>
                            <td>{{ $item->contract_settlement_amount }}</td>
                            <td>{{ $item->contract_amount }}</td>
                            <td>{{ $item->contract_date_day }}</td>
                            <td>{{ $item->contract_address }}</td>
                            <td>{{ $item->signature_name }}</td>
                            <td>{{ $item->signature_date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="split__bar"></div>
        <div class="split__right">
            @if ($app_id != "0")
                <form id="" action="{{route('users.detail_store', ['id' => $id, 'app_id' => $app_id])}}" method="post">
                    @csrf
                    <div class="detail-re-we">
                        <div>
                            <table class="detail-re">
                                <label for="" id="detail-la">■再契約登録</label>
                                <tr>
                                    <td class="detail-re-color">商品名</td>
                                    <td>
                                        <input type="text" name="Items_purchase" id="Items_purchase" @if ($re_con) value="{{$re_con->Items_purchase }}"@endif>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="detail-re-color">振込み金額</td>
                                    <td>
                                        <input type="number" name="transfer_amount" id="transfer_amount"@if ($re_con) value="{{ $re_con->transfer_amount }}"@endif>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="detail-re-color">決済金額</td>
                                    <td>
                                        <input type="number" name="settlement_mount" id="settlement_mount" @if ($re_con) value="{{ $re_con->settlement_mount}}"@endif>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="detail-re-color">買取金額</td>
                                    <td>
                                        <input type="number" name="purchase_amount" id="purchase_amount" @if ($re_con) value="{{ $re_con->purchase_amount }}"@endif>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="detail-re-color">決済日</td>
                                    <td>
                                        <input type="number" name="contract_date" id="contract_date" @if ($re_con) value="{{ $re_con->contract_date }}"@endif>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="detail-re-color">ステータス</td>
                                    <td>
                                        <div class="select">
                                              
                                            <select name="transaction_status" id="transaction_status" @if ($re_con) value="{{ $re_con->transaction_status }}"@endif>
                                                @if (!empty($re_con))
                                                <option value=""  @if ($re_con->transaction_status == "") selected @endif></option>
                                                <option value="1" @if ($re_con->transaction_status == "1") selected @endif>新規</option>
                                                <option value="2" @if ($re_con->transaction_status == "2") selected @endif>新規出ず</option>
                                                <option value="3" @if ($re_con->transaction_status == "3") selected @endif>審査中</option>
                                                <option value="4" @if ($re_con->transaction_status == "4") selected @endif>審査中未進行</option>
                                                <option value="5" @if ($re_con->transaction_status == "5") selected @endif>結果</option>
                                                <option value="6" @if ($re_con->transaction_status == "6") selected @endif>結果出ず</option>
                                                <option value="7" @if ($re_con->transaction_status == "7") selected @endif>契約書</option>
                                                <option value="8" @if ($re_con->transaction_status == "8") selected @endif>商品購入</option>
                                                <option value="9" @if ($re_con->transaction_status == "9") selected @endif>口コミ中</option>
                                                <option value="10" @if ($re_con->transaction_status == "10") selected @endif>入金待ち</option>
                                                <option value="11" @if ($re_con->transaction_status == "11") selected @endif>現客</option>
                                                <option value="12" @if ($re_con->transaction_status == "12") selected @endif>再契約</option>
                                                <option value="13" @if ($re_con->transaction_status == "13") selected @endif>再契約出ず</option>
                                                <option value="14" @if ($re_con->transaction_status == "14") selected @endif>決済</option>
                                                <option value="15" @if ($re_con->transaction_status == "15") selected @endif>決済(再禁)</option>
                                                <option value="16" @if ($re_con->transaction_status == "16") selected @endif>当社断り</option>
                                                <option value="17" @if ($re_con->transaction_status == "17") selected @endif>本人断り</option>
                                                <option value="18" @if ($re_con->transaction_status == "18") selected @endif>コゲ</option>
                                                <option value="19" @if ($re_con->transaction_status == "19") selected @endif>弁</option>
                                                <option value="20" @if ($re_con->transaction_status == "20") selected @endif>分割中</option>
                                                <option value="21" @if ($re_con->transaction_status == "21") selected @endif>遅れ決済</option>
                                                <option value="22" @if ($re_con->transaction_status == "22") selected @endif>商品入力中</option>
                                                <option value="23" @if ($re_con->transaction_status == "23") selected @endif>写真追加中</option>
                                               @else
                                                <option value=""></option>
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
                                                @endif 
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </table>                        
                        </div>
                        <div>
                            {{-- <button type="submit" class="btn btn-outline-secondary datail-btn py-1 mt-3">登録</button> --}}
                            <button class="btn register_btn mt-2" type="submit">登録</button>
                        </div>
                    </div>
                </form>
            @else
                <div id="dis_b" class="ms-3">
                    <p>編集するNoか再契約ボタンをクリックしてください。</p>
                </div>
            @endif
        </div>
    </div>
    <script>
       
    </script>
</body>
</html>
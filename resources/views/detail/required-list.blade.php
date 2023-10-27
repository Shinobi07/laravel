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
    <link rel="stylesheet" href="{{asset('/assess/css/detail.css')}}"> 
    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{asset('assess/css/detail.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <div class="mx-3 mt-4 req_list_font">
        <div>
            <label for="">■必要書類写真</label>
        </div>
        <div class="list-group mt-3 req_list_font">
            <a href="/user/products_purchase/{{$id}}"  class="mt-2" target="pf2">買取希望商品</a>
            <a href="/user/id_card/{{$id}}" class="mt-2" target="pf2">顔写真付き身分証明書</a>
            <a href="/user/insurance_card/{{$id}}" class="mt-2" target="pf2">保険証</a>
            <a href="/user/public_bill/{{$id}}" class="mt-2" target="pf2">公共料金支払い書</a>
            <a href="/user/id_sel/{{$id}}" class="mt-2" target="pf2">IDセルフィー</a>
            <a href="/user/bank_card/{{$id}}" class="mt-2" target="pf2">銀行口座通帳キャッシュカード</a>
            <a href="/user/other_img/{{$id}}" class="mt-2" target="pf2">その他</a>
        </div>
        <div class="req_list_btn mt-5 req_list_font">
            <p id="modi-{{$req_list->user_id}}" class="
                @if ( $req_list->user_modify == "1")
                    modify
                @endif
                ">必要書類は未確認です</p>
            <button class="btn register_btn mt-2 req_list_font" type="" onclick="modify({{$req_list->user_id}})">修正実行</button>
        </div>
    </div>
</body>
</html>
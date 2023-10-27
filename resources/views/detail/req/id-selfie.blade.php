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
    <link rel="stylesheet" href="{{asset('/assess/css/photo.css')}}"> 
    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{asset('assess/css/detail.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <div class="d-flex img_sc">
        @if (count($id_sel))
            @foreach ($id_sel as $item)
            <div id="statu-{{$item->id}}" class="photo
            @if ( $item->status == "1")
                good
            @elseif ( $item->status == "2")
                bad
            @endif
            " >
                <img src="{{ asset( $item->path) }}" alt="photo">
                <br>
                <div >
                    <div class="ms-2">
                        <p class="mb-0">
                            {{$item -> time}}
                        </p>
                        <p class="mb-0">
                            {{$item -> img_name}}
                        </p>
                    </div>
                    <div class="photo_btn_gr">
                        <button class="btn register_btn req_list_font" type="" onclick="good({{$item->id}})">OK</button>
                        <button class="btn register_btn req_list_font" type="" onclick="bad({{$item->id}})">NG</button>
                        <button class="btn register_btn req_list_font" type="" onclick="del({{$item->id}})">削除</button>
                    </div>
                 </div>
            </div>
            @endforeach
        @else
            <p class="ms-3 mt-3">■IDセルフィー</p>
        @endif
        </div>
</body>
</html>
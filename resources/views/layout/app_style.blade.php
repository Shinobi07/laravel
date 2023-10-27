<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    @yield('css')
    <link rel="stylesheet" href="{{asset('/assess/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{asset('assess/css/style.js')}}"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
</head>
<body>
    <header>
        @yield('header')
        <div class="header">
            @yield('header-text')
        </div>
    </header>
    <nav>
        @yield('nav')
        <div class="col-sm-2 bg-secondary nav">
            <div class="text-light nav-text">
                <p>■データ管理</p>
                <ul>
                    <li>
                        <a href="#">会員検索</a>
                    </li>
                </ul>
                <p>■システム管理</p>
                <ul>
                    <li>
                        <a href="#">売上集計</a>
                    </li>
                    <li>
                        <a href="#">入金リスト</a>
                    </li>
                </ul>
                <p><a href="#">ログアウト</a></p>
            </div>
        </div>
    </nav>
    <main>
        @yield('main')
    </main>
    <footer>
        @yield('footer')
    </footer>
    @yield('js')
</body>
</html>
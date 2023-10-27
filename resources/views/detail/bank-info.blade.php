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
    <script src="{{asset('assess/css/style.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <form action="{{route('user.bank_info_store', ['id' => $id])}}" method="post" class="bank_w mt-5">
        @csrf
        <div>
            <label for="">■銀行口座情報</label>
        </div>
        <div class="mt-3">
            <table>
                <tr>
                    <td>銀行名</td>
                    <td>
                        <input type="text" name=" bank_name" id="" @if ($bank_info) value="{{ $bank_info->bank_name }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td>支店名</td>
                    <td>
                        <input type="text" name="bank_branch_name" id="" @if ($bank_info) value="{{ $bank_info->bank_branch_name }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td>口座種類</td>
                    <td>
                        <select name="bank_account_type" @if ($bank_info) value="{{ $bank_info->bank_account_type }}" @endif>
                            <option value="1" @if ($bank_info->bank_account_type == "1") selected @endif>普通預金</option>
                            <option value="2" @if ($bank_info->bank_account_type == "2") selected @endif>当座預金</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>口座番号</td>
                    <td>
                        <input type="text" name="bank_account_num" id="" @if ($bank_info) value="{{ $bank_info->bank_account_num }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td>口座名義</td>
                    <td>
                        <input type="text" name="bank_accountholder" id="" @if ($bank_info) value="{{ $bank_info->bank_accountholder }}" @endif>
                    </td>
                </tr>
            </table>
        </div>
        <div class="mt-2 wrapper">
            <a href="#demo-modal" class="btn register_btn" >修正登録 </a>
        </div>
        <div id="demo-modal" class="modal">
            <div class="modal__content">
                <h1></h1>
        
                <p>
                    会員情報を修正します。
                </p>
        
                <div class="modal__footer">
                    会員番号:{{$bank_info->user_id}}
                </div>
        
                <a href="#" class="modal__close">&times;</a>
                <button class="btn register_btn mt-2" type="submit">修正実行</button>
            </div>
        </div>
    </form>
</body>
</html>
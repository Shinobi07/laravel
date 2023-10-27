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
  <form action="{{route('users.register_info_store', ['id' => $id])}}" method="post" class="register_w mt-5">
    @csrf
    <div><label for="">■登録情報</label></div>
    <div class="d-flex justify-content-between mt-3 mb-3">
        <div class="register_f">
            <table>
                <tr>
                    <td class="">お名前</td>
                    <td>
                        <input type="text" name="name" @if ($user_info) value="{{ $user_info->name }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td class="">フリガナ</td>
                    <td>
                        <input type="text" name="name_furigana" id="" @if ($user_info) value="{{ $user_info->name_furigana }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td class="">電話番号</td>
                    <td>
                        <input type="text" name="phone_number" id="" @if ($user_info) value="{{ $user_info->phone_number }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td class="">メールアドレス</td>
                    <td>
                        <input type="text" name="mail" id="" @if ($user_info) value="{{ $user_info->mail }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td class="">ライン</td>
                    <td>
                        <input type="text" name="line" id="" @if ($user_info) value="{{ $user_info->line }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td class="">ログイン用パスワード</td>
                    <td>
                        <input type="text" name="password" id="" @if ($user_info) value="{{ $user_info->password }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td class="">性別</td>
                    <td>
                        <select name="gender" id="" @if ($user_info) value="{{ $user_info->gender }}" @endif>
                            <option value="1" @if ($user_info->gender == "1") selected @endif>男</option>
                            <option value="2" @if ($user_info->gender == "2") selected @endif>女</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="">生年月日</td>
                    <td>
                        <input type="text" name="birth" id="" @if ($user_info) value="{{ $user_info->birth }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td class="">住所</td>
                    <td><input type="text" name="address" id="" @if ($user_info) value="{{ $user_info->address }}" @endif></td>
                </tr>
                <tr>
                    <td class="">自宅番号</td>
                    <td>
                        <input type="text" name="homephone_number" id="" @if ($user_info) value="{{ $user_info->homephone_number }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td class="">買取り希望額</td>
                    <td>
                        <select name="desired_amount" >
                            <option selected="" value="">選択してください</option>
                            <option value="1" @if ($user_info->desired_amount == "1") selected @endif>1万円</option>
                            <option value="2" @if ($user_info->desired_amount == "2") selected @endif>2万円</option>
                            <option value="3" @if ($user_info->desired_amount == "3") selected @endif>3万円</option>
                            <option value="4" @if ($user_info->desired_amount == "4") selected @endif>4万円</option>
                            <option value="5" @if ($user_info->desired_amount == "5") selected @endif>5万円</option>
                            <option value="6" @if ($user_info->desired_amount == "6") selected @endif>6万円</option>
                            <option value="7" @if ($user_info->desired_amount == "7") selected @endif>7万円</option>
                            <option value="8" @if ($user_info->desired_amount == "8") selected @endif>8万円</option>
                            <option value="9" @if ($user_info->desired_amount == "9") selected @endif>9万円</option>
                            <option value="10" @if ($user_info->desired_amount == "10") selected @endif>10万円以上</option>
                        </select>                    
                    </td>
                </tr>
                <tr>
                    <td class="">健康保険</td>
                    <td>
                        <select name="health_insurance" @if ($user_info) value="{{ $user_info->health_insurance }}" @endif>
                            <option selected="" value="">選択してください</option>
                            <option value="1" @if ($user_info->health_insurance == "1") selected @endif>国民健康保険</option>
                            <option value="2" @if ($user_info->health_insurance == "2") selected @endif>社会保険</option>
                            <option value="3" @if ($user_info->health_insurance == "3") selected @endif>その他</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <div class="register_f">
            <div>
                <table>
                    <tr>
                        <td>買取希望商品</td>
                        <td>
                            <select name="items_purchase" @if ($user_info) value="{{ $user_info->items_purchase }}" @endif>
                                <option selected="" value="1">アイフォン</option>
                                <option value="2" @if ($user_info->items_purchase == "2") selected @endif>アンドロイド</option>
                                <option value="3" @if ($user_info->items_purchase == "3") selected @endif>タブレット</option>
                                <option value="4" @if ($user_info->items_purchase == "4") selected @endif>その他</option>
                                ?&gt;
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>買取方法</td>
                        <td>
                            <select name="method_purchase" @if ($user_info) value="{{ $user_info->method_purchase }}" @endif>
                                <option value="1" @if ($user_info->method_purchase == "1") selected @endif>写真で即時買取り</option>
                                <option value="2" @if ($user_info->method_purchase == "2") selected @endif>郵送買取</option>
                                ?&gt;
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="mt-3">
                <table>
                    <tr>
                        <td class="">勤務先名</td>
                        <td>
                            <input type="text" name="companies" id="" @if ($user_info) value="{{ $user_info->companies }}" @endif>
                        </td>
                    </tr>
                    <tr>
                        <td class="">勤務先番号</td>
                        <td> 
                            <input type="text" name="work_phonenumber" id="" @if ($user_info) value="{{ $user_info->work_phonenumber }}" @endif>
                        </td>
                    </tr>
                    <tr>
                        <td class="">勤務先住所</td>
                        <td>
                            <input type="text" name="companies_address" id="" @if ($user_info) value="{{ $user_info->companies_address }}" @endif>
                        </td>
                    </tr>
                    <tr>
                        <td class="">勤続年数</td>
                        <td>
                            <select name="length_employees" @if ($user_info) value="{{ $user_info->length_employees }}" @endif>
                                <option selected="" value="">選択してください</option>
                                <option value="1" @if ($user_info->length_employees == "1") selected @endif>1年未満</option>
                                <option value="2" @if ($user_info->length_employees == "2") selected @endif>1年</option>
                                <option value="3" @if ($user_info->length_employees == "3") selected @endif>2年</option>
                                <option value="4" @if ($user_info->length_employees == "4") selected @endif>3年</option>
                                <option value="5" @if ($user_info->length_employees == "5") selected @endif>4年</option>
                                <option value="6" @if ($user_info->length_employees == "6") selected @endif>5年</option>
                                <option value="7" @if ($user_info->length_employees == "7") selected @endif>6年</option>
                                <option value="8" @if ($user_info->length_employees == "8") selected @endif>7年</option>
                                <option value="9" @if ($user_info->length_employees == "9") selected @endif>8年</option>
                                <option value="10" @if ($user_info->length_employees == "10") selected @endif>9年</option>
                                <option value="11" @if ($user_info->length_employees == "11") selected @endif>10年以上</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="">手取り月収</td>
                        <td>
                            <select name="monthly_income" @if ($user_info) value="{{ $user_info->monthly_income }}" @endif>
                                <option selected="" value="">選択してください</option>
                                <option value="1" @if ($user_info->monthly_income == "1") selected @endif>1万円</option>
                                <option value="2" @if ($user_info->monthly_income == "2") selected @endif>2万円</option>
                                <option value="3" @if ($user_info->monthly_income == "3") selected @endif>3万円</option>
                                <option value="4" @if ($user_info->monthly_income == "4") selected @endif>4万円</option>
                                <option value="5" @if ($user_info->monthly_income == "5") selected @endif>5万円</option>
                                <option value="6" @if ($user_info->monthly_income == "6") selected @endif>6万円</option>
                                <option value="7" @if ($user_info->monthly_income == "7") selected @endif>7万円</option>
                                <option value="8" @if ($user_info->monthly_income == "8") selected @endif>8万円</option>
                                <option value="9" @if ($user_info->monthly_income == "9") selected @endif>9万円</option>
                                <option value="10" @if ($user_info->monthly_income == "10") selected @endif>10万円</option>
                                <option value="11" @if ($user_info->monthly_income == "11") selected @endif>11万円</option>
                                <option value="12" @if ($user_info->monthly_income == "12") selected @endif>12万円</option>
                                <option value="13" @if ($user_info->monthly_income == "13") selected @endif>13万円</option>
                                <option value="14" @if ($user_info->monthly_income == "14") selected @endif>14万円</option>
                                <option value="15" @if ($user_info->monthly_income == "15") selected @endif>15万円</option>
                                <option value="16" @if ($user_info->monthly_income == "16") selected @endif>16万円</option>
                                <option value="17" @if ($user_info->monthly_income == "17") selected @endif>17万円</option>
                                <option value="18" @if ($user_info->monthly_income == "18") selected @endif>18万円</option>
                                <option value="19" @if ($user_info->monthly_income == "19") selected @endif>19万円</option>
                                <option value="20" @if ($user_info->monthly_income == "20") selected @endif>20万円</option>
                                <option value="21" @if ($user_info->monthly_income == "21") selected @endif>21万円</option>
                                <option value="22" @if ($user_info->monthly_income == "22") selected @endif>22万円</option>
                                <option value="23" @if ($user_info->monthly_income == "23") selected @endif>23万円</option>
                                <option value="24" @if ($user_info->monthly_income == "24") selected @endif>24万円</option>
                                <option value="25" @if ($user_info->monthly_income == "25") selected @endif>25万円</option>
                                <option value="26" @if ($user_info->monthly_income == "26") selected @endif>26万円</option>
                                <option value="27" @if ($user_info->monthly_income == "27") selected @endif>27万円</option>
                                <option value="28" @if ($user_info->monthly_income == "28") selected @endif>28万円</option>
                                <option value="29" @if ($user_info->monthly_income == "29") selected @endif>29万円</option>
                                <option value="30" @if ($user_info->monthly_income == "30") selected @endif>30万円以上</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="">給料の支給方法</td>
                        <td>
                            <select name="payment_method" id="" >
                                <option value="1" @if ($user_info->payment_method == "1") selected @endif>選択してください</option>
                                <option value="2" @if ($user_info->payment_method == "2") selected @endif>振込</option>
                                <option value="3" @if ($user_info->payment_method == "3") selected @endif>手渡し</option>
                                <option value="4" @if ($user_info->payment_method == "4") selected @endif>その他</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="register_f">
            <table>
                <tr>
                    <td class="">緊急連絡先名前</td>
                    <td>
                        <input type="text" name="emergency_contact_name" id="" @if ($user_info) value="{{ $user_info->emergency_contact_name }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td class="">緊急連絡先関係</td>
                    <td>
                        <input type="text" name="relationship_emergency" id="" @if ($user_info) value="{{ $user_info->relationship_emergency }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td class="">緊急連絡先電話</td>
                    <td>
                        <input type="text" name="relationship_emergency_phonenumber" id="" @if ($user_info) value="{{ $user_info->relationship_emergency_phonenumber }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td class="">現在利用中のファクタリング業者名</td>
                    <td>
                        <input type="text" name="name_factoring_recent" id="" @if ($user_info) value="{{ $user_info->name_factoring_recent }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td class="">過去利用のファクタリング業者名</td>
                    <td>
                        <input type="text" name="name_factoring_past" id="" @if ($user_info) value="{{ $user_info->name_factoring_past }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td class="">現在利用中の後払い業者</td>
                    <td>
                        <input type="text" name="name_pay_later" id="" @if ($user_info) value="{{ $user_info->name_pay_later }}" @endif>
                    </td>
                </tr>
                <tr>
                    <td class="">現在利用中の買取業者</td>
                    <td>
                        <input type="text" name="name_buyer" id="" @if ($user_info) value="{{ $user_info->name_buyer }}" @endif>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="register_btn_group wrapper">
        <a href="#demo-modal" class="btn register_btn" >修正登録 </a>
        <button type="button " class="btn register_btn">データ削除</button>
    </div>
    <div id="demo-modal" class="modal">
        <div class="modal__content">
            <h1></h1>
    
            <p>
                会員情報を修正します。
            </p>
    
            <div class="modal__footer">
                会員番号:{{$user_info->user_id}}
            </div>
    
            <a href="#" class="modal__close">&times;</a>
            <button class="btn register_btn mt-2" type="submit">修正実行</button>
        </div>
    </div>
  </form>
</body>
</html>
<?php

namespace App\Http\Controllers;

use App\Models\user_info;
use App\Models\application_handling;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Pagination\LengthAwarePaginator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class SearchController extends Controller{

    public function search(Request $request)
    {
        $size = $request -> input('pmax');
        $user_id1 = $request -> input('user_id1');
        $user_id2 = $request -> input('user_id2');
        $gender = $request -> input('gender');
        $name = $request -> input('name');
        $name_furigana = $request -> input('name_furigana');
        $date = $request->input('birth');
        
        $birth="";
        if($date){
            $birth = Carbon::createFromFormat('Y-m-d', $date)->format('Ymd');
        }
        
        $phone_number = $request -> input('phone_number');
        $mail = $request -> input('mail');
        $user_status = $request -> input('user_status');
        $transaction_status = $request -> input('transaction_status');
        $ad_code = $request -> input('ad_code');
    
        $year1_1 = $request -> input('year1-1');
        $month1_1 = $request -> input('month1-1');
        $date1_1 = $request -> input('date1-1');
        $contract_date1 = $year1_1.$month1_1.$date1_1;
        if(!$year1_1){
            $contract_date1 = '';
        }
        $year1_2 = $request -> input('year1-2');
        $month1_2 = $request -> input('month1-2');
        $date1_2 = $request -> input('date1-2');
        $contract_date2 = $year1_2.$month1_2.$date1_2;
        if(!$year1_2){
            $contract_date2 = '';
        }

        $year2_1 = $request -> input('year2-1');
        $month2_1 = $request -> input('month2-1');
        $date2_1 = $request -> input('date2-1');
        $settlement_date1 = $year2_1.$month2_1.$date2_1;
        if(!$year2_1){
            $settlement_date1 = '';
        }
        $year2_2 = $request -> input('year2-2');
        $month2_2 = $request -> input('month2-2');
        $date2_2 = $request -> input('date2-2');
        $settlement_date2 = $year2_2.$month2_2.$date2_2;
        if(!$year2_2){
            $settlement_date2 = '';
        }

        $year3_1 = $request -> input('year3-1');
        $month3_1 = $request -> input('month3-1');
        $date3_1 = $request -> input('date3-1');
        $signup_at1 = $year3_1.$month3_1.$date3_1;
        if(!$year3_1){
            $signup_at1 = '';
        }
        $year3_2 = $request -> input('year3-2');
        $month3_2 = $request -> input('month3-2');
        $date3_2 = $request -> input('date3-2');
        $signup_at2 = $year3_2.$month3_2.$date3_2;
        if(!$year3_2){
            $signup_at2 = '';
        }

        $year4_1 = $request -> input('year4-1');
        $month4_1 = $request -> input('month4-1');
        $date4_1 = $request -> input('date4-1');
        $modified_at1 = $year4_1.$month4_1.$date4_1;
        if(!$year4_1){
        $modified_at1 = '';
        }
        $year4_2 = $request -> input('year4-2');
        $month4_2 = $request -> input('month4-2');
        $date4_2 = $request -> input('date4-2');
        $modified_at2 = $year4_2.$month4_2.$date4_2;
        if(!$year4_2){
            $modified_at2 = '';
        }

        // $year5_1 = $request -> input('year5-1');
        // $month5_1 = $request -> input('month5-1');
        // $date5_1 = $request -> input('date5-1');
        // $access_date1 = $year5_1.$month5_1.$date5_1;
        // if(!$year5_1){
        //     $access_date1 = '';
        // }
        // $year5_2 = $request -> input('year5-2');
        // $month5_2 = $request -> input('month5-2');
        // $date5_2 = $request -> input('date5-2');
        // $access_date2 = $year5_2.$month5_2.$date5_2;
        // if(!$year5_2){
        //     $access_date2 = '';
        // }

        $year6_1 = $request -> input('year6-1');
        $month6_1 = $request -> input('month6-1');
        $date6_1 = $request -> input('date6-1');
        $last_login_at1 = $year6_1.$month6_1.$date6_1;
        if(!$year6_1){
            $last_login_at1 = '';
        }
        $year6_2 = $request -> input('year6-2');
        $month6_2 = $request -> input('month6-2');
        $date6_2 = $request -> input('date6-2');
        $last_login_at2 = $year6_2.$month6_2.$date6_2;
        if(!$year6_2){
            $last_login_at2 = '';
        }

        $year7_1 = $request -> input('year7-1');
        $month7_1 = $request -> input('month7-1');
        $date7_1 = $request -> input('date7-1');
        $delete_at1 = $year7_1.$month7_1.$date7_1;
        if(!$year7_1){
            $delete_at1 = '';
        }
        $year7_2 = $request -> input('year7-2');
        $month7_2 = $request -> input('month7-2');
        $date7_2 = $request -> input('date7-2');
        $delete_at2 = $year7_2.$month7_2.$date7_2;
        if(!$year7_2){
            $delete_at2 = '';
        }
        // $access_number1 = $request -> input('access-number1');
        // $access_number2 = $request -> input('access-number2');
        $num_login1 = $request -> input('num_login1');
        $num_login2 = $request -> input('num_login2');
        
        //検索条件2
        // $re_date = $request -> input('remittance-date');
        // $remittance_date = Carbon::createFromFormat('Y-m-d', $re_date)->format('Ymd');

        $transfer_amount = $request -> input('transfer_amount');
        $settlement_amount = $request -> input('settlement_amount');
        $line = $request -> input('line');
        $desired_amount = $request -> input('desired_amount');
        $health_insurance = $request -> input('health_insurance');
        $address = $request -> input('address');
        $homephone_number = $request -> input('homephone_number');
        $companies = $request -> input('companies');
        $work_phonenumber = $request -> input('work_phonenumber');
        $companies_address = $request -> input('companies_address');
        $employment = $request -> input('employment');


        $monthly_income = $request -> input('monthly_income');
        $emergency_contact_name = $request -> input('emergency_contact_name');
        $relationship_emergency = $request -> input('relationship_emergency');
        $relationship_emergency_phonenumber = $request -> input('relationship_emergency_phonenumber');
        $name_factoring_recent = $request -> input('name_factoring_recent');
        $name_factoring_past = $request -> input('name_factoring_past');
        $name_pay_later = $request -> input('name_pay_later');
        $name_buyer = $request -> input('name_buyer');

        $perPage = ($size === '') ? 15 : intval($size);

        $records = user_info::query()

        ->when($user_id1, function ($query) use ($user_id1) {
            return $query->where('user_id', '>=', $user_id1);
        })
        ->when($user_id2, function ($query) use ($user_id2) {
            return $query->where('user_id', '<=', $user_id2);
        })
        ->when($gender, function ($query) use ($gender) {
            return $query->where('gender', 'LIKE', '%' . $gender . '%');
        })
        ->when($name, function ($query) use ($name) {
            return $query->where('name', 'LIKE', '%' . $name . '%');
        })
        ->when($name_furigana, function ($query) use ($name_furigana) {
            return $query->where('name_furigana', 'LIKE', '%' . $name_furigana . '%');
        })
        ->when($birth, function ($query) use ($birth) {
            return $query->where('birth', $birth);
        })
        ->when($phone_number, function ($query) use ($phone_number) {
            return $query->where('phone_number', $phone_number);
        })
        ->when($mail, function ($query) use ($mail) {
            return $query->where('mail', $mail);
        })
        ->when($user_status, function ($query) use ($user_status) {
            return $query->where('user_status', 'LIKE', '%' . $user_status . "%");
        })
        ->when($transaction_status, function ($query) use ($transaction_status) {
            return $query->where('transaction_status', 'LIKE', '%' . $transaction_status . '%');
        })
        ->when($ad_code, function ($query) use ($ad_code) {
            return $query->where('ad_code', $ad_code);
        })
        ->when($contract_date1, function ($query) use ($contract_date1) {
            return $query->where('contract_date', '>=', $contract_date1);
        })
        ->when($contract_date2, function ($query) use ($contract_date2) {
            return $query->where('contract_date', '<=', $contract_date2);
        })
        ->when($settlement_date1, function ($query) use ($settlement_date1) {
            return $query->where('settlement_date', '>', $settlement_date1);
        })
        ->when($settlement_date2, function ($query) use ($settlement_date2) {
            return $query->where('settlement_date', '>', $settlement_date2);
        })
        ->when($signup_at1, function ($query) use ($signup_at1) {
            return $query->where('signup_at', '>', $signup_at1);
        })
        ->when($signup_at2, function ($query) use ($signup_at2) {
            return $query->where('signup_at', '>', $signup_at2);
        })
        ->when($modified_at1, function ($query) use ($modified_at1) {
            return $query->where('modified_at', '>', $modified_at1);
        })
        ->when($modified_at2, function ($query) use ($modified_at2) {
            return $query->where('modified_at', '>', $modified_at2);
        })
        ->when($last_login_at1, function ($query) use ($last_login_at1) {
            return $query->where('last_login_at', '>', $last_login_at1);
        })
        ->when($last_login_at2, function ($query) use ($last_login_at2) {
            return $query->where('last_login_at', '>', $last_login_at2);
        })
        ->when($delete_at1, function ($query) use ($delete_at1) {
            return $query->where('delete_at', '>', $delete_at1);
        })
        ->when($delete_at2, function ($query) use ($delete_at2) {
            return $query->where('delete_at', '>', $delete_at2);
        })
        ->when($num_login1, function ($query) use ($num_login1) {
            return $query->where('num_login', '>', $num_login1);
        })
        ->when($num_login2, function ($query) use ($num_login2) {
            return $query->where('num_login', '>', $num_login2);
        })

        // ->when($remittance_date, function ($query) use ($remittance_date) {
        //     return $query->where('remittance_date', $remittance_date);
        // })

        ->when($transfer_amount, function ($query) use ($transfer_amount) {
            return $query->where('transfer_amount', $transfer_amount);
        })
        ->when($settlement_amount, function ($query) use ($settlement_amount) {
            return $query->where('settlement_amount', $settlement_amount);
        })
        ->when($line, function ($query) use ($line) {
            return $query->where('line', $line);
        })
        ->when($desired_amount, function ($query) use ($desired_amount) {
            return $query->where('desired_amount', $desired_amount.'万円');
        })
        ->when($health_insurance, function ($query) use ($health_insurance) {
            return $query->where('health_insurance', $health_insurance);
        })
        ->when($address, function ($query) use ($address) {
            return $query->where('address', $address);
        })
        ->when($homephone_number, function ($query) use ($homephone_number) {
            return $query->where('homephone_number', $homephone_number);
        })
        ->when($companies, function ($query) use ($companies) {
            return $query->where('companies', $companies);
        })
        ->when($work_phonenumber, function ($query) use ($work_phonenumber) {
            return $query->where('work_phonenumber', $work_phonenumber);
        })
        ->when($companies_address, function ($query) use ($companies_address) {
            return $query->where('companies_address', $companies_address);
        })
        ->when($employment, function ($query) use ($employment) {
            return $query->where('employment','LIKE', '%' . $employment . '%');
        })
        ->when($monthly_income, function ($query) use ($monthly_income) {
            return $query->where('monthly_income', $monthly_income.'万円');
        })
        ->when($emergency_contact_name, function ($query) use ($emergency_contact_name) {
            return $query->where('emergency_contact_name', $emergency_contact_name);
        })
        ->when($relationship_emergency, function ($query) use ($relationship_emergency) {
            return $query->where('relationship_emergency', $relationship_emergency);
        })
        ->when($relationship_emergency_phonenumber, function ($query) use ($relationship_emergency_phonenumber) {
            return $query->where('relationship_emergency_phonenumber', $relationship_emergency_phonenumber);
        })
        ->when($name_factoring_recent, function ($query) use ($name_factoring_recent) {
            return $query->where('name_factoring_recent', $name_factoring_recent);
        })
        ->when($name_factoring_past, function ($query) use ($name_factoring_past) {
            return $query->where('name_factoring_past', $name_factoring_past);
        })
        ->when($name_pay_later, function ($query) use ($name_pay_later) {
            return $query->where('name_pay_later', $name_pay_later);
        })
        ->when($name_buyer, function ($query) use ($name_buyer) {
            return $query->where('name_buyer', $name_buyer);
        })->paginate($perPage);

      $users = $records;
        
        return view('output', compact('users','size', 'user_id1', 'user_id2', 'name', 'name_furigana','birth', 'phone_number', 'mail', 'ad_code', 'year1_1', 'month1_1', 'date1_1', 'year1_2', 'month1_2', 'date1_2', 'year2_1', 'month2_1', 'date2_1', 'year2_2','month2_2', 'date2_2', 'year3_1', 'month3_1', 'date3_1', 'year3_2','month3_2','date3_2','year4_1' ,'month4_1','date4_1','year4_2', 'month4_2','date4_2', 'year6_1','month6_1','date6_1','year6_2','month6_2','date6_2','year7_1','month7_1', 'date7_1','year7_2','month7_2','date7_2','num_login1','num_login2','transfer_amount','settlement_amount','line','address','homephone_number','companies','work_phonenumber','companies_address','emergency_contact_name','relationship_emergency','relationship_emergency_phonenumber','name_factoring_recent','name_factoring_past','name_pay_later','name_buyer' ));
    }

    public function detail(Request $request, string $id){ 

        $user = user_info::where('user_id', $id)->first();

        return view('update', compact('user', 'id'));
    }

    public function store(Request $request, string $id){ 
    
        $note = $request -> input('note');
        if($note == null){
            $note = "";
        }


        $user = user_info::where('user_id', $id)->first();
        if(!empty($user)){
            $user['note'] = $note;
            $user->save();
        }
        return view('update', compact('user', 'id'));
    }

    public function detail_store(Request $request, string $id, string $app_id){

        $size = $request->input('pmax');

        if ($size === '') {
            $perPage = 1;
        } else {
            $perPage = intval($size);
        }
        $perPage = ($size === '') ? 100 : intval($size);

        $Items_purchase = $request -> input('Items_purchase');
        if($Items_purchase == null){
            $Items_purchase = "";
        }
        $transfer_amount = $request -> input('transfer_amount');
        if($transfer_amount == null){
            $transfer_amount = "";
        }
        $settlement_mount = $request -> input('settlement_mount');
        if($settlement_mount == null){
            $settlement_mount = "";
        }
        $purchase_amount = $request -> input('purchase_amount');
        if($purchase_amount == null){
            $purchase_amount = "";
        }
        $contract_date = $request -> input('contract_date');
        if($contract_date == null){
            $contract_date = "";
        }
        $transaction_status = $request -> input('transaction_status');
        if($transaction_status == null){
            $transaction_status = "";
        }
    
        $re_con = application_handling::where('application_status', $app_id)->first();

        if(!empty($re_con)){
            $re_con['transfer_amount'] = $transfer_amount;
            $re_con['Items_purchase'] = $Items_purchase;
            $re_con['settlement_mount'] = $settlement_mount;
            $re_con['purchase_amount'] = $purchase_amount;
            $re_con['contract_date'] = $contract_date;
            $re_con['transaction_status'] = $transaction_status;
            $re_con->save();
        }
    
        $arr = application_handling::query()->where('application_user_id', $id)->paginate($perPage);
    
        return view('detail.new', compact('arr', 'id', 'size', 're_con', 'app_id'));
    }

    public function upapp(Request $request, string $id, string $app_id){

        $size = $request->input('pmax');

        if ($size === '') {
            $perPage = 1;
        } else {
            $perPage = intval($size);
        }
        $perPage = ($size === '') ? 5 : intval($size);

        $arr = application_handling::where('application_user_id', $id)->paginate($perPage);

        $re_con = application_handling::where('application_status', $app_id)->first();

        return view('detail.new', compact('arr', 'id', 'size', 're_con', 'app_id'));
    }

    public function register_info(string $id){

        $user_info = user_info::where('user_id', $id)->first();

        return view('detail.registration-info', compact('user_info','id'));
    }

    public function register_info_store(Request $request, string $id){


        $name = $request -> input('name');
        if($name == null){
            $name = "";
        }
        $name_furigana = $request -> input("name_furigana");
        if($name_furigana == null){
            $name_furigana = "";
        }
        $phone_number = $request -> input('phone_number');
        if($phone_number == null){
            $phone_number = "";
        }
        $mail = $request -> input('mail');
        if($mail == null){
            $mail = "";
        }
        $line = $request -> input('line');
        if($line == null){
            $line = "";
        }
        $password = $request -> input('password');
        if($password == null){
            $password = "";
        }
        $gender = $request -> input('gender');
        if($gender == null){
            $gender = "";
        }
        $birth = $request -> input('birth');
        if($birth == null){
            $birth = "";
        }
        $address = $request -> input('address');
        if($address == null){
            $address = "";
        }
        $homephone_number = $request -> input('homephone_number');
        if($homephone_number == null){
            $homephone_number = "";
        }
        $desired_amount = $request -> input('desired_amount');
        if($desired_amount == null){
            $desired_amount = "";
        }
        $health_insurance = $request -> input('health_insurance');
        if($health_insurance == null){
            $health_insurance = "";
        }
        $items_purchase = $request -> input('items_purchase');
        if($items_purchase == null){
            $items_purchase = "";
        }
        $method_purchase = $request -> input('method_purchase');
        if($method_purchase == null){
            $method_purchase = "";
        }
        $companies = $request -> input('companies');
        if($companies == null){
            $companies = "";
        }
        $work_phonenumber = $request -> input('work_phonenumber');
        if($work_phonenumber == null){
            $work_phonenumber = "";
        }
        $companies_address = $request -> input('companies_address');
        if($companies_address == null){
            $companies_address = "";
        }
        $length_employees = $request -> input('length_employees');
        if($length_employees == null){
            $length_employees = "";
        }
        $monthly_income = $request -> input('monthly_income');
        if($monthly_income == null){
            $monthly_income = "";
        }
        $payment_method = $request -> input('payment_method');
        if($payment_method == null){
            $payment_method = "";
        }
        $emergency_contact_name = $request -> input('emergency_contact_name');
        if($emergency_contact_name == null){
            $emergency_contact_name = "";
        }
        $relationship_emergency = $request -> input('relationship_emergency');
        if($relationship_emergency == null){
            $relationship_emergency = "";
        }
        $relationship_emergency_phonenumber = $request -> input('relationship_emergency_phonenumber');
        if($relationship_emergency_phonenumber == null){
            $relationship_emergency_phonenumber = "";
        }
        $name_factoring_recent = $request -> input('name_factoring_recent');
        if($name_factoring_recent == null){
            $name_factoring_recent = "";
        }
        $name_factoring_past = $request -> input('name_factoring_past');
        if($name_factoring_past == null){
            $name_factoring_past = "";
        }
        $name_pay_later = $request -> input('name_pay_later');
        if($name_pay_later == null){
            $name_pay_later = "";
        }
        $name_buyer = $request -> input('name_buyer');
        if($name_buyer == null){
            $name_buyer = "";
        }

        $user_info= user_info::where('user_id',$id)->first();

        if(!empty($user_info)){
            $user_info['name'] = $name;
            $user_info['name_furigana'] = $name_furigana;
            $user_info['phone_number'] = $phone_number;
            $user_info['mail'] = $mail;
            $user_info['line'] = $line;
            $user_info['password'] = $password;
            $user_info['gender'] = $gender;
            $user_info['birth'] = $birth;
            $user_info['address'] = $address;
            $user_info['homephone_number'] = $homephone_number;
            $user_info['desired_amount'] = $desired_amount;
            $user_info['health_insurance'] = $health_insurance;
            $user_info['items_purchase'] = $items_purchase;
            $user_info['method_purchase'] = $method_purchase;
            $user_info['companies'] = $companies;
            $user_info['work_phonenumber'] = $work_phonenumber;
            $user_info['companies_address'] = $companies_address;
            $user_info['length_employees'] = $length_employees;
            $user_info['monthly_income'] = $monthly_income;
            $user_info['payment_method'] = $payment_method;
            $user_info['emergency_contact_name'] = $emergency_contact_name;
            $user_info['relationship_emergency'] = $relationship_emergency;
            $user_info['relationship_emergency_phonenumber'] = $relationship_emergency_phonenumber;
            $user_info['name_factoring_recent'] = $name_factoring_recent;
            $user_info['name_factoring_past'] = $name_factoring_past;
            $user_info['name_pay_later'] = $name_pay_later;
            $user_info['name_buyer'] = $name_buyer;
            $user_info->save();
        }

        return view('detail.registration-info', compact('user_info','id'));

    }

    public function bank_info(string $id){

        $bank_info = user_info::where('user_id', $id)->first();

        return view('detail.bank-info', compact('bank_info','id'));
    }

    public function bank_info_store(Request $request, string $id){

        $bank_name = $request -> input('bank_name');
        $bank_branch_name = $request -> input('bank_branch_name');
        $bank_account_type = $request -> input('bank_account_type');
        $bank_account_num = $request -> input('bank_account_num');
        $bank_accountholder = $request -> input('bank_accountholder');

        $bank_info = user_info::where('user_id', $id)->first();

        if(!empty($bank_info)){
            $bank_info['bank_name'] = $bank_name;
            $bank_info['bank_branch_name'] = $bank_branch_name;
            $bank_info['bank_account_type'] = $bank_account_type;
            $bank_info['bank_account_num'] = $bank_account_num;
            $bank_info['bank_accountholder'] = $bank_accountholder;
            $bank_info->save();
        }

        return view('detail.bank-info', compact('bank_info', 'id'));
    }

    public function required_doc(string $id){
        $req_doc = user_info::where('user_id', $id) -> first();
        return view('detail.required-doc', compact('req_doc', 'id'));
    }

    public function required_list(string $id){

        $req_list = user_info::where('user_id', $id) -> first();
        return view('detail.required-list', compact('req_list', 'id'));
    }

    public function required_first(string $id){

        $req_first = user_info::where('user_id', $id) -> first();
        return view('detail.required-first', compact('req_first', 'id'));
    }
}
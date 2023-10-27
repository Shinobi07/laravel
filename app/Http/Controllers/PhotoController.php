<?php

namespace App\Http\Controllers;

use App\Models\user_info;
use App\Models\application_handling;
use App\Models\Photo_path;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Pagination\LengthAwarePaginator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class PhotoController extends Controller{

    public function products_purchase(string $id){

        $products_purchase = Photo_path::where('user_id', $id)->where('type', "1")->get();

        return view('detail.req.products-purchase', compact('products_purchase', 'id'));
    }

    public function id_card(string $id){

        $id_card = Photo_path::where('user_id', $id)->where('type', "2")->get();

        return view('detail.req.id_card', compact('id_card', 'id'));
    }

    public function insurance_card(string $id){

        $ins_card = Photo_path::where('user_id', $id)->where('type', "3")->get();

        return view('detail.req.insurance-card', compact('ins_card', 'id'));
    }

    public function public_bill(string $id){

        $public_bill = Photo_path::where('user_id', $id)->where('type', "4")->get();

        return view('detail.req.public-bill', compact('public_bill', 'id'));
    }

    public function id_selfie(string $id){

        $id_sel = Photo_path::where('user_id', $id)->where('type', "5")->get();

        return view('detail.req.id-selfie', compact('id_sel', 'id'));
    }

    public function bank_card(string $id){

        $bank_card = Photo_path::where('user_id', $id)->where('type', "6")->get();

        return view('detail.req.bank-card', compact('bank_card', 'id'));
    }

    public function other (string $id) {

        $other_img = Photo_path::where('user_id', $id)->where('type', "7")->get();

        return view('detail.req.other', compact('other_img', 'id'));
    }

    public function img_statu( Request $request){
        
        $statu = $request -> input('status');
        $id = $request -> input('id');

        $products = Photo_path::where('id', $id)->first();

        if ($products) {
            $products->status = $statu;
            $products->save();
        }

        return response()->json(['status' => 'success']);

    }

    public function img_del(Request $request){

        $id = $request -> input('id');

        $del_img = Photo_path::where('id', $id)->first();
        $user = $del_img -> user_id;

        if (!empty($del_img)) {
            $del_img->delete(); // This will delete the record
            $products_purchase = Photo_path::where('user_id',$user) -> get();
            return view('detail.req.products-purchase', compact('products_purchase'));
        } else {
            return "Record not found.";
        }
    }

    public function modify(Request $request){

        $user = $request -> input('id');

        $user_id = user_info::where('user_id', $user) -> first();
        if(!empty($user_id)){
        $user_id -> user_modify = '1';
        $user_id -> save();
        }
        return response()->json(['status' => 'success']);
    }
}    
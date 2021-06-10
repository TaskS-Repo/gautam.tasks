<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Cart;

class PaymentController extends Controller
{
    public function home(){
        return view('payment.navigation');
    }
    public function medilist(){
        $medicine=Medicine::all();
        return view('payment.medilist',compact('medicine'));
    }

    public function cout(){
       $auth_id=Auth::user()->id;
        $cart=Cart::where('user_id',$auth_id)->get();
        $medicine=DB::table('carts')
        ->where('user_id',$auth_id)
        ->join('medicines','carts.medicine_id','=','medicines.id')
        ->select('carts.*','medicines.*')
        ->get();
        //dd($medicine);
        return view('payment.checkout',compact('medicine'));
    }
}

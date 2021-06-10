<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;

    public function addCart($id)
    {
       // dd($id);
       $user_id=Auth::user()->id;
        $total_item=Cart::where('user_id',$user_id)->where('medicine_id',$id)->pluck('total_item');
        //return $total_item;
        //dd($total_item);
        if($total_item->isEmpty())
        {
        $cart=new Cart();
        $cart->medicine_id=$id;
        $cart->total_item=1;
        $cart->user_id=$user_id;
        $cart->save();
         return $cart;
        }
         else{
            //dd($total_item);
       $total_item=$total_item[0]+1;
       $cart=Cart::where('user_id',$user_id)->where('medicine_id',$id)->update(['total_item'=>$total_item]);
        return $cart;
        }
    }

    public function deleteItem($medi_id)
    {
        $report=Cart::where('medicine_id',$medi_id)->delete();
        return $report;
    }
}

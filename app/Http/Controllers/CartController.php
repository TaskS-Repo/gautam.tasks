<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function store_cart($id=null){

        $cart=new Cart();
        $report=$cart->addCart($id);
        return $report;

    }

    public function delete_cart($medi_id=null)
    {
       $cart=new Cart();
       $report=$cart->deleteItem($medi_id);
       return $report;

    }
}

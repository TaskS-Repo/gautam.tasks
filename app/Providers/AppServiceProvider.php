<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Auth;

use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $user_id=1;
        $cart_item=Cart::where('user_id',$user_id)->sum('total_item');
        //dd($cart_item);
        view()->share('cart_item', $cart_item);
    }
}

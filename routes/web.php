<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\FrontendPractice;
use App\Http\Controllers\PaymentController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth:sanctum', 'verified'], function () {
    Route::group(['middleware' => 'rolecheck:admin', 'prefix' => 'admin', 'as' => '.admin'], function () {
        Route::get('/dashboard', [\App\Http\Controllers\CommanControlller::class, 'admin']);
    });

    Route::group(['middleware' => 'rolecheck:parent', 'prefix' => 'parent', 'as' => '.parent'], function () {
        Route::get('/dashboard', [\App\Http\Controllers\CommanControlller::class, 'parent']);
    });

    Route::group(['middleware' => 'rolecheck:teacher', 'prefix' => 'teacher', 'as' => '.teacher'], function () {
        Route::get('/dashboard', [\App\Http\Controllers\CommanControlller::class, 'teacher']);
    });

    Route::group(['middleware' => 'rolecheck:student', 'prefix' => 'student', 'as' => '.student'], function () {
        Route::get('/dashboard', [\App\Http\Controllers\CommanControlller::class, 'student']);
    });
});
Route::group(['middleware' => 'practicearena', 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('/cards', [FrontendPractice::class, 'cards']);
    Route::get('/watchs', [FrontendPractice::class, 'watch']);
    Route::get('/navigation', [FrontendPractice::class, 'navigation']);
});

Route::group(['middleware' => 'auth:sanctum', 'verified'], function () {
    //Medicine Routes

    Route::get('/ayurhome', [PaymentController::class, 'home']);
    Route::get('/medi-list', [PaymentController::class, 'medilist']);
    Route::get('/checkout', [PaymentController::class, 'cout']);
    Route::get('/cart/medicine/{id?}', [CartController::class, 'store_cart']);
    Route::get('/cart/item/delete/{id?}',[CartController::class, 'delete_cart']);
    //Dattabel Routes
    Route::get('/userdata', [DatatableController::class, 'index']);
    Route::get('/getuser', [DatatableController::class, 'getuser']);

});

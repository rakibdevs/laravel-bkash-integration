<?php

use App\Http\Controllers\BkashPaymentController;
use App\Http\Controllers\OrderController;
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

Route::resource('order', OrderController::class);

Route::group(['prefix' => 'bkash'], function () {
    Route::get('create-payment', [BkashPaymentController::class, 'createPayment'])->name('bkash.create-payment');
    Route::get('execute-payment', [BkashPaymentController::class, 'executePayment'])->name('bkash.execute-payment');
    Route::get('query-payment', [BkashPaymentController::class, 'queryPayment'])->name('bkash.query-payment');
    Route::post('success', [BkashPaymentController::class, 'bkashSuccess'])->name('bkash.success');
});

<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PaymentController;
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
    return view('home');
});

Route::get('/get-started/{code}', function ($package) {
    return view('register',[
        'package' => $package
    ]);
})->name('get-started');


Route::get('/success', function () {
    return view('success');
});

Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');

Route::post('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);

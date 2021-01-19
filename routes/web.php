<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuyShippingController;


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

Route::get('/buy-shipping', [BuyShippingController::class, 'index']);


Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/customers', [AdminController::class, 'index'])->name('customers');

});

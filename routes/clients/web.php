<?php

use App\Http\Controllers\Clint\ClientContrller;
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


Route::view('/add/client','clients.add_client');

Route::post('/store/client',[ClientContrller::class,'store_client']);
Route::get('/clients',[ClientContrller::class,'show_all_clients']);
Route::get('/client/book/appoiment/{id}',[ClientContrller::class,'book_appoimen']);
Route::post('/book/client/appoyment/{id}',[ClientContrller::class,'book_client_appoiment']);
Route::get('/select/examination/type/{id}',[ClientContrller::class,'select_examination_type']);
Route::post('/store/examination/type/{id}',[ClientContrller::class,'store_select_examination_type']);
Route::get('/review/{id}',[ClientContrller::class,'payment'])->middleware('isRegister');
Route::get('/serch/client',[ClientContrller::class,'serch_client']);
Route::get('/assessments/{id}',[ClientContrller::class,'assesment_view']);
Route::post('/store/assessments/{id}',[ClientContrller::class,'assesment_store']);








<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/homes',[HomeController::class,'index']);
Route::get('/basic_infos',[HomeController::class,'basic_info']);
Route::get('/management1',[HomeController::class,'management_1']);
Route::get('/management2',[HomeController::class,'management_2']);
Route::get('/capitals',[HomeController::class,'capital']);
Route::post('/management1',[HomeController::class,'store']);
Route::post('/management2',[HomeController::class,'store_Member']);
Route::post('/capitals',[HomeController::class,'Society_Member']);
Route::get('/letview',[BasicController::class,'Viewsociety']);
Route::post('/letview',[BasicController::class,'store']);
Route::get('/society/{id}',[BasicController::class,'show']);
Route::get('/edit/{id}',[BasicController::class,'edit']);
Route::put('/basic/{id}',[HomeController::class,'update']);
Route::put('/updatemange1/{id}',[BasicController::class,'updatemanagement_1']);
Route::put('/updatemange2/{id}',[HomeController::class,'updatemanagement_2']);
Route::put('/capital/{id}',[BasicController::class,'update']);
Route::get('/View_1',[BasicController::class,'View_1']);
Route::get('/details/{id}',[BasicController::class,'Details_view']);
Route::get('/District_View',[BasicController::class,'View_2']);
Route::get('/register',[RegisterController::class,'index']);
Route::get('/login',[LoginController::class,'login']);
Route::get('/auth',[LoginController::class,'authenticate']);
Route::post('/register',[RegisterController::class,'store']);


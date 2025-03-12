<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BasicController;

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

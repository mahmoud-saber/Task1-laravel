<?php

use App\Http\Controllers\newsController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// 'name' => '[a-zA-Z]+']


Route::get('create/news',[newsController::class,'create']);
Route::post('display/news',[newsController::class,'display']);

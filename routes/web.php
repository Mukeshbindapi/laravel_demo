<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminContrller;

Route::get('/',function(){
    return view('welcome');
});


Route::resource('admin',AdminContrller::class);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminContrller;

Route::get('/',function(){
    return view('welcome');
});


// Route::resource('admin',AdminContrller::class);

Route::prefix('admin')->group(function(){
    Route::controller(AdminContrller::class)->group(function(){

    });
});

Route::group(['prefix' => 'admin','controller' => AdminContrller::class],function(){
    Route::get('create','store');
    Route::get('list','index');
    Route::get('update/{id}','edit');
    Route::get('delete/{id}','destroy');
    Route::get('{id}','show');
});

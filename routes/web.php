<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminContrller;

// Routing Methods
// get->view
// post->store
// put->store
// patch->store || update
// delete->Delete

Route::get('/', function () {
    return view('welcome');
});

// Route::prefix('admin/')->group(function(){
//     Route::get('create',[AdminContrller::class,'create']);
//     Route::get('list',[AdminContrller::class,'list']);
//     Route::get('update',[AdminContrller::class,'update']);
//     Route::get('delete',[AdminContrller::class,'remove']);
// });

Route::controller(AdminContrller::class)->group(function(){
    Route::prefix('admin/')->group(function(){
        Route::get('create','create');
        Route::get('list','list');
        Route::get('update','update');
        Route::get('delete','remove');
    });
});
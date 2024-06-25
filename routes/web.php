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

Route::get('/admin/create',[AdminContrller::class,'create']);
Route::get('/admin/list',[AdminContrller::class,'list']);
Route::get('/admin/update',[AdminContrller::class,'update']);
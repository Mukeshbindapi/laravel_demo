<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SigleActionController;
use App\Http\Controllers\DemoController;

// Routing Methods
// get->view
// post->store
// put->store
// patch->store || update
// delete->Delete

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    echo 'Welcome to my laravel website whith method';
});

Route::any('/test/post', function () {
    return view('test');
});

Route::get('/demo', function () {
    $data = 'laravel Website demo project';
    $welcome = 'Welcome';
    return view('template.demo',compact('data','welcome'));
});

Route::get('/testing', function () {
    $data = 'laravel Website Testing project';
    $welcome = 'Welcome';
    return view('testing',compact('data','welcome'));
});

Route::get('user/create',[UserController::class,'create']);
Route::get('user/view',[UserController::class,'view']);
Route::get('invoke',[SigleActionController::class,'__invoke']);
Route::resource('post', DemoController::class);
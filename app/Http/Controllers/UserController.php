<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        $data = 'laravel Website demo project';
        $welcome = 'Welcome';
        return view('template.demo',compact('data','welcome'));
    }

    public function view(){
        $data = [
            'web' => 'laravel Website demo project',
            'welcome' => 'Welcome'
        ];
        return view('template.demo')->with($data);
    }
}

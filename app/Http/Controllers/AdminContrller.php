<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminContrller extends Controller
{
    public function create(){
        // echo "Admin Create";
        // dd('store admin dd');
        // dump('store admin');

        $data = [
            'first_name' => 'lakshimina',
            'last_name' => 'rajbhar',
            'email' => 'lakshiminaraj@gmail.com',
            'gender' => 'female',
            'city_id' => 4,
            'address' => 'manikpur',
            'mobile_no' => 3579742805,
            'type' => 1,
            'is_active' => 1,
        ];

        $admin = DB::table('admins')->insert($data);
        dd('admin created successfully.',$admin,$data);     
    }

    public function list(){
        $admins = DB::table('admins')->get();
        // dd($admins[3]);
        foreach($admins as $admin){
            dump($admin);
        }
    }
}

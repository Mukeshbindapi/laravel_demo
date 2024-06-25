<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminContrller extends Controller
{
    public function create() {
        $data = [
            'first_name' => 'Shivacharan',
            'last_name' => 'kumar',
            'email' => 'Shivacharan@gmail.com',
            'gender' => 'male',
            'city_id' => 6,
            'address' => 'kumhiyan',
            'mobile_no' => '234567890345',
            'type' => 1,
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    
        DB::table('admins')->insert($data);
        dd('Admin created successfully.', $data);   
    }

    public function list(){
        $admins = DB::table('admins')->get();
        // dd($admins[3]);
        foreach($admins as $admin){
            dump($admin);
        }
    }

    public function update(){
        $id = 4;
        $data = [
            'first_name' => 'lakshimina',
            'last_name' => 'bind',
            'email' => 'lakshiminabind@gmail.com',
            'gender' => 'female',
            'city_id' => 4,
            'address' => 'manikpur',
            'mobile_no' => 9876543765,
            'type' => 1,
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ];

        DB::table('admins')->where('id',$id)->update($data);
        dd('admin Updated successfully.',$data);  
    }

    public function remove(){
        $id = 2;
        DB::table('admins')->where('id',$id)->delete();
        dd('admin Updated successfully.');
    }
}

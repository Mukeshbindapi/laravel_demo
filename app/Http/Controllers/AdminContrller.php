<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;

class AdminContrller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = AdminModel::all();
        // dd($admins->toArray());
        return view('admin-list',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $data = [
        //     'first_name' => 'Mukesh',
        //     'last_name' => 'Kumar',
        //     'email' => 'mukesh@gmail.com',
        //     'gender' => 'male',
        //     'city_id' => 1,
        //     'address' => 'daulatabad',
        //     'mobile_no' => '3456767897',
        //     'type' => 1,
        //     'is_active' => 1,
        //     'dob' => '2000-01-01', // Add a value for dob
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ];

        // AdminModel::create($data);

        $admin = new AdminModel();
        $admin->first_name = 'kalu';
        $admin->last_name = 'kumar';
        $admin->email = 'kalu@gmail.com';
        $admin->gender = 'male';
        $admin->city_id = 2;
        $admin->address = 'kalapur';
        $admin->mobile_no = '3678865432';
        $admin->type = 1;
        $admin->is_active = 1;
        $admin->dob = now();
        $admin->save();
        dd('Admin created successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $id = '';
        // $data =
        // [
        //     'first_name' => 'sita',
        //     'last_name' => 'ram',
        //     'email' => 'sitaram@gmail.com',
        //     'gender' => 'male',
        //     'city_id' => 1,
        //     'address' => 'ayodhaya',
        //     'mobile_no' => '987654387',
        //     'type' => 2,
        //     'is_active' => 0,
        //     'dob' => '1999-3-20', // Add a value for dob
        // ];

        // AdminModel::where('id',$id)->update($data);
        // dd('Admin update successfully');

        $admin = AdminModel::find($id);
        $admin->first_name = 'kalu';
        $admin->last_name = 'kumar';
        $admin->email = 'kalu@gmail.com';
        $admin->gender = 'male';
        $admin->city_id = 2;
        $admin->address = 'kalapur';
        $admin->mobile_no = '3678865432';
        $admin->type = 1;
        $admin->is_active = 1;
        $admin->dob = now();
        $admin->save();
        dd('Admin Updated successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'gender',
        'city_id',
        'address',
        'mobile_no',
        'type',
        'is_active',
        'created_at',
        'updated_at'
    ];
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->integer('city_id')->nullable();
            $table->longText('address')->nullable();
            $table->bigInteger('mobile_no')->nullable();
            $table->tinyInteger('type')->default(1)->comment('1 => admin, 2 => super Admin, 3 => sales Admin');
            $table->boolean('is_active')->default(0);
            $table->date('dob');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};

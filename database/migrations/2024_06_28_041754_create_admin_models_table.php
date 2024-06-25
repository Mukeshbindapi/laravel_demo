<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('admin_models', function (Blueprint $table) {
        $table->id();
        $table->string('first_name');
        $table->string('last_name');
        $table->string('email')->unique();
        $table->string('gender');
        $table->unsignedBigInteger('city_id');
        $table->string('address');
        $table->string('mobile_no');
        $table->integer('type');
        $table->boolean('is_active')->default(1);
        $table->date('dob')->nullable(); // Set dob to nullable or provide a default value
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('admin_models');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->unique();
            $table->integer('exam_num');
            $table->string('fullname');
            $table->string('password'); // tanggal lahir
            $table->string('class');
            $table->enum('isPass', ["Lulus", "Tidak Lulus"]);
            $table->enum('isPaid', ["Lunas", "Belum Lunas"]);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

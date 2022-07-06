<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('un_cust')->nullable();
            $table->string('nama_cust');
            $table->string('email')->unique();
            $table->string('nohp_cust')->nullable();
            $table->string('alamat_cust')->nullable();
            $table->string('provinsi_cust')->nullable();
            $table->string('kabupaten_cust')->nullable();
            $table->string('kecamatan_cust')->nullable();
            $table->string('desa_cust')->nullable();
            $table->string('kodepos_cust')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
}

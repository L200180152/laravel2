<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesankaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesankaos', function (Blueprint $table) {
            $table->id();
            $table->string('namaproject');
            $table->string('desksingkat');
            $table->integer('uk_M');
            $table->integer('uk_L');
            $table->integer('uk_XL');
            $table->integer('lgnkaospndk');
            $table->integer('lgnkaospnjg');
            $table->string('nohp_user');
            $table->string('FD_custom')->nullable();
            $table->string('totalbayar');
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
        Schema::dropIfExists('pesankaos');
    }
}

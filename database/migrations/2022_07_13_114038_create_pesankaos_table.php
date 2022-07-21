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
            $table->string('nama_cust');
            $table->string('namaproject');
            $table->string('desksingkat');
            $table->integer('uk_M');
            $table->integer('uk_L');
            $table->integer('uk_XL');
            $table->integer('lgnkaospndk');
            $table->integer('lgnkaospnjg');
            $table->string('nohp_cust');
            $table->date('dlproduksi')->nullable();
            $table->string('jenissablon')->nullable();
            $table->string('FD_custom')->nullable();
            $table->string('totalbayar')->nullable();
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

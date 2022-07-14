<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id('id_cart');
            $table->integer('id');
            $table->integer('id_produk');
            // $table->foreign('id')->references('id')->on('users');
            // $table->foreign('id_produk')->references('id')->on('detailproduk');
            $table->string('nama_produk');
            $table->string('harga_produk');
            $table->string('img_produk');
            $table->string('jml_produk')->nullable();
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
        Schema::dropIfExists('cart');
    }
}

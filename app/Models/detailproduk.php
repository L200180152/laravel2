<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailproduk extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'detailproduk';
    protected $guarded = [];

    // protected $primarykey = 'id_produk';
    // protected $fillable = ['nama_produk', 'harga_produk', 'desc_produk', 'berat_produk', 'stok_produk', 'img_produk '];
}

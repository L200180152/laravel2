<?php

namespace App\Http\Controllers;

use App\Models\detailproduk;
use Illuminate\Http\Request;

class detailprodukController extends Controller
{
    public function index($id_produk)
    {
        $data = detailproduk::where('id_produk', $id_produk)->first();

        if ($data) {
            $data = [
                'judul' => 'Detail Produk | HUTS APPAREL',
                'nama_produk' => $data->nama_produk,
                'desc_produk' => $data->desc_produk,
                'berat_produk' => $data->berat_produk,
                'stok_produk' => $data->stok_produk,
                'harga_produk' => $data->harga_produk,
                'img_produk' => $data->img_produk
            ];
            return view('user.detailproduk', $data);
        } else {
            // Jika Produk tidak ada maka akan tampil halaman error
            return abort('404');
        }


        // return view('user.detailproduk', [
        //     "judul" => "Detail Produk"
        // ]);
    }
}

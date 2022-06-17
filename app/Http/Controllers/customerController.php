<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detailproduk;
use App\Models\cart;
use App\Models\User;

class customerController extends Controller
{
    public function index()
    {
        return view(
            'customer.profil',
            [
                "judul" => "Profil User | HUTS APPAREL"
            ]
        );
    }

    public function addcart(Request $request)
    {

        detailproduk::where('id_produk', $request->id_produk)->get(
            [
                'nama_produk' => $request->nama_produk,
                'harga_produk' => $request->harga_produk,
                // 'img_produk' => $gambar->hashName()
                'img_produk' => $request->img_produk
            ]
        );

        //insert post
        $cart = cart::create([
            'id_cart' => $request->id_cart,
            // 'id_cust' => $request->id_cust,
            // 'nama_cust' => $request->nama_cust,
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'img_produk' => $request->img_produk
        ]);

        if ($cart) {
            return redirect()->route('rute_produkadmin')->with(['Success' => 'Data Berhasil Ditambahkan']);
        } else {
            return redirect()->route('rute_produkadmin')->with(['Error' => 'Data Gagal Ditambahkan']);
        }
    }
}

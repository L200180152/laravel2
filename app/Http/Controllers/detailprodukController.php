<?php

namespace App\Http\Controllers;

use App\Models\detailproduk;
use App\Models\cart;
use Illuminate\Http\Request;

class detailprodukController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'judul' => 'Detail Produk | HUTS APPAREL',
            'produk' => detailproduk::where('id_produk', $request->id_produk)->first(),
            'cart_item' => cart::all()
        ];
        // dd($data);
        return view('user.detailproduk', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function index()
    {
        return view('user.transaksi.checkout', [
            "judul" => "Check Out Barang | HUTS APPAREL"
        ]);
    }
}

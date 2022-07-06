<?php

namespace App\Http\Controllers;

use App\Models\cart;

use Illuminate\Http\Request;

class ViewUserController extends Controller
{
    public function home()
    {
        return view('user.home', [
            "judul" => "HUTS APPAREL",
            'cart_item' => cart::all()
        ]);
    }

    public function about()
    {
        return view('user.about', [
            "judul" => "Tentang Huts Apparel",
            'cart_item' => cart::all()
        ]);
    }

    public function custom()
    {
        return view('user.custom', [
            "judul" => "Pesan Kaos | HUTS APPAREL",
            'cart_item' => cart::all()
        ]);
    }

    public function payproduk()
    {
        return view('user.payproduk', [
            "judul" => "Halaman Pembayaran",
            'cart_item' => cart::all()
        ]);
    }
}

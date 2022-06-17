<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewUserController extends Controller
{
    public function home()
    {
        return view('user.home', [
            "judul" => "HUTS APPAREL"
        ]);
    }

    public function about()
    {
        return view('user.about', [
            "judul" => "Tentang Huts Apparel"
        ]);
    }

    public function custom()
    {
        return view('user.custom', [
            "judul" => "Pesan Kaos | HUTS APPAREL"
        ]);
    }

    public function payproduk()
    {
        return view('user.payproduk', [
            "judul" => "Halaman Pembayaran"
        ]);
    }
}

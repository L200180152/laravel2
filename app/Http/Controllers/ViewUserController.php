<?php

namespace App\Http\Controllers;

use App\Models\cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewUserController extends Controller
{
    public function home()
    {
        return view('user.home', [
            "judul" => "HUTS APPAREL",
            'cart_item' => cart::where('id', Auth::check() ? Auth::user()->id : null)->get()
        ]);
    }

    public function about()
    {
        return view('user.about', [
            "judul" => "Tentang Huts Apparel",
            'cart_item' => cart::where('id', Auth::check() ? Auth::user()->id : null)->get()
        ]);
    }

    public function custom()
    {
        return view('user.custom', [
            "judul" => "Pesan Kaos | HUTS APPAREL",
            'cart_item' => cart::where('id', Auth::check() ? Auth::user()->id : null)->get()
        ]);
    }

    public function customtransaksi()
    {
        return view('user.customtransaksi', [
            "judul" => "Pesan Kaos | HUTS APPAREL",
            'cart_item' => cart::where('id', Auth::check() ? Auth::user()->id : null)->get()
        ]);
    }

    public function payproduk()
    {
        return view('user.payproduk', [
            "judul" => "Halaman Pembayaran",
            'cart_item' => cart::where('id', Auth::check() ? Auth::user()->id : null)->get()
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detailproduk;
use App\Models\cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class customerController extends Controller
{
    public function index(Request $request)
    {
        $data = User::find(Auth::user()->id)->get();

        if ($data) {
            $data = [
                'judul' => 'Detail User | HUTS APPAREL',
                'un_cust' => Auth::user()->un_cust,
                'nama_cust' => Auth::user()->nama_cust,
                'email' => Auth::user()->email,
                'nohp_user' => Auth::user()->nohp_user,
                'alamat_user' => Auth::user()->alamat_user,
            ];
            return view('customer.profil', $data);
        }
    }

    public function editprofil(Request $request)
    {
        // User::where('id', Auth::user()->id)->get();
        User::where('id', Auth::user()->id)->update(
            [
                'un_cust' => $request->un_cust,
                'nama_cust' => $request->nama_cust,
                'email' => $request->email,
                'nohp_user' => $request->nohp_user,
                'alamat_user' => $request->alamat_user,
            ]
        );

        return redirect()->route('profiluser');
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

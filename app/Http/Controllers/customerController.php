<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detailproduk;
use App\Models\cart;
use App\Models\negara;
use App\Models\provinsi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use App\Models\Province;


// Get semua data


class customerController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Profil User | HUTS APPAREL',
            User::find(Auth::user()->id)->get(),
            'provinsi' => Province::all(),
            'cart_item' => cart::all()
        ];
        return view('customer.profil', $data);
    }

    public function editprofil()
    {
        $editprofil = User::where('id', Auth::user()->id)->update(
            [
                'un_cust' => strtolower(request()->un_cust),
                'nama_cust' => request()->nama_cust,
                'email' => strtolower(request()->email),
                'nohp_cust' => request()->nohp_cust,
                'alamat_cust' => ucfirst(request()->alamat_cust),
                'provinsi_cust' => request()->provinsi_cust,
                'kabupaten_cust' => request()->kabupaten_cust,
                'kecamatan_cust' => request()->kecamatan_cust,
                'desa_cust' => request()->desa_cust,
                'kodepos_cust' => request()->kodepos_cust
            ]
        );

        return redirect()->route('profiluser')->with('berhasil', 'Data Berhasil Diubah');

        if ($editprofil) {
            session()->flash('berhasil', 'Data Berhasil Diubah');
            return redirect()->route('profiluser');
        } else {
            session()->flash('gagal', 'Data Gagal Diubah!');
            return redirect()->route('profiluser');
        }
    }

    public function addcart(Request $request)
    {
        //insert post
        $produk = detailproduk::where('id_produk', $request->id_produk)->first();
        // dd($produk);
        $cart = cart::create([
            'id_cart' => $request->id_cart,
            // 'id_cust' => Auth::user()->id,
            // 'nama_cust' => Auth::user()->nama_cust,
            'nama_produk' => $produk->nama_produk,
            'harga_produk' => $produk->harga_produk,
            'img_produk' => $produk->img_produk
        ]);

        if ($cart) {
            return redirect('/belanja')->with(['Success' => 'Data Berhasil Ditambahkan']);
        } else {
            return redirect('/belanja')->with(['Error' => 'Data Gagal Ditambahkan']);
        }
    }

    public function addcartdetail(Request $request)
    {
        //insert post
        $produk = detailproduk::where('id_produk', $request->id_produk)->get();
        // dd($produk);
        $cart = cart::create([
            'id_cart' => $request->id_cart,
            // 'id_cust' => Auth::user()->id,
            // 'nama_cust' => Auth::user()->nama_cust,
            'nama_produk' => $produk->nama_produk,
            'harga_produk' => $produk->harga_produk,
            'img_produk' => $produk->img_produk
        ]);

        if ($cart) {
            return redirect()->route('detail_produk')->with(['Success' => 'Data Berhasil Ditambahkan']);
        } else {
            return redirect()->route('detail_produk')->with(['Error' => 'Data Gagal Ditambahkan']);
        }
    }

    public function hapuscart(Request $request)
    {
        cart::where('id_cart', $request->id_cart)->delete();
        return redirect('/belanja')->with(['Success' => 'Data Berhasil Dihapus']);
    }
}

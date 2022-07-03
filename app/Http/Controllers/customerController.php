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

class customerController extends Controller
{
    public function index()
    {
        // $data = User::find(Auth::user()->id)->get();

        // if ($data) {
        $data = [
            'judul' => 'Profil User | HUTS APPAREL',
            User::find(Auth::user()->id)->get(),
            'negara' => negara::all()
        ];
        return view('customer.profil', $data);
    }

    public function getstate()
    {
        $negara_id = request('negara');

        $provinsi = provinsi::where('negara_id', $negara_id)->get();
        $option = "<option value=''>Pilih Provinsi</option>";
        foreach ($provinsi as $p) {
            $option .= '<option value="' . $p->name . '">' . $p->name . '</option>';
        }
        return $option;
    }
    public function editprofil()
    {

        // request()->validate([
        //     'un_cust' => ['required', 'string', 'max:20'],
        //     'nama_cust' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:20', 'unique:users'],
        //     'nohp_cust' => ['string', 'max:12'],
        //     'alamat_cust' => ['string', 'max:255']
        // ]);

        // $editprofil = User::where('id', Auth::user()->id)->update(
        //     [
        //         'un_cust' => request()->un_cust,
        //         'nama_cust' => request()->nama_cust,
        //         'email' => request()->email,
        //         'nohp_cust' => request()->nohp_cust,
        //         'alamat_cust' => request()->alamat_cust,
        //     ]
        // );

        $editprofil = User::where('id', Auth::user()->id)->update(
            [
                'un_cust' => strtolower(request()->un_cust),
                'nama_cust' => request()->nama_cust,
                'email' => strtolower(request()->email),
                'nohp_cust' => request()->nohp_cust,
                'alamat_cust' => ucfirst(request()->alamat_cust),
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
        // if ($editprofil) {
        //     redirect()->route('profiluser')->with('berhasil', 'Data Berhasil DiUbah');
        // } else {
        //     redirect()->route('profiluser')->with('gagal', 'Data Gagal DiUbah');
        // }
    }

    public function editalamat()
    {
        # code...
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

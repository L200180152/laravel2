<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesankaos;
use Illuminate\Support\Facades\Auth;

class pesankaosController extends Controller
{
    public function pesankaos(Request $request)
    {
        $this->validate($request, [
            'namaproject'    => 'required|max:100',
            'desksingkat'   => 'required|max:100',
            // 'jenissablon'   => 'required|max:100'
            'uploadrar'  => 'file|mimes:rar,zip'
        ]);

        //upload rar
        $uploadrar = $request->file('uploadrar');
        $uploadrar->storeAs('public/rar', $uploadrar->hashName());

        //insert post
        $pesankaos = pesankaos::create([
            'id' => $request->id,
            'nama_cust' => Auth::user()->nama_cust,
            'namaproject' => $request->namaproject,
            'desksingkat' => $request->desksingkat,
            'uk_M' => $request->uk_M,
            'uk_L' => $request->uk_L,
            'uk_XL' => $request->uk_XL,
            // 'lgnkaospndk' => $request->lgnkaospndk,
            'lgnkaospnjg' => $request->lgnkaospnjg,
            'nohp_cust' => Auth::user()->nohp_cust,
            // 'dlproduksi' => $request->input,
            'jenissablon' => $request->jenissablon,
            'FD_custom' => $uploadrar->hashName()
        ]);

        if ($pesankaos) {
            session()->flash('berhasil', 'Pesanan Berhasil Masuk');
            return redirect('/customtransaksi');
        } else {
            session()->flash('gagal', 'Pesanan gagal Masuk');
            return redirect('/custom');
        }
    }

    public function hpspesankaos(Request $request)
    {
        $hpspesankaos = PesanKaos::where('id', $request->id)->delete();
        if ($hpspesankaos) {
            session()->flash('berhasil', 'Pesanan Berhasil dihapus');
            return redirect('/customadmin');
        } else {
            session()->flash('gagal', 'Pesanan Gagal dihapus');
            return redirect('/customadmin');
        }
    }

    public function konfirmasipesankaos()
    {
        $konfirmasiPK = PesanKaos::where('id', Auth::user()->id)->update(
            [
                'dlproduksi' => request()->dlproduksi,
                'totalbayar' => request()->totalbayar
            ]
        );

        // return redirect()->route('profiluser')->with('berhasil', 'Data Berhasil Diubah');

        if ($konfirmasiPK) {
            session()->flash('berhasil', 'Data Berhasil Diubah');
            return redirect('/customadmin');
        } else {
            session()->flash('gagal', 'Data Gagal Diubah!');
            return redirect('/customadmin');
        }
    }
}

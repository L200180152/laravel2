<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesanKaos;

class ViewAdminController extends Controller
{
    public function admins()
    {
        return view('admin.dashboard', [
            "judul" => "Dashboard | Admin"
        ]);
    }

    public function transaksi()
    {
        return view('admin.transaksi', [
            "judul" => "Halaman Transaksi | Admin"
        ]);
    }

    public function addadmin()
    {
        return view('admin.addadmin', [
            "judul" => "Sign Up Admin"
        ]);
    }

    public function customadmin()
    {
        $data = [
            "judul" => "Halaman Custom | Admin",
            "pesankaos" => PesanKaos::all(),
        ];
        return view('admin.customadmin', $data);
    }

    public function detailpesankaos(Request $request)
    {
        $data = [
            "judul" => "Detail Kaos | Admin",
            "pesankaos" => PesanKaos::where('id', $request->id)->first(),
        ];
        return view('admin.detailpesankaos', $data);
    }
}

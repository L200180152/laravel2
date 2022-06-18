<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.customadmin', [
            "judul" => "Halaman Custom | Admin"
        ]);
    }
}

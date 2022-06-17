<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.register', [
            'judul' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'namacustomer' => 'required|max:255',
            'usernamecustomer' => 'required|min:3|max:255|unique:customer,un_cust',
            'emailcust' => 'required|email|max:255|unique:customer,email',
            'password' => 'required|min:3',
            'ulangpassword' => 'required|same:password'
        ]);

        $customer = customer::create([
            'id_cust' => $request->id,
            'nama_cust' => $request->namacustomer,
            'un_cust' => $request->usernamecustomer,
            'email' => $request->emailcust,
            'password' => $request->password,
        ]);

        if ($customer) {
            session()->flash('berhasil', 'Akun Berhasil ditambahkan, Silahkan Login');
            return redirect('/register');
        } else {
            session()->flash('gagal', 'Akun Gagal ditambahkan, Isilah data dengan benar!');
            return redirect('/register');
        }
    }

    public function add_admin(Request $request)
    {
        $request->validate([
            'nama_admin' => 'required',
            'username_admin' => 'required|unique:admin,username_admin',
            'password' => 'required',
            'ulangpassword' => 'required|same:password'
        ]);

        $addadmin = admins::create([
            'id_admin' => $request->id,
            'nama_admin' => $request->nama_admin,
            'username_admin' => $request->username_admin,
            'password' => $request->password
        ]);

        if ($addadmin) {
            session()->flash('berhasil', 'Admin Berhasil ditambahkan');
            return redirect('/add-admin');
        } else {
            session()->flash('gagal', 'Admin Gagal ditambahkan, Isilah data dengan benar!');
            return redirect('/add-admin');
        }
    }
}

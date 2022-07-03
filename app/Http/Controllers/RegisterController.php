<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\admins;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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
            'nama_admin' => ['required', 'string', 'max:255'],
            'username_admin' => ['required', 'string', 'max:20', 'unique:admin'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => 'required|same:password'
        ]);

        $addadmin = admins::create([
            'nama_admin' => $request->nama_admin,
            'username_admin' => $request->username_admin,
            'password' => Hash::make($request->password),
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

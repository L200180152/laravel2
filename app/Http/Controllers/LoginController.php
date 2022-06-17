<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login', [
            'judul' => 'Login'
        ]);
    }

    public function login_admin()
    {
        return view('admin.loginadmin', [
            "judul" => "Login Admin"
        ]);
    }

    public function login_admin_action(Request $request)
    {
        $credentials = $request->validate([
            'username_admin' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admins');
        }
        return back()->with('LoginError', 'Username Salah atau Password Salah, Silahkan Coba Lagi');
    }
}

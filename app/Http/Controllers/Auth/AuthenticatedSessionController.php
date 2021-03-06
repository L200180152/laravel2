<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\LoginRequestAdmin;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */

    public function create()
    {
        // return view('auth.login');
        return view('login.login', [
            "judul" => "Halaman Login",
            'cart_item' => cart::where('id', Auth::check() ? Auth::user()->id : null)->get()
        ]);
    }

    public function create_admin()
    {
        return view('admin.loginadmin');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * 
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        // return redirect()->intended(RouteServiceProvider::HOME);
        return redirect()->intended('/');
    }

    public function store_admin(LoginRequestAdmin $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended('/admins');
    }


    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function destroy_admin(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/loginadmin');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\cart;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */

    // public function create()
    // {
    //     return view('auth.register');
    // }

    public function create()
    {
        return view('login.register', [
            'judul' => 'Halaman Register',
            'cart_item' => cart::where('id', Auth::check() ? Auth::user()->id : null)->get()
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_cust' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'un_cust' => ['required', 'string', 'max:20', 'unique:users,un_cust'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => 'required|same:password'
        ]);

        $user = User::create([
            'nama_cust' => $request->nama_cust,
            'un_cust' => strtolower($request->un_cust),
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        return redirect('/');
    }
}

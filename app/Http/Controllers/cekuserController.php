<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class cekuserController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'judul' => 'Daftar User | Admin',
            'data' => User::all()
        ];

        return view('admin.cekuser', $data);
    }
}

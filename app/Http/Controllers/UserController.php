<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // panggil model user

class UserController extends Controller
{
    public function tampilUser()
    {
        $pengguna = User::all(); // ambil semua data user
        // dd($pengguna->toArray());
        // return view('user', compact('pengguna'));
        return view('tampiluser', ['orang' => $pengguna]);
    }

    public function tambahUser()
    {
        return view('tambahuser');
    }

    public function simpanUser(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('tampil-user');
    }
}

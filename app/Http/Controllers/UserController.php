<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // panggil model user

class UserController extends Controller
{
    // tampilkan data user
    public function tampilUser()
    {
        $pengguna = User::all(); // ambil semua data user
        // dd($pengguna->toArray());
        // return view('user', compact('pengguna'));
        return view('tampiluser', ['orang' => $pengguna]);
    }

    // tambah user
    public function tambahUser()
    {
        return view('tambahuser');
    }

    // simpan user
    public function simpanUser(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('tampil-user');
    }

    // edit user
    public function editUser($id)
    {
        // cek apakah id user ada atau tidak
        // $pengguna = User::find($id);
        $pengguna = User::findOrFail($id);
        // panggil view dan isikan $pengguna
        return view('edituser', ['pengguna' => $pengguna]);
    }

    // update user
    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',
        ]);
        // cari user berdasarkan id ada atau tidak
        $pengguna = User::findOrFail($id);
        // update data user
        $pengguna->update([
            'name' => $request->name,
        ]);
        // redirect ke halaman tampil user
        return redirect('tampil-user');
    }

    public function deleteUser($id)
    {
        $pengguna = User::findOrFail($id);
        $pengguna->delete();
        return redirect('tampil-user');
    }
}

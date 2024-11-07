<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = User::where('role', 'petugas')->get();
        return view('admin.DataPetugas', compact('petugas'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password Wajib Diisi'
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => 'petugas'
        ]);
        return redirect()->route('admin.datapetugas')->with('success', 'User berhasil dibuat!');
    }
    public function delete($id)
    {
        $petugas = User::findOrFail($id);

        $petugas->delete();

        return redirect()->route('admin.datapetugas')->with('success', 'Data petugas berhasil dihapus!');
    }
}

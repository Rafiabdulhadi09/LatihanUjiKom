<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.DataKategori', compact('kategori'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ], [
            'nama_kategori.required' => 'Nama kategori wajib diisi',
        ]);

        Kategori::create([
            'nama_kategori' => $request->input('nama_kategori'),
        ]);
        return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil dibuat!');
    }
}

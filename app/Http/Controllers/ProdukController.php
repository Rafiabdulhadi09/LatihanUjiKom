<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index($id)
    {
        $produk = Kategori::with('produk')->findOrFail($id);
        return view('admin.DataProduk', compact('produk'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'name_produk' => 'required|unique:produk,name_produk',
            'kd_produk' => 'required|unique:produk,kd_produk',
            'harga' => 'required',
            'stok' => 'required',
        ], [
            'name_produk.required' => 'Nama produk wajib diisi',
            'harga.required' => 'Harga wajib diisi',
            'stok.required' => 'Stok Wajib Diisi',
            'name_produk.unique' => 'Nama Produk Sudah tersedia',
            'kd_produk.unique' => 'Kode Produk Sudah tersedia'
        ]);

        Produk::create([
            'name_produk' => $request->input('name_produk'),
            'kd_produk' => $request->input('kd_produk'),
            'harga' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'kategori_id' => $request->input('kategori_id'),
        ]);
        return redirect()->back()->with('success', 'Produk berhasil dibuat!');
    }
    public function delete($id)
    {
        $produk = Produk::findOrFail($id);

        $produk->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus!');
    }
}

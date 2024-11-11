<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\TransaksiDetail;

class TransaksiController extends Controller
{
    public function index ($id)
    {
        $produk = Produk::get(); 
        $produk_id = request('produk_id'); 
        $p_detail = Produk::find($produk_id);

        $transaksiDetail = TransaksiDetail::whereTransaksiId($id)->get();
        $act = request('act');
        $qty = request('qty');
        if($act == 'min') {
            if ($qty <= 1) {
                $qty = 1;
            } else {
                $qty = $qty - 1;
            }
        } elseif ($act == 'plus') {
            $qty = $qty + 1;
        }
        $subtotal = 0;
        if ($p_detail) {
            $subtotal = $qty * $p_detail->harga;
        }

        $transaksi = Transaksi::find($id); 

        $dibayarkan = request('dibayarkan');
        $kembalian = $dibayarkan - $transaksi->total;

        return view('petugas.TambahTransaksi', compact('produk','p_detail','qty','subtotal','transaksiDetail','transaksi','kembalian'));
    }
    public function TambahTransaksi()
    {
        $data = [
            'petugas_id' => auth()->user()->id,  // Mendapatkan ID petugas yang sedang login
            'total' => 0,                    // Total transaksi yang diinisialisasi dengan 0
        ];
        
        // Membuat transaksi baru menggunakan data yang sudah disiapkan
        $transaksi = Transaksi::create($data);
        
        // Mengalihkan (redirect) ke halaman transaksi yang baru saja dibuat
        return redirect()->route('petugas.transaksi.edit', $transaksi->id);
        
    }

    public function TambahTransaksiAdmin()
    {
        $data = [
            'petugas_id' => auth()->user()->id,  // Mendapatkan ID petugas yang sedang login
            'total' => 0,                    // Total transaksi yang diinisialisasi dengan 0
        ];
        
        // Membuat transaksi baru menggunakan data yang sudah disiapkan
        $transaksi = Transaksi::create($data);
        
        // Mengalihkan (redirect) ke halaman transaksi yang baru saja dibuat
        return redirect()->route('admin.transaksi.edit', $transaksi->id);
        
    }

    public function admin ($id)
    {
        $produk = Produk::get(); 
        $produk_id = request('produk_id'); 
        $p_detail = Produk::find($produk_id);

        $transaksiDetail = TransaksiDetail::whereTransaksiId($id)->get();
        $act = request('act');
        $qty = request('qty');
        if($act == 'min') {
            if ($qty <= 1) {
                $qty = 1;
            } else {
                $qty = $qty - 1;
            }
        } elseif ($act == 'plus') {
            $qty = $qty + 1;
        }
        $subtotal = 0;
        if ($p_detail) {
            $subtotal = $qty * $p_detail->harga;
        }

        $transaksi = Transaksi::find($id); 

        $dibayarkan = request('dibayarkan');
        $kembalian = $dibayarkan - $transaksi->total;

        return view('admin.TambahTransaksi', compact('produk','p_detail','qty','subtotal','transaksiDetail','transaksi','kembalian'));
    }
}

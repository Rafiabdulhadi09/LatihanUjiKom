<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\TransaksiDetail;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function LaporanAdmin()
    {
        $laporan = Transaksi::with('user')->get();
        return view('admin.LaporanTransaksi', compact('laporan'));
    }
    public function laporan()
    {
        $laporan = Transaksi::with('user')->where('petugas_id', Auth::id())->get();
        return view('petugas.LaporanTransaksi', compact('laporan'));
    }

    public function detail($id)
    {
        $detail = Transaksi::with('detailTransaksi')->findOrFail($id);
        return view('admin.DetailTransaksi', compact('detail'));
    }
    public function detailTransaksiPetugas($id)
    {
        $detail = Transaksi::with('detailTransaksi')->findOrFail($id);
        return view('petugas.DetailTransaksi', compact('detail'));
    }
    
}

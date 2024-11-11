<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\TransaksiDetail;

class TransaksiDetailController extends Controller
{
    public function create(Request $request)
    {
        // dd($request->all());
        $produk_id = $request->produk_id;
        $transaksi_id = $request->transaksi_id;

        $td = TransaksiDetail::whereProdukId($produk_id)->whereTransaksiId($transaksi_id)->first();
        $transaksi = Transaksi::find($transaksi_id);
        if($td == null){
        $data = [
            'produk_id' => $produk_id,
            'produk_name' => $request->produk_name,
            'transaksi_id' => $transaksi_id,
            'qty' => $request->qty,
            'subtotal' => $request->subtotal
        ];
        TransaksiDetail::create($data);

        $dt = [
            'total' => $request->subtotal + $transaksi->total,
        ];
        $transaksi->update($dt);
    } else {
        $data = [
            'qty' => $td->qty + $request->qty,
            'subtotal' => $request->subtotal + $td->subtotal,
        ];
        $td->update($data);

        $dt = [
            'total' => $request->subtotal + $transaksi->total,
        ];
        $transaksi->update($dt);
    }
        return redirect()->route('petugas.transaksi.edit', $transaksi_id);
    }

    public function delete()
    {
        $id = request('id');
        $td = TransaksiDetail::find($id);
        $transaksi = Transaksi::find($td->transaksi_id);
        $data = [
            'total' => $transaksi->total - $td->subtotal,
        ];        
        $transaksi->update($data);
        $td->delete();
        return redirect()->back();
    }
    public function selesai($id)
    {
        $transaksi = Transaksi::find($id);
        $data = [
            'status' => 'selesai'
        ];
        $transaksi->update($data);
        return redirect()->route('petugas.laporan')->with('success','Sukses Transaksi Sudah Berhasil');
    }
    

    public function CreateDetail(Request $request)
    {
        // dd($request->all());
        $produk_id = $request->produk_id;
        $transaksi_id = $request->transaksi_id;

        $td = TransaksiDetail::whereProdukId($produk_id)->whereTransaksiId($transaksi_id)->first();
        $transaksi = Transaksi::find($transaksi_id);
        if($td == null){
        $data = [
            'produk_id' => $produk_id,
            'produk_name' => $request->produk_name,
            'transaksi_id' => $transaksi_id,
            'qty' => $request->qty,
            'subtotal' => $request->subtotal
        ];
        TransaksiDetail::create($data);

        $dt = [
            'total' => $request->subtotal + $transaksi->total,
        ];
        $transaksi->update($dt);
    } else {
        $data = [
            'qty' => $td->qty + $request->qty,
            'subtotal' => $request->subtotal + $td->subtotal,
        ];
        $td->update($data);

        $dt = [
            'total' => $request->subtotal + $transaksi->total,
        ];
        $transaksi->update($dt);
    }
        return redirect()->route('admin.transaksi.edit', $transaksi_id);
    }
    public function DeleteDetail()
    {
        $id = request('id');
        $td = TransaksiDetail::find($id);
        $transaksi = Transaksi::find($td->transaksi_id);
        $data = [
            'total' => $transaksi->total - $td->subtotal,
        ];        
        $transaksi->update($data);
        $td->delete();
        return redirect()->back();
    }
    public function SelesaiDetail($id)
    {
        $transaksi = Transaksi::find($id);
        $data = [
            'status' => 'selesai'
        ];
        $transaksi->update($data);
        return redirect()->route('admin.laporan')->with('success','Sukses Transaksi Sudah Berhasil');
    }
}

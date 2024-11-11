<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminContoller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransaksiDetailController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/submit', [LoginController::class, 'login'])->name('user.login');
});
Route::get('/home', function () {
    return redirect('/admin');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/admin', [AdminContoller::class, 'admin'])->name('admin')->middleware('userAkses:admin');       
    Route::delete('/admin/delete/{id}/petugas', [PetugasController::class, 'delete'])->name('admin.delete.petugas')->middleware('userAkses:admin');    
    Route::get('/petugas', [AdminContoller::class, 'petugas'])->name('petugas')->middleware('userAkses:petugas');    
    Route::get('/pimpinan', [AdminContoller::class, 'pimpinan'])->name('pimpinan')->middleware('userAkses:pimpinan'); 
    Route::get('/admin/datapetugas', [PetugasController::class, 'index'])->name('admin.datapetugas')->middleware('userAkses:admin'); 
    Route::post('/admin/tambah/datapetugas', [PetugasController::class, 'create'])->name('admin.tambah.datapetugas')->middleware('userAkses:admin'); 
    Route::get('/pimpinan', [AdminContoller::class, 'pimpinan'])->name('pimpinan')->middleware('userAkses:pimpinan');
    Route::get('/admin/{id}/dataproduk', [ProdukController::class, 'index'])->name('admin.dataproduk')->middleware('userAkses:admin');
    Route::post('/admin/tambah/produk', [ProdukController::class, 'create'])->name('admin.tambah.produk')->middleware('userAkses:admin');   
    Route::delete('/admin/delete/{id}/produk', [ProdukController::class, 'delete'])->name('admin.delete.produk')->middleware('userAkses:admin'); 
    Route::get('/admin/datakategori', [KategoriController::class, 'index'])->name('admin.kategori')->middleware('userAkses:admin'); 
    Route::post('/admin/tambah/kategori', [KategoriController::class, 'create'])->name('admin.tambah.kategori')->middleware('userAkses:admin'); 
    Route::get('/petugas/transaksi', [TransaksiController::class, 'TambahTransaksi'])->name('petugas.transaksi')->middleware('userAkses:petugas'); 
    Route::get('/petugas/transaksi/{id}/edit', [TransaksiController::class, 'index'])->name('petugas.transaksi.edit')->middleware('userAkses:petugas'); 
    Route::post('/petugas/detail/create', [TransaksiDetailController::class, 'create'])->name('transaksi.detail.create')->middleware('userAkses:petugas'); 
    Route::get('/petugas/detail/delete{id}', [TransaksiDetailController::class, 'delete'])->name('transaksi.detail.delete')->middleware('userAkses:petugas'); 
    Route::get('/petugas/detail/selesai{id}', [TransaksiDetailController::class, 'selesai'])->name('transaksi.detail.selesai')->middleware('userAkses:petugas'); 
    Route::get('/petugas/laporan', [LaporanController::class, 'laporan'])->name('petugas.laporan')->middleware('userAkses:petugas'); 
    Route::get('/admin/laporan', [LaporanController::class, 'LaporanAdmin'])->name('admin.laporan')->middleware('userAkses:admin'); 
    Route::get('/admin/transaksi', [TransaksiController::class, 'TambahTransaksiAdmin'])->name('admin.transaksi')->middleware('userAkses:admin'); 
    Route::get('/admin/transaksi/{id}/edit', [TransaksiController::class, 'admin'])->name('admin.transaksi.edit')->middleware('userAkses:admin');
    Route::post('/admin/detail/create', [TransaksiDetailController::class, 'CreateDetail'])->name('admin.transaksi.detail.create')->middleware('userAkses:admin'); 
    Route::get('/admin/detail/delete{id}', [TransaksiDetailController::class, 'DeleteDetail'])->name('admin.transaksi.detail.delete')->middleware('userAkses:admin'); 
    Route::get('/admin/detail/selesai{id}', [TransaksiDetailController::class, 'SelesaiDetail'])->name('admin.transaksi.detail.selesai')->middleware('userAkses:admin'); 
    Route::get('/admin/detail/transaksi{id}', [LaporanController::class, 'detail'])->name('admin.detail.transaksi')->middleware('userAkses:admin'); 
    Route::get('/petugas/detail/transaksi{id}', [LaporanController::class, 'detailTransaksiPetugas'])->name('petugas.detail.transaksi')->middleware('userAkses:petugas'); 


});
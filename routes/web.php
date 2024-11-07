<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminContoller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\KategoriController;
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
});
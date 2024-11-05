<?php

use App\Http\Controllers\AdminContoller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/petugas', [AdminContoller::class, 'petugas'])->name('petugas')->middleware('userAkses:petugas');    
    Route::get('/pimpinan', [AdminContoller::class, 'pimpinan'])->name('pimpinan')->middleware('userAkses:pimpinan'); 
});
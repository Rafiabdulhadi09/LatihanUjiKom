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
    Route::get('/', [LoginController::class, 'index'])->name('user.login');
    Route::post('/submit', [LoginController::class, 'login'])->name('user.login.submit');
});


Route::get('/admin', [AdminContoller::class, 'index'])->name('admin');
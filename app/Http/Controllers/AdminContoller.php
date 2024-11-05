<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminContoller extends Controller
{
    public function admin()
    {
        return view('admin.index');
    }

    public function petugas()
    {
        echo "Hallo selamat datang Petugas";
        echo "<h1>" . Auth::user()->name ."</h1>";
        echo "<a href='logout'>logout</a>";
    }

    public function pimpinan()
    {
        echo "Hallo selamat datang Pimpinan";
        echo "<h1>" . Auth::user()->name ."</h1>";
        echo "<a href='logout'>logout</a>";
    }
}

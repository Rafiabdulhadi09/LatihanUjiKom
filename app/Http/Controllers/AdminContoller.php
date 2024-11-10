<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return view('petugas.index');
    }

    public function pimpinan()
    {
        echo "Hallo selamat datang Pimpinan";
        echo "<h1>" . Auth::user()->name ."</h1>";
        echo "<a href='logout'>logout</a>";
    }


}

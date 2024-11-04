<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminContoller extends Controller
{
    public function index()
    {
        echo "Hallo selamat datang";
        echo "<h1>" . Auth::user()->name ."</h1>";
        echo "<a href='logout'>logout</a>";
    }
}

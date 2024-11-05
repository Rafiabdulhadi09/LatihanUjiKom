<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    function index ()
    {
        return view('login');
    }

   function login(Request $request)
   {
    $request->validate([
        'email'=>'required',
        'password'=>'required'
    ], [
        'email.required' => 'Email wajib diisi',
        'password.required' => 'Password wajib diisi'
    ]);

    $infologin =[
        'email'=>$request->email,
        'password'=>$request->password,
    ];

    if(Auth::attempt($infologin)){
        if(Auth::user()->role == 'admin') {
            return redirect('/admin');
        } elseif (Auth::user()->role == 'petugas') {
            return redirect('/petugas');
        } elseif (Auth::user()->role == 'pimpinan') {
            return redirect('/pimpinan');
        }
    } else {
        return redirect('')->withErrors('Username dan password yang anda masukan salah')->withInput();
    }
   }
   
   function logout()
   {
    Auth::logout();
    return redirect('');
   }
}


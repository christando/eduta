<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function save(Request $request)
    {
        user::create(['nik_user'=>$request->nik_user,
        'nama_user'=>$request->nama_user,
        'no_hp'=>$request->no_hp,
        'password'=> bcrypt($request->password)
     ]);
    }

    public function login(){
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        if(Auth::attempt([
            'nama_user' => $request -> nama_user, 
            'password' => $request -> password
        ]))
        {
            return redirect('/home');
        }
        else
        {
            redirect('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect('/');
    }
}

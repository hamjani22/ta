<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }
    public function postlogin(Request $request)
    {
        //return dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))) {
            $role = Auth::user()->role;
            if ($role == 'admin') {
                return redirect('/Dashboard-Admin');
            } else {
                return 'guest';
            }
        }
        return redirect('/Login')->with('gagal' . 'username/password salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/Login');
    }
}

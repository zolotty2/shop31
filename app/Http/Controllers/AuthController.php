<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSend(Request $request)
    {
        $request ->validate([
            'email'=>'required|email|min:5',
            'password'=>'required',
        ]);
        dd($request->all());
        return 1;
    }
}

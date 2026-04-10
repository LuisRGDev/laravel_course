<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request){
        $credentials =$request->only('email', 'password');

        if (Auth::attempt($credentials)){
            $request->session()->reegenerate();

            if (Auth::user()-> isAdmin()){
                return redirect()->route('admin.index');
            } 
        }
    }
}

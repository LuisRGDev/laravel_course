<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function showLogin(){
        return view('auth.login');
    }
    public function showRegister()
    {
        return view('auth.register');  
    }

    public function login(LoginRequest $request){
        $credentials =$request->only('email', 'password');

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            if (Auth::user()->isAdmin()){
                return redirect()->route('admin.index');
            } 
            return redirect()->route('dashboard');
        }
        return back()->withErrors([
        'email' => 'Las credenciales no son correctas',
         ])->onlyInput('email');
    }

    public function register(RegisterRequest $request){
        User::create([
            'email' =>$request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        return redirect()->route('login')
        ->with('success', 'Usuario Registrado . Inicia sesion.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
    
}

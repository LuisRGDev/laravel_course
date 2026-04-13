<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    public function edit(User $user){
        return view('admin.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $data = ['email' => $request->email, 'role' => $request->role];

        if($request->filled('password')){
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);  

        return redirect()->route('admin.index')
        ->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('admin.index')
        ->with('success', 'Usuario eliminado correctamente.');
    }
}

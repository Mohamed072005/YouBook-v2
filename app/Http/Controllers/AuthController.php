<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role_id' => 2,
        ]);

        return redirect()->route('to.login');
    }

    public function login(Request $request){
        $userData = $request->only('email', 'password');

        if (Auth::attempt($userData)) {
            $user = Auth::user();
            session()->put('user_id', $user->id);
            session()->put('first_name', $user->first_name);
            session()->put('last_name', $user->last_name);
            session()->put('user_role_id', $user->role_id);
            if($user->role_id == 1){
                return redirect()->route('to.book');
            }else{
                return redirect()->route('show');
            }
        }
        redirect()->route('userLogin');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('to.login');
    }
}

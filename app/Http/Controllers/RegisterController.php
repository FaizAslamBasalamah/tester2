<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view('registrasi.register');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'full_name'=> 'required',
            'username'=> 'required|unique:users',
            'email'=> 'required|email|unique:users',
            'telpon'=> 'required',
            'password'=> 'required|min:3' 
        ]);

        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);
        return redirect('/login')->with('success', 'Registrasi Berhasil! Login Sekarang');
    }
}

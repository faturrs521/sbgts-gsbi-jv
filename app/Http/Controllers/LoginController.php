<?php

namespace App\Http\Controllers;

use App\Models\User;
use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view('admin.admin-login', [
            "title" => "Login"
        ]);
    }

    public function loginProses(Request $request) {
        if(Auth::attempt($request->only('nik','password'))) {
            session()->flash('success', 'Login berhasil!');
            return redirect('/dashboard');
        }
        return back()->withErrors([
            'email' => 'Nik Atau Password Salah!',
        ]);
    }

    public function register() {
        return view('admin.admin-register', [
            "title" => "Register"
        ]);
    }

    public function registerUser(Request $request) {
        //dd($request->all());
        $fileName=time().'.'.$request->foto->extension();
        $request->file('foto')->storeAs('public',$fileName);
        $register = User::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'foto' => $fileName,
            'jabatan' => $request->jabatan,
            'level' => $request->level,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        $register->update();
        return redirect('/login');
    }

    public function logout(Request $request) {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}

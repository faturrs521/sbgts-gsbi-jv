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
        // if(Auth::attempt($request->only('nik','password'))) {
        //     session()->flash('success', 'Login berhasil!');
        //     return redirect('/dashboard');
        // }
        if (Auth::attempt($request->only('nik','password'))) {
            $request->session()->regenerate();

            $role = Auth::user()->role;

            switch ($role) {
                case 'admin':
                    return redirect()->intended('/admin-dashboard');
                    break;
                case 'ketua':
                    return redirect()->intended('/ketua-dashboard');
                    break;
                default:
                    return redirect()->intended('/dashboard');
            }
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
        $this->validate($request, [
            'nik' => 'required|unique:users,nik',
            'nama' => 'required|max:30',
            'foto' => 'required|image|file',
            'jeniskelamin' => 'required|max:20',
            'jabatan' => 'required|max:20',
            'password' => 'required|max:20',

        ], [
            'nik.unique' => 'Nik sudah terdaftar.',
            'nik.required' => 'Nik wajib diisi',
            'nama.required' => 'Nama wajib diisi',
            'jeniskelamin.required' => 'Jenis kelamin wajib diisi',
            'foto.image' => 'File ini bukan foto',
            'foto.required' => 'Foto wajib diisi',
            'jeniskelamin.required' => 'Jenis kelamin wajib diisi',
            'jabatan.required' => 'Jabatan wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);
        $fileName=time().'.'.$request->foto->extension();
        $request->file('foto')->storeAs('public',$fileName);
        $register = User::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'foto' => $fileName,
            'jeniskelamin' => $request->jeniskelamin,
            'jabatan' => $request->jabatan,
            'level' => $request->level,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        $register->update();
        return redirect('/login')->with('success', 'Registrasi Berhasil');;
    }

    public function logout(Request $request) {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}

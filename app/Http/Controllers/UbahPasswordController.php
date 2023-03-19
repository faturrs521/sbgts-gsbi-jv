<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UbahPasswordController extends Controller
{
    public function ubahPassword() {
        return view('user.user-ubah-password', [
            "title" => "Ubah Password"
        ]);
    }

    public function updatePassword(Request $request) {
        $validateData = $request->validate([
            'passwordLama' =>'required',
            'passwordBaru' =>'required',
        ],[
            'passwordLama.required' => 'Password lama wajib diisi!',
            'passwordBaru.required' => 'Password baru wajib diisi!',
        ]);
        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->passwordLama, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->passwordBaru);
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('berhasil','Password Berhasil di Update');
        }else{
            return redirect()->back()->with('error','Password Lama Tidak Valid');
        }
    }
}

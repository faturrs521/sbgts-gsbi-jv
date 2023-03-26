<?php

namespace App\Http\Controllers;

use App\Models\User;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UbahProfileController extends Controller
{
    public function tampilUbahProfile() {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            if($user) {
                return view('user.user-tampil-ubah-profile', compact('user'), [
                    "title" => "Ubah Profile"
                ]);
            }
        }
    }

    public function ubahProfile(Request $request) {
        $user = User::find(Auth::user()->id);

        if($user) {
            $user->nik = $request['nik'];
            $user->nama = $request['nama'];
            $user->jeniskelamin = $request['jeniskelamin'];
            $user->jabatan = $request['jabatan'];
            $user->save();

            if($request->hasfile('foto')){
                $destination = 'storage/public/'.$user->foto;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('foto');
                $extention = $file->getClientOriginalExtension();
                $fileName = time().'.'.$extention;
                $file->move('storage/public/',$fileName);
                $user->foto=$fileName;
            }
            $user->update();
            return redirect()->back()->with('success', 'Data Berhasil Di Ubah');
        }
    }



    public function ketuaTampilUbahProfile() {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            if($user) {
                return view('ketua.ketua-tampil-ubah-profile', compact('user'), [
                    "title" => "Ubah Profile"
                ]);
            }
        }
    }

    public function ketuaUbahProfile(Request $request) {
        $user = User::find(Auth::user()->id);

        if($user) {
            $user->nik = $request['nik'];
            $user->nama = $request['nama'];
            $user->jeniskelamin = $request['jeniskelamin'];
            $user->jabatan = $request['jabatan'];
            $user->save();

            if($request->hasfile('foto')){
                $destination = 'storage/public/'.$user->foto;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('foto');
                $extention = $file->getClientOriginalExtension();
                $fileName = time().'.'.$extention;
                $file->move('storage/public/',$fileName);
                $user->foto=$fileName;
            }
            $user->update();
            return redirect()->back()->with('success', 'Data Berhasil Di Ubah');
        }
    }

}

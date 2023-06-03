<?php

namespace App\Http\Controllers;

use File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataUsersController extends Controller
{
    public function dataUsers(Request $request) {
        $dataUsers = User::all();
        if ($request->has('search')) {
            $dataUsers = User::where('judul', 'LIKE', '%' . $request->search . '%')->paginate(6);
            Session::put('halaman_url', request()->fullUrl());
        } else {
            $dataUsers = User::paginate(6);
            Session::put('halaman_url', request()->fullUrl());
        }

        return view('ketua.DataUsers.data-users', compact('dataUsers'), [
            "title" => "Ubah Data User"
        ]);
    }

    public function tampilUsers($id) {

        $ubah = User::find($id);
        return view('ketua.DataUsers.tampil-data-users', compact('ubah'), [
            "title" => "Ubah Data Users  "
        ]);
    }

    public function ubahDataUsers(Request $request, $id) {
        $ubah = User::find($id);
        $ubah->nama = $request->input('nama');
        $ubah->jabatan = $request->input('jabatan');
        $ubah->jeniskelamin = $request->input('jeniskelamin');
        $ubah->role = $request->input('level');
        $ubah->update();
            return redirect()->route('data-users')->with('success', 'Data Berhasil Di Ubah');
    }

    public function hapusDataUsers($id) {
        $hapus = User::whereId($id)->first();
        if(\File::exists('storage/public/'.$hapus->foto)){
            File::delete('storage/public/'.$hapus->foto);
        }
        User::whereId($id)->delete();
        return redirect()->route('data-users')->with('success', 'Data Berhasil Di Hapus');
    }
}

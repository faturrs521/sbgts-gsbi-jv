<?php

namespace App\Http\Controllers;

use App\Models\DataKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataKategoriController extends Controller
{
    public function dataKategori(Request $request) {

        $dataKategori = DataKategori::all();
        if ($request->has('search')) {
            $dataKategori = DataKategori::where('nama', 'LIKE', '%' . $request->search . '%')->paginate(3);
            Session::put('halaman_url', request()->fullUrl());
        } else {
            $dataKategori = DataKategori::paginate(3);
            Session::put('halaman_url', request()->fullUrl());
        }
        return view('admin.DataKategori.admin-data-kategori', compact('dataKategori'), [
            "title" => "Data Kategori"
        ]);
    }

    public function tambahDataKategori() {
        return view(
            'admin.DataKategori.tambah-data-kategori',
            ["title" => "Tambah Data Pengurus"]
        );
    }

    public function insertDataKategori(Request $request) {
        $this->validate($request, [
            'nama' => 'required|max:20',
        ], [
            'nama.required' => 'Nama Kategori wajib diisi',
        ]);
        $dataKategori = DataKategori::create([
            'nama' => $request->nama,
        ]);
        return redirect()->route('admin-data-kategori')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampilDataKategori($id)
    {
        $kategori = DataKategori::find($id);
        return view('admin.DataKategori.tampil-data-kategori', compact('kategori'), [
            "title" => "Ubah Data Kaetegori "
        ]);
    }

    public function ubahDataKategori(Request $request, $id) {
        $ubah = DataKategori::find($id);
        $ubah->nama = $request->input('nama');
        $ubah->update();
            return redirect()->route('admin-data-kategori')->with('success', 'Data Berhasil Di Ubah');
    }


    public function hapusDataKategori($id)
    {
        $hapus = DataKategori::whereId($id)->first();
        DataKategori::whereId($id)->delete();
        return redirect()->route('admin-data-kategori')->with('success', 'Data Berhasil Di Hapus');
    }
}

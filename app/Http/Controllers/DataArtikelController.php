<?php

namespace App\Http\Controllers;



use File;
use App\Models\DataArtikel;
use App\Models\DataKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class DataArtikelController extends Controller
{
    public function detailDataArtikel($id) {
        $artikels = DataArtikel::whereId($id)->first();
        return view('admin.DataArtikel.admin-show-data-artikel', compact('artikels'), [
            "title" => "Detail Data Artikel"
        ]);
    }

    public function dataArtikel(Request $request) {

        $dataArtikel = DataArtikel::all();
        $dataKategori = DataKategori::all();
        if ($request->has('search')) {
            $dataArtikel = DataArtikel::where('judul', 'LIKE', '%' . $request->search . '%')->paginate(3);
            Session::put('halaman_url', request()->fullUrl());
        } else {
            $dataArtikel = DataArtikel::paginate(3);
            Session::put('halaman_url', request()->fullUrl());
        }
        return view('admin.DataArtikel.admin-data-artikel', compact('dataArtikel','dataKategori'), [
            "title" => "Data Artikel"
        ]);

    }

    public function tambahDataArtikel() {
        $kategoris = DataKategori::get();
        return view(
            'admin.DataArtikel.tambah-data-artikel',compact('kategoris'),
            ["title" => "Tambah Data Artikel"]
        );
    }

    public function insertDataArtikel(Request $request) {
        $this->validate($request, [
            'judul' => 'required|max:20',
            'file' => 'required|image|file',
            'deskripsi' => 'required|',
        ], [
            'judul.required' => 'Judul wajib diisi',
            'file.image' => 'File ini bukan foto',
            'file.required' => 'Foto wajib diisi',
            'deskripsi.required' => 'Deskripsi wajib diisi',
        ]);
        $fileName=time().'.'.$request->file->extension();
        $request->file('file')->storeAs('public',$fileName);
        $dataArtikel = DataArtikel::create([
            'kategori_id' => $request->kategoriid,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $fileName,
        ]);
        return redirect()->route('admin-data-artikel')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampilDataArtikel($id)
    {
        $kategoris = DataKategori::get();
        $artikels = DataArtikel::find($id);
        return view('admin.DataArtikel.tampil-data-artikel', compact('kategoris','artikels'), [
            "title" => "Ubah Data Artikel  "
        ]);
    }

    public function ubahDataArtikel(Request $request, $id) {
        $artikels = DataArtikel::find($id);
        $artikels->kategori_id = $request->input('kategoriid');
        $artikels->judul = $request->input('judul');
        $artikels->deskripsi = $request->input('deskripsi');

        if($request->hasfile('file')){
            $destination = 'storage/public/'.$artikels->file;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $file->move('storage/public/',$fileName);
            $artikels->file=$fileName;
        }
        $artikels->update();
            return redirect()->route('admin-data-artikel')->with('success', 'Data Berhasil Di Ubah');
    }


    public function hapusDataArtikel($id)
    {
        $artikels = DataArtikel::whereId($id)->first();
        if(\File::exists('storage/public/'.$artikels->file)){
            \File::delete('storage/public/'.$artikels->file);
        }
        DataArtikel::whereId($id)->delete();
        return redirect()->route('admin-data-artikel')->with('success', 'Data Berhasil Di Hapus');
    }
}

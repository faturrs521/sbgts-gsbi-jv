<?php

namespace App\Http\Controllers;

use PDF;
use File;
use App\Models\DataPengurus;
use Illuminate\Http\Request;
use App\Exports\DataPengurusExport;
use App\Imports\DataPengurusImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class DataPengurusController extends Controller
{
    public function dataPengurus(Request $request){

        if ($request->has('search')) {
            $dataPengurus = DataPengurus::where('nama', 'LIKE', '%' . $request->search . '%')->paginate(3);
           Session::put('halaman_url', request()->fullUrl());
        } else {
            $dataPengurus = DataPengurus::paginate(3);
            Session::put('halaman_url', request()->fullUrl());
        }
        return view('admin.DataPengurus.admin-data-pengurus', compact('dataPengurus'), [
            "title" => "Data Pengurus"
        ]);
    }

    public function tambahDataPengurus()
    {
        return view(
            'admin.DataPengurus.tambah-data-pengurus',
            ["title" => "Tambah Data Pengurus"]
        );
    }

    public function insertDataPengurus(Request $request)
    {
        $this->validate($request, [
        'nik' => 'required|unique:data_penguruses,nik',
        'nama' => 'required|max:20',
        'foto' => 'required|image|file',
        'jeniskelamin' => 'required|',
        'jabatan' => 'required|max:50',
        'dept' => 'required|max:20',
    ], [
        'nik.unique' => 'Nik sudah terdaftar.',
        'nik.required' => 'Nik wajib diisi',
        'nama.required' => 'Nama wajib diisi',
        'foto.image' => 'File ini bukan foto',
        'foto.required' => 'Foto wajib diisi',
        'jeniskelamin.required' => 'Jenis kelamin wajib diisi',
        'jabatan.required' => 'Jabatan wajib diisi',
        'dept.required' => 'Dept wajib diisi',
    ]);
        $fileName=time().'.'.$request->foto->extension();
        $request->file('foto')->storeAs('public',$fileName);
        $dataPengurus = DataPengurus::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'foto' => $fileName,
            'jeniskelamin' => $request->jeniskelamin,
            'jabatan' => $request->jabatan,
            'dept' => $request->dept,
        ]);
        $dataPengurus->update();
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('FotoPengurus/', $request->file('foto')->getClientOriginalName());
        //     $dataPengurus->foto = $request->file('foto')->getClientOriginalName();
        //     $dataPengurus->save();
        // }
        return redirect()->route('admin-data-pengurus')->with('success', 'Data Berhasil Di Tambahkan');
    }

       public function tampilDataPengurus($id)
    {
        $ubah = DataPengurus::find($id);
        //dd($ubah);
        return view('admin.DataPengurus.tampil-data-pengurus', compact('ubah'), [
            "title" => "Ubah Data Pengurus"
        ]);
    }

    public function ubahDataPengurus(Request $request, $id)
    {
        $dataPengurus = DataPengurus::find($id);
        $dataPengurus->nik = $request->input('nik');
        $dataPengurus->nama = $request->input('nama');
        $dataPengurus->jeniskelamin = $request->input('jeniskelamin');
        $dataPengurus->jabatan = $request->input('jabatan');
        $dataPengurus->dept = $request->input('dept');

        if($request->hasfile('foto')){
            $destination = 'storage/public/'.$dataPengurus->foto;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $file->move('storage/public/',$fileName);
            $dataPengurus->foto=$fileName;
        }
        $dataPengurus->update();
        if(session('halaman_url')) {
            return redirect(session('halaman_url'))->with('success', 'Data Berhasil Di Ubah');
        }
        return redirect()->route('admin-data-pengurus')->with('success', 'Data Berhasil Di Ubah');
    }

    public function hapusDataPengurus($id)
    {
        $dataPengurus = DataPengurus::whereId($id)->first();
        if(\File::exists('storage/public/'.$dataPengurus->foto)){
            \File::delete('storage/public/'.$dataPengurus->foto);
        }
        DataPengurus::whereId($id)->delete();
        return redirect()->route('admin-data-pengurus')->with('success', 'Data Berhasil Di Hapus');
    }

    public function exportPDF()
    {
        $dataPengurus = DataPengurus::all();
        view()->share('dataPengurus', $dataPengurus);
        $pdf = PDF::loadview('admin.DataPengurus.data-pengurus-pdf');
        return $pdf->download('Data Pengurus SBGTS-GSBI PT. VCI.pdf');
    }

    public function exportExcel() {
        return Excel::download(new DataPengurusExport,'Data Pengurus SBGTS-GSBI PT. VCI.xlsx');
    }

    // public function importExcel(Request $request) {
    //     $data = $request->file('file');
    //     $namaFile = $data->getClientOriginalName();
    //     $data->move('DataPengurus', $namaFile);
    //     Excel::import(new DataPengurusImport, \public_path('/DataPengurus/'.$namaFile));
    //     return \redirect()->back();
    // }

}

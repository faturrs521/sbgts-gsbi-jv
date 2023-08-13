<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use App\Models\DataAnggota;
use Illuminate\Http\Request;
use App\Exports\DataAnggotaExport;
use App\Imports\DataAnggotaImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class DataAnggotaController extends Controller
{
    public function dataAnggota(Request $request)
    {
        if ($request->has('search')) {
            $dataAnggota = DataAnggota::where('nama', 'LIKE', '%' . $request->search . '%')->paginate(10);
            Session::put('halaman_url', request()->fullUrl());
        } else {
            $dataAnggota = DataAnggota::paginate(10);
            Session::put('halaman_url', request()->fullUrl());
        }
        return view('admin.DataAnggota.admin-data-anggota', compact('dataAnggota'), [
            "title" => "Data Anggota"
        ]);
    }

    public function tambahDataAnggota()
    {
        return view(
            'admin.DataAnggota.tambah-data-anggota',
            ["title" => "Tambah Data Anggota"]
        );
    }

    public function insertDataAnggota(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required|unique:data_anggotas,nik',
            'nama' => 'required|max:20',
            'jeniskelamin' => 'required|',
            'kodedept' => 'required|max:50',
            'dept' => 'required|max:20',
            'tmk' => 'required|max:15',
            'status' => 'required|',
        ], [
            'nik.unique' => 'Nik sudah terdaftar.',
            'nik.required' => 'Nik wajib diisi',
            'nama.required' => 'Nama wajib diisi',
            'jeniskelamin.required' => 'Jenis kelamin wajib diisi',
            'kodedept.required' => 'Kode dept wajib diisi',
            'dept.required' => 'Dept wajib diisi',
            'tmk.required' => 'Tanggal masuk kerja wajib diisi',
            'status.required' => 'Status wajib diisi',
        ]);
        $user = User::where('nik', $request->input('nik'))->first();
        if ($user) {
            return redirect()->back()->with('error', 'NIK Sudah Ada Pada Pengguna Lain.');
         }
        $dataAnggota = DataAnggota::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jeniskelamin' => $request->jeniskelamin,
            'kodedept' => $request->kodedept,
            'dept' => $request->dept,
            'tmk' => $request->tmk,
            'status' => $request->status,
        ]);
        return redirect()->route('admin-data-anggota')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampilDataAnggota($id)
    {
        $ubah = DataAnggota::find($id);
        //dd($ubah);
        return view('admin.DataAnggota.tampil-data-anggota', compact('ubah'), [
            "title" => "Ubah Data Anggota"
        ]);
    }

    public function ubahDataAnggota(Request $request, $id)
    {
        $dataAnggota = DataAnggota::find($id);
        $dataAnggota->nik = $request->input('nik');
        $dataAnggota->nama = $request->input('nama');
        $dataAnggota->jeniskelamin = $request->input('jeniskelamin');
        $dataAnggota->kodedept = $request->input('kodedept');
        $dataAnggota->dept = $request->input('dept');
        $dataAnggota->tmk = $request->input('tmk');
        $dataAnggota->status = $request->input('status');
        $dataAnggota->update();
        if(session('halaman_url')) {
            return redirect(session('halaman_url'))->with('success', 'Data Berhasil Di Ubah');
        }
        return redirect()->route('admin-data-anggota')->with('success', 'Data Berhasil Di Ubah');
    }

    public function hapusDataAnggota($id)
    {
        $hapus = DataAnggota::find($id);
        $hapus->delete();
        return redirect()->route('admin-data-anggota')->with('success', 'Data Berhasil Di Hapus');
    }

    // public function exportPDF()
    // {
    //     $dataAnggota = DataAnggota::all();
    //     view()->share('dataAnggota', $dataAnggota);
    //     $pdf = PDF::loadview('admin.DataAnggota.data-anggota-pdf');
    //     return $pdf->download('Data Anggota SBGTS-GSBI PT. VCI.pdf');
    // }

    public function exportExcel() {
        return Excel::download(new DataAnggotaExport,'Data Anggota SBGTS-GSBI PT. VCI.xlsx');
    }

    public function importExcel(Request $request) {
        $data = $request->file('file');
        $namaFile = $data->getClientOriginalName();
        $data->move('DataAnggota', $namaFile);

        Excel::import(new DataAnggotaImport, \public_path('/DataAnggota/'.$namaFile));
        return \redirect()->back()->with('success', 'Data Berhasil Di Import');
    }
}

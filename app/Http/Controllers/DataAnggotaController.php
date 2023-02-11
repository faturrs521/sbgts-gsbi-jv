<?php

namespace App\Http\Controllers;

use App\Models\DataAnggota;
use Illuminate\Http\Request;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataAnggotaExport;
use App\Imports\DataAnggotaImport;

class DataAnggotaController extends Controller
{
    public function dataAnggota(Request $request)
    {
        if ($request->has('search')) {
            $dataAnggota = DataAnggota::where('nama', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $dataAnggota = DataAnggota::paginate(5);
        }
        return view('admin.admin-data-anggota', compact('dataAnggota'), [
            "title" => "Data Anggota"
        ]);
    }

    public function  tambahDataAnggota()
    {
        return view(
            'admin.tambah-data-anggota',
            ["title" => "Tambah Data Anggota"]
        );
    }

    public function insertDataAnggota(Request $request)
    {
        $dataAnggota = DataAnggota::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jeniskelamin' => $request->jeniskelamin,

            'kodedept' => $request->kodedept,
            'dept' => $request->dept,
            'tmk' => $request->tmk,
        ]);
        return redirect()->route('admin-data-anggota')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampilDataAnggota($id)
    {
        $ubah = DataAnggota::find($id);
        //dd($ubah);
        return view('admin.tampil-data-anggota', compact('ubah'), [
            "title" => "Ubah Data Anggota"
        ]);
    }

    public function ubahDataAnggota(Request $request, $id)
    {
        $ubah = DataAnggota::find($id);
        $ubah->update($request->all());
        return redirect()->route('admin-data-anggota')->with('success', 'Data Berhasil Di Ubah');
    }

    public function hapusDataAnggota($id)
    {
        $hapus = DataAnggota::find($id);
        $hapus->delete();
        return redirect()->route('admin-data-anggota')->with('success', 'Data Berhasil Di Hapus');
    }

    public function exportPDF()
    {
        $dataAnggota = DataAnggota::all();
        view()->share('dataAnggota', $dataAnggota);
        $pdf = PDF::loadview('admin.data-anggota-pdf');
        return $pdf->download('Data Anggota SBGTS-GSBI PT. VCI.pdf');
    }

    public function exportExcel() {
        return Excel::download(new DataAnggotaExport,'Data Anggota SBGTS-GSBI PT. VCI.xlsx');
    }

    public function importExcel(Request $request) {
        $data = $request->file('file');
        $namaFile = $data->getClientOriginalName();
        $data->move('DataAnggota', $namaFile);

        Excel::import(new DataAnggotaImport, \public_path('/DataAnggota/'.$namaFile));
        return \redirect()->back();
    }
}

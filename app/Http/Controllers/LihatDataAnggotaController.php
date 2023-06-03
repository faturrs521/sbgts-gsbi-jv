<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\DataAnggota;
use Illuminate\Http\Request;
use App\Exports\DataAnggotaExport;
use App\Imports\DataAnggotaImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class LihatDataAnggotaController extends Controller
{
    public function lihatDataAnggota(Request $request)
    {
        $dataAnggota = DataAnggota::all();
      if ($request->has('search')) {
        $dataAnggota = DataAnggota::where('kodedept', 'LIKE', '%' . $request->search . '%')->paginate(10);
        Session::put('halaman_url', request()->fullUrl());
    } else {
        $dataAnggota = DataAnggota::paginate(10);
        Session::put('halaman_url', request()->fullUrl());
    }

        return view('ketua.DataAnggota.ketua-data-anggota', compact('dataAnggota'), [
            "title" => "Lihat Data Anggota"
        ]);
    }

    public function exportPDF()
    {
        $dataAnggota = DataAnggota::all();
        view()->share('dataAnggota', $dataAnggota);
        $pdf = PDF::loadview('ketua.DataAnggota.data-anggota-pdf');
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
        return \redirect()->back()->with('success', 'Data Berhasil Di Import');
    }
}

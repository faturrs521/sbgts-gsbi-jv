<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\DataPengurus;
use App\Exports\DataAnggotaExport;
use App\Imports\DataAnggotaImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LihatDataPengurusController extends Controller
{
    public function lihatDataPengurus(Request $request)
    {
        $dataPengurus = DataPengurus::all();
      if ($request->has('search')) {
        $dataPengurus = DataPengurus::where('nama', 'LIKE', '%' . $request->search . '%')->paginate(10);
        Session::put('halaman_url', request()->fullUrl());
    } else {
        $dataPengurus = DataPengurus::paginate(10);
        Session::put('halaman_url', request()->fullUrl());
    }

        return view('ketua.ketua-data-pengurus', compact('dataPengurus'), [
            "title" => "Lihat Data Pengurus"
        ]);
    }

    public function exportPDF()
    {
        $dataPengurus = DataPengurus::all();
        view()->share('dataPengurus', $dataPengurus);
        $pdf = PDF::loadview('ketua.data-pengurus-pdf');
        return $pdf->download('Data Pengurus SBGTS-GSBI PT. VCI.pdf');
    }

    public function exportExcel() {
        return Excel::download(new DataPengurusExport,'Data Anggota SBGTS-GSBI PT. VCI.xlsx');
    }
}

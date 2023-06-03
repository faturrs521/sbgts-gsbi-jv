<?php

namespace App\Http\Controllers;

use App\Models\DataArtikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LihatDataArtikelController extends Controller
{
    public function lihatDataArtikel(Request $request) {
        $dataArtikel = DataArtikel::all();
        if ($request->has('search')) {
            $dataArtikel = DataArtikel::where('judul', 'LIKE', '%' . $request->search . '%')->paginate(6);
            Session::put('halaman_url', request()->fullUrl());
        } else {
            $dataArtikel = DataArtikel::paginate(6);
            Session::put('halaman_url', request()->fullUrl());
        }
        return view('ketua.DataArtikel.ketua-data-artikel', compact('dataArtikel'), [
            "title" => "Lihat Data Artikel"
        ]);
    }
}

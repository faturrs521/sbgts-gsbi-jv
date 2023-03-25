<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataArtikel;
use App\Models\DataKategori;

class LihatBeritaAcaraController extends Controller
{
    public function lihatBeritaAcara() {
        $artikels = DataArtikel::OrderBy('created_at','DESC',)->paginate(10);
        return view('universal.lihat-berita-acara', compact('artikels'), [
            "title" => "Lihat Berita Acara"
        ]);

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataArtikel;
use App\Models\DataKategori;

class LihatBeritaAcaraController extends Controller
{
    public function lihatBeritaAcara() {
        $artikels = DataArtikel::inRandomOrder()->OrderBy('id','DESC')->paginate(6);
        return view('universal.lihat-berita-acara', compact('artikels'), [
            "title" => "Lihat Berita Acara"
        ]);

    }

}

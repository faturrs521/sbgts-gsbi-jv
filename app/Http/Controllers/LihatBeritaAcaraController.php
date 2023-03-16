<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatBeritaAcaraController extends Controller
{
    public function lihatBeritaAcara() {
        return view('universal.lihat-berita-acara', [
            "title" => "Lihat Berita Acara"
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DataAnggota;
use App\Models\DataArtikel;
use App\Models\DataKategori;
use App\Models\DataPengurus;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function adminDashboard() {
        $dataAnggota = DataAnggota::count();
        $dataPengurus = DataPengurus::count();
        $dataKategori = DataKategori::count();
        $dataArtikel = DataArtikel::count();
        $users = User::where('role','user')->count();

        return view(
            'admin.admin-dashboard',compact('dataAnggota','dataPengurus','dataKategori','dataArtikel','users'),["title" => "Dashboard"]
        );
    }


    public function userDashboard() {
        return view(
            'user.user-dashboard',
            ["title" => "Dashboard"]
        );
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use PDF;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KTAController extends Controller
{
    public function KTA() {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            if($user) {
                return view('user.user-kta-digital', compact('user'), [
                    "title" => "KTA Digital"
                ]);
            }
        }
    }

    public function exportKTA() {

            $kta = User::all();
            view()->share('kta', $kta);
            $pdf = PDF::loadview('user.user-kta-pdf');
            return $pdf->download('KTA SBGTS-GSBI PT. VCI.pdf');
    }


    public function ketuaKTA() {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            if($user) {
                return view('ketua.ketua-kta-digital', compact('user'), [
                    "title" => "KTA Digital"
                ]);
            }
        }
    }
    public function ketuaExportKTA() {

        $kta = User::all();
        view()->share('kta', $kta);
        $pdf = PDF::loadview('ketua.ketua-kta-pdf');
        return $pdf->download('KTA SBGTS-GSBI PT. VCI.pdf');
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\DataArtikel;
use App\Models\DataKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\ContactMail;

class HomeController extends Controller
{
    public function home(){
        $artikels = DataArtikel::inRandomOrder()->OrderBy('id','DESC')->paginate(6);
        return view('universal.home', compact('artikels'), [
            "title" => "Home"
        ]);
        // $data = DB::table('data_artikels')->get();
        // return view('universal.home', [
        //     "title" =>"Home", 'data' => $data]);
    }

    // public function contact() {
    //     return view ('conadsa');
    // }

    public function kirimEmail(Request $request) {
        $details = [
            'nama' => $request->nama,
            'email' => $request->email,
            'kontak' => $request->kontak,
            'pesan' => $request->pesan,
        ];

        Mail::to('faturromans27@gmail.com')->send(new ContactMail($details));
        return back()->with('Sukses','Pesan Kamu Berhasil Terkirim!');
    }

}

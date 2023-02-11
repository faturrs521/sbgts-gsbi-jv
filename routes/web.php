<?php

use App\Http\Controllers\DataAnggotaController;
use App\Models\DataAnggota;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Universal
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/lihat-artikel', function () {
    return view('lihat-artikel', [
        "title" => "Lihat Artikel"
    ]);
});

Route::get('/program-kerja', function () {
    return view('program-kerja', [
        "title" => "Program Kerja"
    ]);
});


Route::get('/admin-dashboard', function () {
    return view('admin.admin-dashboard', [
        "title" => "Dashboard Admin"
    ]);
});

// Admin
Route::get('/data-anggota', [DataAnggotaController::class, 'dataAnggota'])->name('admin-data-anggota');

Route::get('/tambah-data-anggota', [DataAnggotaController::class, 'tambahDataAnggota'])->name('admin-tambah-data-anggota');
Route::post('/insert-data-anggota', [DataAnggotaController::class, 'insertDataAnggota'])->name('admin-insert-data-anggota');

Route::get('/tampil-data-anggota/{id}', [DataAnggotaController::class, 'tampilDataAnggota'])->name('admin-tampil-data-anggota');
Route::post('/ubah-data-anggota/{id}', [DataAnggotaController::class, 'ubahDataAnggota'])->name('admin-ubah-data-anggota');

Route::get('/hapus-data-anggota/{id}', [DataAnggotaController::class, 'hapusDataAnggota'])->name('admin-hapus-data-anggota');

//Export PDF
Route::get('/export-pdf', [DataAnggotaController::class, 'exportPDF'])->name('admin-export-pdf');

//Export Excel
Route::get('/export-excel', [DataAnggotaController::class, 'exportExcel'])->name('admin-export-excel');

//Import Excel
Route::post('/import-excel', [DataAnggotaController::class, 'importExcel'])->name('admin-import-excel');

<?php

use App\Models\User;
use App\Models\DataAnggota;
use App\Http\Middleware\HakAkse;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KTAController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataUsersController;
use App\Http\Controllers\DataAnggotaController;
use App\Http\Controllers\DataArtikelController;
use App\Http\Controllers\UbahProfileController;
use App\Http\Controllers\DataKategoriController;
use App\Http\Controllers\DataPengurusController;
use App\Http\Controllers\UbahPasswordController;
use App\Http\Controllers\AdminDashboardController;

use App\Http\Controllers\LihatBeritaAcaraController;
use App\Http\Controllers\LihatDataAnggotaController;
use App\Http\Controllers\LihatDataArtikelController;
use App\Http\Controllers\LihatDataPengurusController;

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
//Pengunjung
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/kirim-email', [HomeController::class, 'kirimEmail'])->name('kirim-email');

Route::get('/lihat-berita-acara', [LihatBeritaAcaraController::class, 'lihatBeritaAcara'])->name('lihat-berita-acara');
Route::get('/detail-data-artikel{id}/{slug}', [DataArtikelController::class, 'detailDataArtikel'])->name('admin-detail-data-artikel');
//Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login-proses', [LoginController::class, 'loginProses'])->name('login-proses');
//Register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-user', [LoginController::class, 'registerUser'])->name('register-user');
//Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


//Route Group Middleware Untuk Admin
Route::group(['middleware' => ['auth','hakakses:admin']], function(){
// Admin Dashboard
Route::get('/admin-dashboard', [AdminDashboardController::class, 'adminDashboard'])->name('admin-dashboard');
// Admin Kelola Data Anggota
Route::get('/data-anggota', [DataAnggotaController::class, 'dataAnggota'])->name('admin-data-anggota');
Route::get('/tambah-data-anggota', [DataAnggotaController::class, 'tambahDataAnggota'])->name('admin-tambah-data-anggota');
Route::post('/insert-data-anggota', [DataAnggotaController::class, 'insertDataAnggota'])->name('admin-insert-data-anggota');
Route::get('/tampil-data-anggota/{id}', [DataAnggotaController::class, 'tampilDataAnggota'])->name('admin-tampil-data-anggota');
Route::post('/ubah-data-anggota/{id}', [DataAnggotaController::class, 'ubahDataAnggota'])->name('admin-ubah-data-anggota');
Route::get('/hapus-data-anggota/{id}', [DataAnggotaController::class, 'hapusDataAnggota'])->name('admin-hapus-data-anggota');
//Export PDF
//Route::get('/export-pdf=data-anggota', [DataAnggotaController::class, 'exportPDF'])->name('admin-export-pdf-data-anggota');
//Export Excel
Route::get('/export-excel', [DataAnggotaController::class, 'exportExcel'])->name('admin-export-excel-data-anggota');
//Import Excel
Route::post('/import-excel-data-anggota', [DataAnggotaController::class, 'importExcel'])->name('admin-import-excel-data-anggota');
//Admin Kelola Data Pengurus
Route::get('/data-pengurus', [DataPengurusController::class, 'dataPengurus'])->name('admin-data-pengurus');
Route::get('/tambah-data-pengurus', [DataPengurusController::class, 'tambahDataPengurus'])->name('admin-tambah-data-pengurus');
Route::post('/insert-data-pengurus', [DataPengurusController::class, 'insertDataPengurus'])->name('admin-insert-data-pengurus');
Route::get('/tampil-data-pengurus/{id}', [DataPengurusController::class, 'tampilDataPengurus'])->name('admin-tampil-data-pengurus');
Route::post('/ubah-data-pengurus/{id}', [DataPengurusController::class, 'ubahDataPengurus'])->name('admin-ubah-data-pengurus');
Route::get('/hapus-data-pengurus/{id}', [DataPengurusController::class, 'hapusDataPengurus'])->name('admin-hapus-data-pengurus');
//Export PDF
Route::get('/export-pdf-data-pengurus', [DataPengurusController::class, 'exportPDF'])->name('admin-export-pdf-data-pengurus');
//Export Excel
Route::get('/export-excel-data-pengurus', [DataPengurusController::class, 'exportExcel'])->name('admin-export-excel-data-pengurus');
//Import Excel
//Route::post('/import-excel-data-pengurus', [DataPengurusController::class, 'importExcel'])->name('admin-import-excel-data-pengurus');
//Admin Kelola Data Artikel (Berita Acara)
Route::get('/data-artikel', [DataArtikelController::class, 'dataArtikel'])->name('admin-data-artikel');
Route::get('/tambah-data-artikel', [DataArtikelController::class, 'tambahDataArtikel'])->name('admin-tambah-data-artikel');
Route::post('/insert-data-artikel', [DataArtikelController::class, 'insertDataArtikel'])->name('admin-insert-data-artikel');
Route::get('/tampil-data-artikel/{id}', [DataArtikelController::class, 'tampilDataArtikel'])->name('admin-tampil-data-artikel');
Route::post('/ubah-data-artikel/{id}', [DataArtikelController::class, 'ubahDataArtikel'])->name('admin-ubah-data-artikel');
Route::get('/hapus-data-artikel/{id}', [DataArtikelController::class, 'hapusDataArtikel'])->name('admin-hapus-data-artikel');
//Admin Kelola Data Kategori
Route::get('/data-kategori', [DataKategoriController::class, 'dataKategori'])->name('admin-data-kategori');
Route::get('/tambah-data-kategori', [DataKategoriController::class, 'tambahDataKategori'])->name('admin-tambah-data-kategori');
Route::post('/insert-data-kategori', [DataKategoriController::class, 'insertDataKategori'])->name('admin-insert-data-kategori');
Route::get('/tampil-data-kategori/{id}', [DataKategoriController::class, 'tampilDataKategori'])->name('admin-tampil-data-kategori');
Route::post('/ubah-data-kategori/{id}', [DataKategoriController::class, 'ubahDataKategori'])->name('admin-ubah-data-kategori');
Route::get('/hapus-data-kategori/{id}', [DataKategoriController::class, 'hapusDataKategori'])->name('admin-hapus-data-kategori');
});


//Route Group Middleware Untuk User
Route::group(['middleware' => ['auth','hakakses:user']], function(){
// User
Route::get('/dashboard', [AdminDashboardController::class, 'userDashboard'])->name('user-dashboard');
//User Ubah Profile
Route::get('/tampil-ubah-profile', [UbahProfileController::class, 'tampilUbahProfile'])->name('user-tampil-ubah-profile');
Route::post('/ubah-profile', [UbahProfileController::class, 'ubahProfile'])->name('user-ubah-profile');
//Export PDF User
Route::get('/kta-digital', [KTAController::class, 'KTA'])->name('user-kta');
Route::get('/export-pdf-kta', [KTAController::class, 'exportKTA'])->name('user-export-pdf-kta');
//User Ubah Password
Route::get('/ubah-password', [UbahPasswordController::class, 'ubahPassword'])->name('user-ubah-password');
Route::post('/update-password', [UbahPasswordController::class, 'updatePassword'])->name('user-update-password');
});


//Route Group Middleware Untuk Ketua
Route::group(['middleware' => ['auth','hakakses:ketua']], function(){
Route::get('/ketua-dashboard', [AdminDashboardController::class, 'adminDashboard'])->name('admin-dashboard');
// Ketua Lihat Data Anggota
Route::get('/lihat-data-anggota', [LihatDataAnggotaController::class, 'lihatDataAnggota'])->name('ketua-data-anggota');
//Ketua Export PDF
Route::get('/ketua-export-pdf-data-anggota', [LihatDataAnggotaController::class, 'exportPDF'])->name('ketua-export-pdf-data-anggota');
//Export Excel
Route::get('/ketua-export-excel-data-anggota', [DataAnggotaController::class, 'exportExcel'])->name('ketua-export-excel-data-anggota');
//Import Excel
Route::post('/ketua-import-excel-data-anggota', [DataAnggotaController::class, 'importExcel'])->name('ketua-import-excel-data-anggota');
//Admin Lihat Data Pengurus
Route::get('/lihat-data-pengurus', [LihatDataPengurusController::class, 'lihatDataPengurus'])->name('ketua-data-pengurus');
//Ketua Export PDF
Route::get('/ketua-export-pdf-data-pengurus', [LihatDataPengurusController::class, 'exportPDF'])->name('ketua-export-pdf-data-pengurus');
//Export Excel
Route::get('/ketua-export-excel', [DataPengurusController::class, 'exportExcel'])->name('ketua-export-excel-data-pengurus');

Route::get('/lihat-data-artikel', [LihatDataArtikelController::class, 'lihatDataArtikel'])->name('ketua-data-artikel');


//Ketua Kelola Data Users
Route::get('/data-users', [DataUsersController::class, 'dataUsers'])->name('data-users');
Route::get('/tampil-data-users/{id}', [DataUsersController::class, 'tampilUsers'])->name('ketua-tampil-data-users');
Route::post('/ubah-data-users/{id}', [DataUsersController::class, 'ubahDataUsers'])->name('ketua-ubah-users');
Route::get('/hapus-data-users/{id}', [DataUsersController::class, 'hapusDataUsers'])->name('ketua-hapus-data-users');
//User Ubah Profile
Route::get('/ketua-tampil-ubah-profile', [UbahProfileController::class, 'ketuaTampilUbahProfile'])->name('ketua-tampil-ubah-profile');
Route::post('/ketua-ubah-profile', [UbahProfileController::class, 'ketuaUbahProfile'])->name('ketua-ubah-profile');
//Ketua Ubah Password
Route::get('/ketua-ubah-password', [UbahPasswordController::class, 'ketuaUbahPassword'])->name('ketua-ubah-password');
Route::post('/ketua-update-password', [UbahPasswordController::class, 'ketuaUpdatePassword'])->name('ketua-update-password');
//Ketua Export KTA
Route::get('/ketua-kta-digital', [KTAController::class, 'ketuaKTA'])->name('ketua-kta');
Route::get('/ketua-export-pdf-kta', [KTAController::class, 'ketuaExportKTA'])->name('ketua-export-pdf-kta');
});

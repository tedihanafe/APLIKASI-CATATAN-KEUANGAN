<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});






Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // 1. MENU KATEGORI
    Route::get('/kategori', [HomeController::class, 'kategori']);
    // input kategori
    Route::get('/kategori/tambah', [HomeController::class, 'kategori_tambah']);       //input kategori
    Route::post('/kategori/aksi', [HomeController::class, 'kategori_aksi']);          //input aksi kategorinya
    // edite kategori
    Route::get('/kategori/edit/{id}', [HomeController::class, 'kategori_edit']);      //edite
    Route::put('/kategori/update/{id}', [HomeController::class, 'kategori_update']);  //setelah edite update
    // hapus kategori
    Route::get('/kategori/hapus/{id}', [HomeController::class, 'kategori_hapus']);



    // 2. MENU DATA TRANSAKSI
    Route::get('/transaksi', [HomeController::class, 'transaksi']);
    // input data transkasi
    Route::get('/transaksi/tambah', [HomeController::class, 'transaksi_tambah']);
    // aksi input transaksi - simpan
    Route::post('/transaksi/aksi', [HomeController::class, 'transaksi_aksi']);
    // edite data transakasi
    Route::get('/transaksi/edit/{id}', [HomeController::class, 'transaksi_edit']);
    // update data transakasi
    Route::put('/transaksi/update/{id}', [HomeController::class, 'transaksi_update']);
    // hapus data transaksi
    Route::get('/transaksi/hapus/{id}', [HomeController::class, 'transaksi_hapus']);

    // mencari data
    Route::get('/transaksi/cari', [HomeController::class, 'transaksi_cari']);



    // 3. LAPORAN KEUANGAN
    Route::get('/laporan', [HomeController::class, 'laporan']);
    //laporan hasil keuangan - tampilkan
    Route::get('/laporan/hasil', [HomeController::class, 'laporan_hasil']);

    // print hasil laporan keuangan
    Route::get('/laporan/print', [HomeController::class, 'laporan_print']);


    // laporan excel
    Route::get('/laporan/excel', [HomeController::class, 'laporan_excel']);
});



// 4. GANTI PASWORD
Route::get('/ganti_password', [HomeController::class, 'ganti_password']);
Route::post('/ganti_password/aksi', [HomeController::class, 'ganti_password_aksi']);
// Tambahkan rute login
Auth::routes();
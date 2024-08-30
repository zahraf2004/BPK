<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PegawaiController;

// Route untuk menampilkan form login
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Route untuk memproses login
Route::post('/', [AuthController::class, 'login']);

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard'); 
})->middleware(['auth'])->name('dashboard');

// Route Pegawai
Route::get('/tbhDataMasterPegawai', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/simpan-pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/DataMasterPegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy'); // Route untuk menghapus data pegawai

// Route untuk menampilkan form edit pegawai
Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');

// Route untuk mengupdate data pegawai
Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');


// Route lain
Route::view('/hukum', 'hukum');
Route::view('/sdm', 'sdm');
Route::view('/umum', 'umum');
Route::view('/humas', 'humas');
Route::view('/keuangan', 'keuangan');
Route::view('/DataMasterSurat', 'DMsurat');
Route::view('/DataMasterTahun', 'DMtahun');
Route::view('/tbhDataMasterSurat', 'tbhDMsurat');
Route::view('/tbhDataMasterTahun', 'tbhDMtahun');
Route::view('/tbhsurathukum', 'tbhsuratHukum');
Route::view('/tbhsurathumas', 'tbhsuratHumas');
Route::view('/tbhsuratKeuangan', 'tbhsuratKeu');
Route::view('/tbhsuratSDM', 'tbhsuratSDM');
Route::view('/tbhsuratumum', 'tbhsuratUmum');
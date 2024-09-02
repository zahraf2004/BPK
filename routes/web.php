<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JenisSuratController;
use App\Http\Controllers\InputSuratHukumController;
use App\Http\Controllers\InputSuratUmumController;
use App\Http\Controllers\TahunSuratController;

// Route tampil login ya broo 
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Route ini biar bisa login kak
Route::post('/', [AuthController::class, 'login']);


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



// Route untuk data master jenis surat
Route::get('/tbhDataMasterSurat', [JenisSuratController::class, 'create'])->name('JenisSurat.create');
Route::post('/simpan-JenisSurat', [JenisSuratController::class, 'store'])->name('JenisSurat.store');
Route::get('/DataMasterSurat', [JenisSuratController::class, 'index'])->name('jenis_surat.index');
Route::delete('/JenisSurat/{id}', [JenisSuratController::class, 'destroy'])->name('jenis_surat.destroy'); // Route untuk menghapus data
Route::resource('jenis_surat', JenisSuratController::class);

//route untuk data master tahun
Route::get('/tbhDataMasterTahun', [TahunSuratController::class, 'create'])->name('tahun_surat.create');
Route::post('/simpan-TahunSurat', [TahunSuratController::class, 'store'])->name('tahun_surat.store');
Route::get('/DataMasterTahun', [TahunSuratController::class, 'index'])->name('tahun_surat.index');
Route::delete('/Tahun_Surat/{id}', [TahunSuratController::class, 'destroy'])->name('tahun_surat.destroy'); // Route untuk menghapus data
Route::resource('tahun_surat', TahunSuratController::class);

//Route untuk surat hukum
Route::get('/hukum', [InputSuratHukumController::class, 'index']);
Route::get('/tbhsurathukum', [InputSuratHukumController::class, 'create']);
Route::post('/tbhsurathukum', [InputSuratHukumController::class, 'store']);
Route::get('/tbhsurathukum/edit/{id}', [InputSuratHukumController::class, 'edit']);
Route::post('/tbhsurathukum/update/{id}', [InputSuratHukumController::class, 'update']);
Route::delete('/tbhsurathukum/delete/{id}', [InputSuratHukumController::class, 'destroy']);

//Route untuk surat umum
Route::get('/umum', [InputSuratUmumController::class, 'index']);
Route::get('/tbhsuratumum', [InputSuratUmumController::class, 'create']);
Route::post('/tbhsuratumum', [InputSuratUmumController::class, 'store']);
Route::get('/tbhsuratumum/edit/{id}', [InputSuratUmumController::class, 'edit']);
Route::post('/tbhsuratumum/update/{id}', [InputSuratUmumController::class, 'update']);
Route::delete('/tbhsuratumum/delete/{id}', [InputSuratUmumController::class, 'destroy']);

Route::view('/sdm', 'sdm');
Route::view('/umum', 'umum');
Route::view('/humas', 'humas');
Route::view('/keuangan', 'keuangan');
// Route::view('/DataMasterSurat', 'DMsurat');
// Route::view('/DataMasterTahun', 'DMtahun');
Route::view('/tbhDataMasterSurat', 'tbhDMsurat');
Route::view('/tbhDataMasterTahun', 'tbhDMtahun');
Route::view('/tbhsurathumas', 'tbhsuratHumas');
Route::view('/tbhsuratKeuangan', 'tbhsuratKeu');
Route::view('/tbhsuratSDM', 'tbhsuratSDM');
//Route::view('/tbhsuratumum', 'tbhsuratUmum');
<?php

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

use App\Http\Controllers\AuthController;

// Route untuk menampilkan form login
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Route untuk memproses login
Route::post('/', [AuthController::class, 'login']);

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard'); 
})->middleware(['auth'])->name('dashboard');



use App\Http\Controllers\PegawaiController;
//route menampilkan form tambah pegawai
Route::get('/tbhDataMasterPegawai', [PegawaiController::class, 'create'])->name('pegawai.create');

//route untuk menyimpan data pegawai
Route::post('/simpan-pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');

Route::get('/DataMasterPegawai', [PegawaiController::class, 'index'])->name('DMpegawai');




Route::get('/hukum', function(){
    return view('hukum');
});

Route::get('/sdm', function(){
    return view('sdm');
});

Route::get('/umum', function(){
    return view('umum');
});

Route::get('/humas', function(){
    return view('humas');
});

Route::get('/keuangan', function(){
    return view('keuangan');
});

Route::get('/DataMasterPegawai', function(){
    return view('DMpegawai');
});

Route::get('/DataMasterSurat', function(){
    return view('DMsurat');
});

Route::get('/DataMasterTahun', function(){
    return view('DMtahun');
});

Route::get('/tbhDataMasterPegawai', function(){
    return view('tbhDMpegawai');
});

Route::get('/tbhDataMasterSurat', function(){
    return view('tbhDMsurat');
});

Route::get('/tbhDataMasterTahun', function(){
    return view('tbhDMtahun');
});

Route::get('/tbhsurathukum', function(){
    return view('tbhsuratHukum');
});

Route::get('/tbhsurathumas', function(){
    return view('tbhsuratHumas');
});

Route::get('/tbhsuratKeuangan', function(){
    return view('tbhsuratKeu');
});

Route::get('/tbhsuratSDM', function(){
    return view('tbhsuratSDM');
});

Route::get('/tbhsuratumum', function(){
    return view('tbhsuratUmum');
});
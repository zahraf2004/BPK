<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    // Menampilkan form tambah pegawai
    public function store(Request $request)
{
    // Debugging: Tampilkan semua data yang dikirim dari form
    dd($request->all());

    // Validasi data input
    $request->validate([
        'nama' => 'required|string|max:100',
        'nip' => 'required|string|max:25|unique:pegawai,nip',
        'jabatan' => 'nullable|string|max:50',
        'unit_kerja' => 'nullable|string|max:50',
        'pangkat' => 'nullable|string|max:50',
        'email' => 'required|email|max:100|unique:pegawai,email',
        'hak_akses' => 'required|in:admin,pumk,pegawai,kasubag',
        'status' => 'required|in:aktif,non-aktif',
    ]);

    // Simpan data ke tabel pegawai
    Pegawai::create([
        'nama' => $request->nama,
        'nip' => $request->nip, 
        'jabatan' => $request->jabatan,
        'unit_kerja' => $request->unit_kerja,
        'pangkat' => $request->pangkat,
        'email' => $request->email,
        'hak_akses' => $request->hak_akses,
        'status' => $request->status,
    ]);

    // Redirect ke halaman daftar pegawai dengan pesan sukses
    return redirect()->route('DMpegawai')->with('success', 'Pegawai berhasil ditambahkan');
}
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    // Menampilkan form tambah pegawai
    public function create()
    {
        return view('tbhDMpegawai'); // Ganti ini dengan nama file Blade untuk form tambah pegawai
    }

    public function store(Request $request)
    {
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
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    public function index()
    {
        // Ambil semua data pegawai dari database
        $pegawai = Pegawai::all();

        // Kirim data pegawai ke view 'DMpegawai'
        return view('DMpegawai', compact('pegawai'));
    }

    // Fungsi untuk menampilkan form edit pegawai
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id); // Ambil data pegawai berdasarkan id

        // Kirim data pegawai ke view form edit pegawai
        return view('tbhDMpegawai', compact('pegawai')); // Ganti dengan nama view yang Anda pakai
    }

    // Fungsi untuk mengupdate data pegawai
    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::findOrFail($id); // Cari pegawai berdasarkan id

        // Update data pegawai
        $pegawai->update([
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
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diupdate');
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id); // Cari pegawai berdasarkan id
        $pegawai->delete(); // Hapus pegawai dari database

        // Redirect ke halaman daftar pegawai dengan pesan sukses
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus');
    }
}
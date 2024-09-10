<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\User;

class PegawaiController extends Controller
{
    // Menampilkan form tambah pegawai
    public function create(Request $request)
    {
        
        if ($request->user()->cannot('view', User::class)) {
            abort(403);
        }
        return view('tbhDMpegawai'); // Ganti ini dengan nama file Blade untuk form tambah pegawai
    }

    public function store(Request $request)
    { 
        
        if ($request->user()->cannot('view', User::class)) {
            abort(403);
        }
        $validate = $request->validate([
            'name' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
            'unit_kerja' => 'required',
            'pangkat' => 'required',
            'email' => 'required|email:dns',
            'hak_akses' => 'required',
            'status' => 'required',
        ]);
        $validateUser = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'hak_akses' => 'required',
            'status' => 'required',
        ]);
       
        // Simpan data ke tabel pegawai
        $pegawai = Pegawai::create($validate);
        $validateUser['id_pegawai'] = $pegawai->id;
        $validateUser['password'] = bcrypt($validate['nip']);
       
        User::create($validateUser);

        // Redirect ke halaman daftar pegawai dengan pesan sukses
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    public function index(Request $request)
    {
        
        if ($request->user()->cannot('view', User::class)) {
            abort(403);
        }
        // Ambil semua data pegawai dari database
        $pegawai = Pegawai::all();

        // Kirim data pegawai ke view 'DMpegawai'
        return view('DMpegawai', compact('pegawai'));
    }

    // Fungsi untuk menampilkan form edit pegawai
    public function edit($id, Request $request)
    {
        
        if ($request->user()->cannot('view', User::class)) {
            abort(403);
        }
        $pegawai = Pegawai::findOrFail($id); // Ambil data pegawai berdasarkan id

        // Kirim data pegawai ke view form edit pegawai
        return view('tbhDMpegawai2', compact('pegawai')); 
    }

    // Fungsi untuk mengupdate data pegawai
    public function update(Request $request, $id)
    {
        
        if ($request->user()->cannot('view', User::class)) {
            abort(403);
        }
        $validate = $request->validate([
            'name' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
            'unit_kerja' => 'required',
            'pangkat' => 'required',
            'email' => 'required|email:dns',
            'hak_akses' => 'required',
            'status' => 'required',
        ]);
        $validateUser = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'hak_akses' => 'required',
            'status' => 'required',
        ]);
        $pegawai = Pegawai::where('id',$id)->update($validate);
       
        $validateUser['password'] = bcrypt($validate['nip']);
       
        User::where('id_pegawai', $id)->update($validateUser);

        // Redirect ke halaman daftar pegawai dengan pesan sukses
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diupdate');
    }

    public function destroy($id, Request $request)
    {
        
        if ($request->user()->cannot('view', User::class)) {
            abort(403);
        }
        $pegawai = Pegawai::findOrFail($id); // mencari data pegawai
        $pegawai->delete(); 
        User::where('id_pegawai', $id)->delete();


        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus');
    }
}
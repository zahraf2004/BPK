<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InputSuratKeu;
use App\Models\JenisSurat;
use App\Models\TahunSurat;

class InputSuratKeuController extends Controller
{
    public function create()
    {
        return view('tbhSuratKeu', [
            'jenis_surat'=> JenisSurat::all(),
            'tahun_surat'=> TahunSurat::all()
    ]); 
    }

    public function index(){
        return view('keuangan', ['surat_keuangan'=> InputSuratKeu::all()]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'namesurat' => 'required',
            'Nomor' => 'required',
            'id_jenis_surat' => 'required',
            'tgl' => 'required',
            'id_tahun_surat' => 'required',
            'keterangan' => 'required',
            'nama_file' => 'required',
        ]);
        
       $dokumenName = time() . '-' . $request->nama_file->getClientOriginalName();
       $validate['nama_file'] = $dokumenName;
       $request->nama_file->storeAs('/public' , $dokumenName);
        InputSuratKeu::create($validate);
        
        return redirect()->route('keuangan')->with('success', 'Surat berhasil ditambahkan');
    }

    public function edit($id)
    {
        $surat_keuangan = InputSuratKeu::find($id); // Ambil data berdasarkan id
        // Kirim data ke view form edit
        return view('tbhSuratKeuEdit', [
            'surat_keuangan' => $surat_keuangan,
            'jenis_surat'=> JenisSurat::all(),
            'tahun_surat'=> TahunSurat::all()
    ]); 
    }

    // Fungsi untuk mengupdate data 
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'namesurat' => 'required',
            'Nomor' => 'required',
            'id_jenis_surat' => 'required',
            'tgl' => 'required',
            'id_tahun_surat' => 'required',
            'keterangan' => 'required',
            'nama_file' => 'required',
        ]);
        
       $dokumenName = time() . '-' . $request->nama_file->getClientOriginalName();
       $validate['nama_file'] = $dokumenName;
       $request->nama_file->storeAs('/public' , $dokumenName);
        InputSuratKeu::where('id', $id)->update($validate);
       

        // Redirect ke halaman daftar  dengan pesan sukses
        return redirect()->route('keuangan')->with('success', 'surat berhasil diedit');
    }

    public function destroy($id)
    {
        InputSuratKeu::where('id', $id)->delete();

        return redirect()->route('keuangan')->with('success', 'Surat berhasil dihapus');
    }
}
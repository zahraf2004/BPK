<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InputSuratHukum;
use App\Models\JenisSurat;
use App\Models\TahunSurat;



class InputSuratHukumController extends Controller
{
    public function create()
    {
        return view('tbhsuratHukum', [
            'jenis_surat'=> JenisSurat::all(),
            'tahun_surat'=> TahunSurat::all()
    ]); // Ganti ini dengan nama file Blade untuk form tambah pegawai
    }
    public function index(){
        return view('hukum', ['surat_hukum'=> InputSuratHukum::all()]);
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
        InputSuratHukum::create($validate);
       

        // Redirect ke halaman daftar pegawai dengan pesan sukses
        return redirect()->route('hukum.index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    public function edit($id)
    {
        $surat_hukum = InputSuratHukum::find($id); // Ambil data pegawai berdasarkan id

        // Kirim data pegawai ke view form edit pegawai
        return view('tbhsuratHukumEdit', [
            'surat_hukum' => $surat_hukum,
            'jenis_surat'=> JenisSurat::all(),
            'tahun_surat'=> TahunSurat::all()
    ]); 
    }

    // Fungsi untuk mengupdate data pegawai
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
        InputSuratHukum::where('id', $id)->update($validate);
       

        // Redirect ke halaman daftar pegawai dengan pesan sukses
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    public function destroy($id)
    {
        InputSuratHukum::where('id', $id)->delete();

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus');
    }
}
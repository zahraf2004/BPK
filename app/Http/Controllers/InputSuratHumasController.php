<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InputSuratHumas;
use App\Models\JenisSurat;
use App\Models\TahunSurat;

class InputSuratHumasController extends Controller
{
    public function create()
    {
        return view('tbhSuratHumas', [
            'jenis_surat'=> JenisSurat::all(),
            'tahun_surat'=> TahunSurat::all()
    ]); 
    }
    public function index(){
        return view('humas', ['surat_humas'=> InputSuratHumas::all()]);
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
        InputSuratHumas::create($validate);
        
        return redirect()->route('humas')->with('success', 'Surat berhasil ditambahkan');
    }
    public function edit($id)
    {
        $surat_humas = InputSuratHumas::find($id); // Ambil data berdasarkan id
        // Kirim data ke view form edit
        return view('tbhSuratHumasEdit', [
            'surat_humas' => $surat_humas,
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
        InputSuratHumas::where('id', $id)->update($validate);
       

        // Redirect ke halaman daftar  dengan pesan sukses
        return redirect()->route('humas')->with('success', 'surat berhasil diedit');
    }

    public function destroy($id)
    {
        InputSuratHumas::where('id', $id)->delete();

        return redirect()->route('humas')->with('success', 'Surat berhasil dihapus');
    }
}
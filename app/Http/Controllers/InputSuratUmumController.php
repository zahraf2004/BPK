<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InputSuratUmum;
use App\Models\JenisSurat;
use App\Models\TahunSurat;


class InputSuratUmumController extends Controller
{
    //
    public function create()
    {
        return view('tbhsuratUmum', [
            'jenis_surat'=> JenisSurat::all(),
            'tahun_surat'=> TahunSurat::all()
    ]); 
    }
    
    public function index(Request $request)
    {
        $jenis_surat = JenisSurat::all();
        $tahun_surat = TahunSurat::all();

        $id_jenis_surat = $request->get('id_jenis_surat');
        $id_tahun_surat = $request->get('id_tahun_surat');

        
        $query = InputSuratUmum::query();

        if ($id_jenis_surat) {
            $query->where('id_jenis_surat', $id_jenis_surat);
        }

        if ($id_tahun_surat) {
            $query->where('id_tahun_surat', $id_tahun_surat);
        }

        $surat_umum = $query->get();
        // Urutkan berdasarkan kolom tgl secara ascending
        $surat_hukum = $query->orderBy('tgl', 'asc')->get(); 
        
        return view('umum', [
            'surat_umum' => $surat_umum,
            'jenis_surat' => $jenis_surat,
            'tahun_surat' => $tahun_surat
        ]);
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
        InputSuratUmum::create($validate);
        
        return redirect()->route('umum')->with('success', 'Surat berhasil ditambahkan');
    }

    public function edit($id)
    {
        $surat_umum = InputSuratUmum::find($id); // Ambil data berdasarkan id
        // Kirim data ke view form edit
        return view('tbhsuratUmumEdit', [
            'surat_umum' => $surat_umum,
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
        InputSuratUmum::where('id', $id)->update($validate);
       

        // Redirect ke halaman daftar  dengan pesan sukses
        return redirect()->route('umum')->with('success', 'surat berhasil diedit');
    }

    public function destroy($id)
    {
        InputSuratUmum::where('id', $id)->delete();

        return redirect()->route('umum')->with('success', 'Surat berhasil dihapus');
    }
}
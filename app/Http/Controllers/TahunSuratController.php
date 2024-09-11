<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TahunSurat;
use App\Models\InputSuratHukum;
use App\Models\InputSuratHumas;
use App\Models\InputSuratUmum;
use App\Models\InputSuratKeu;
use App\Models\InputSuratSDM;

class TahunSuratController extends Controller
{
     //
     public function create()
     {
         return view('tbhDMtahun'); 
     }
 
     public function store(Request $request)
     {
         TahunSurat::create([
             'tahun' => $request->tahun,
             'Keterangan' => $request->Keterangan,
             
         ]);
 
         return redirect()->route('tahun_surat.index')->with('success', 'Jenis Surat berhasil ditambahkan');
     }
 
     public function index()
     {
         $tahun_surat = TahunSurat::all();
         return view('DMtahun', compact("tahun_surat"));
     }
     public function edit($id)
     {
         $tahun_surat = TahunSurat::findOrFail($id); // Ambil data surat berdasarkan id
 
         
         return view('tbhDMtahunEdit', compact('tahun_surat')); 
     }
 
     public function update(Request $request, $id)
     {
         $validate=$request->validate([
            'tahun' => 'required',
            'Keterangan' => 'required',
         ]);
 
         $tahun_surat = TahunSurat::where('id',$id)->update($validate);
         return redirect()->route('tahun_surat.index')->with('success', 'Jenis Surat berhasil diupdate');
     }
 
     public function destroy($id)
     {
        $tahunSurat = TahunSurat::find($id);

        // Cek apakah ada surat yang menggunakan tahun ini
        $usedInSurat = InputSuratHukum::where('id_tahun_surat', $id)->exists() ||
                        InputSuratHumas::where('id_tahun_surat', $id)->exists() ||
                        InputSuratUmum::where('id_tahun_surat', $id)->exists() ||
                        InputSuratKeu::where('id_tahun_surat', $id)->exists() ||
                        InputSuratSDM::where('id_tahun_surat', $id)->exists();
    
        if ($usedInSurat) {
            return redirect()->back()->with('error', 'Masih ada surat yang menggunakan tahun ini. Silakan hapus atau edit surat tersebut terlebih dahulu.');
        }
    
        // Jika tidak ada surat yang terhubung, baru hapus TahunSurat
        $tahunSurat->delete();
    
        return redirect()->back()->with('success', 'Tahun surat berhasil dihapus.');
     }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TahunSurat;

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
         $tahun_surat = TahunSurat::findOrFail($id); 
         $tahun_surat->delete(); 
 
         return redirect()->route('tahun_surat.index')->with('success', 'Jenis Surat berhasil dihapus');
     }
}
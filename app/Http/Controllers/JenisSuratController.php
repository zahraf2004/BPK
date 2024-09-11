<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisSurat;
use App\Models\InputSuratHukum;
use App\Models\InputSuratHumas;
use App\Models\InputSuratUmum;
use App\Models\InputSuratKeu;
use App\Models\InputSuratSDM;

class JenisSuratController extends Controller
{
    //
    public function create()
    {
        return view('tbhDMsurat'); 
    }

    public function store(Request $request)
    {
        JenisSurat::create([
            'JSurat' => $request->JSurat,
            'keterangan' => $request->keterangan,
            
        ]);

        return redirect()->route('jenis_surat.index')->with('success', 'Jenis Surat berhasil ditambahkan');
    }

    public function index()
    {
        $jenis_surat = JenisSurat::all();
        return view('DMsurat', compact("jenis_surat"));
    }
    public function edit($id)
    {
        $jenis_surat = JenisSurat::findOrFail($id); // Ambil data surat berdasarkan id

        
        return view('tbhDMsuratEdit', compact('jenis_surat')); 
    }

    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'JSurat' => 'required',
            'keterangan' => 'required',
        ]);
        $jenis_surat = JenisSurat::where('id',$id)->update($validate);
        return redirect()->route('jenis_surat.index')->with('success', 'Jenis Surat berhasil diupdate');
    }

    public function destroy($id)
    {
        $jenisSurat = JenisSurat::find($id);

        // Cek apakah ada surat yang masih menggunakan jenis surat ini
        $usedInSurat = InputSuratHukum::where('id_jenis_surat', $id)->exists()||
                        InputSuratHumas::where('id_jenis_surat', $id)->exists() ||
                        InputSuratUmum::where('id_jenis_surat', $id)->exists() ||
                        InputSuratKeu::where('id_jenis_surat', $id)->exists() ||
                        InputSuratSDM::where('id_jenis_surat', $id)->exists();
    
        if ($usedInSurat) {
            return redirect()->back()->with('error', 'Masih ada surat yang menggunakan jenis ini. Silakan hapus atau edit surat tersebut terlebih dahulu.');
        }
    
        // Jika tidak ada surat yang menggunakan, baru hapus jenis surat
        $jenisSurat->delete();
        
        return redirect()->back()->with('success', 'Jenis Surat berhasil dihapus');
    }
}
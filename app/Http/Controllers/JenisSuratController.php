<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisSurat;

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
            'keterangan' => $request->Keterangan,
            
        ]);

        return redirect()->route('jenis_surat.index')->with('success', 'Jenis Surat berhasil ditambahkan');
    }

    public function index()
    {
        $jenis_surat = JenisSurat::all();
        // dd($jenis_surat); 
        return view('DMsurat', compact("jenis_surat"));
    }
    public function edit($id)
    {
        $jenis_surat = JenisSurat::findOrFail($id); // Ambil data surat berdasarkan id

        
        return view('tbhDMsurat', compact('jenis_surat')); 
    }

    public function update(Request $request, $id)
    {
        $jenis_surat = JenisSurat::findOrFail($id);

        $jenis_surat->update([
            'JSurat' => $request->nama,
            'keterangan' => $request->Keterangan,
        ]);

        return redirect()->route('jenis_surat.index')->with('success', 'Jenis Surat berhasil diupdate');
    }

    public function destroy($id)
    {
        $jenis_surat = JenisSurat::findOrFail($id); 
        $jenis_surat->delete(); 

        return redirect()->route('jenis_surat.index')->with('success', 'Jenis Surat berhasil dihapus');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InputSuratSDM;
use App\Models\JenisSurat;
use App\Models\TahunSurat;

class InputSuratSDMController extends Controller
{
    //
    public function create()
    {
        return view('tbhsuratSDM',[
            'jenis_surat' =>JenisSurat::all(),
            'tahun_surat' => TahunSurat::all(),
        ]); 
    }

    public function index(){
        return view('sdm', ['surat_sdm'=> InputSuratSDM::all()]);
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
        InputSuratSDM::create($validate);
        
        return redirect()->route('sdm')->with('success', 'Surat berhasil ditambahkan');
    }
    
    public function edit ($id)
    {
        $surat_sdm = InputSuratSDM::find($id);
        return view('tbhsuratSDMEdit', [
           'surat_sdm' => $surat_sdm,
           'jenis_surat' => JenisSurat::all(),
           'tahun_surat' => TahunSurat::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate ([
           'namesurat'  => 'required',
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
        InputSuratSDM::where('id', $id)->update($validate);
        
        return redirect()->route('sdm')->with('succes', 'surat berhasil diEdit');
    }

    public function destroy($id) 
    {
        InputSuratSDM:where('id', $id)->delete();

        return redirect()->route('sdm')->with('succes', 'surat berhasil dihapus');
    }
}
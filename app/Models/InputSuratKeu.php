<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputSuratKeu extends Model
{
    use HasFactory;
    protected $table = 'surat_keuangan';
    protected $guarded = ['id'];
    
    public function JenisSurat(){
        return $this->belongsTo(JenisSurat::class, 'id_jenis_surat', 'id');
    }


    public function TahunSurat(){
        return $this->belongsTo(TahunSurat::class, 'id_tahun_surat','id');
    }
}
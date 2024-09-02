<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputSuratUmum extends Model
{
    use HasFactory;
    protected $table = 'surat_umum';
    protected $guarded = ['id'];

    public function JenisSurat(){
        return $this->belongsTo(JenisSurat::class);
    }
    public function TahunSurat() {
        return $this->belongsTo(TahunSurat::class);
    }
}
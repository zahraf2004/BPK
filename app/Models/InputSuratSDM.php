<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputSuratSDM extends Model
{
    use HasFactory;
    protected $table = 'surat_sdm';
    protected $guarded = ['id'];

    public function JenisSurat() {
        return $thisbelongsTo(JenisSurat::class);
    }

    public function TahunSurat(){
        return $thisbelongsTo(TahunSurat::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunSurat extends Model
{
    use HasFactory;
    protected $table = 'tahun_surat';

    protected $guarded =['id'];
}
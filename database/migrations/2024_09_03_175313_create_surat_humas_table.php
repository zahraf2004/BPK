<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_humas', function (Blueprint $table) {
            $table->id();
            $table->string('namesurat');
            $table->string('Nomor');
            $table->string('id_jenis_surat');
            $table->date('tgl');
            $table->string('id_tahun_surat');
            $table->string('keterangan');
            $table->text('nama_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_humas');
    }
};
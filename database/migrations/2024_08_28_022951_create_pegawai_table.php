<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nip', 25)->unique(); // NIP sebagai password
            $table->string('jabatan', 50)->nullable();
            $table->string('pangkat', 50)->nullable();
            $table->string('unit_kerja', 50)->nullable();
            $table->string('email', 100)->unique(); // Email sebagai username
            $table->enum('hak_akses', ['admin', 'pumk', 'subgian']);
            $table->enum('status', ['aktif', 'tidak aktif'])->default('aktif');
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
        Schema::dropIfExists('pegawai');
    }
}
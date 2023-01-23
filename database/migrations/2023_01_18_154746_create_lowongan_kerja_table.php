<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowonganKerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan_kerja', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('posisi');
            $table->string('tipe_pekerjaan');
            $table->string('tingkat_pekerjaan');
            $table->string('gaji');
            $table->string('berlaku');
            $table->mediumText('deskripsi');
            $table->string('perusahaan');
            $table->string('kota');
            $table->string('negara');
            $table->int('jumlah');
            $table->string('no_telp');
            $table->string('email');
            $table->string('thumbnail')->nullable();
            $table->string('author');
            $table->string('tanggal');
            $table->string('user_id');
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
        Schema::dropIfExists('lowongan_kerja');
    }
}

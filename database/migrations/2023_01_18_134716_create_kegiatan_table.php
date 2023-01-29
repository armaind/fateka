<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('thumbnail')->nullable();
            $table->string('kategori');
            $table->string('tanggal');
            $table->string('penyelenggara');
            $table->integer('kuota');
            $table->string('lokasi');
            $table->string('batas');
            $table->mediumText('content');
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
        Schema::dropIfExists('kegiatan');
    }
}

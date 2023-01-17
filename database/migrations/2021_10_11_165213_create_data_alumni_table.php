<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAlumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_alumni', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alumni');
            $table->string('angkatan');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('user_id');
            $table->string('email');
            $table->string('status_pekerjaan');
            $table->string('perusahaan');
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
        Schema::dropIfExists('data_alumni');
    }
}

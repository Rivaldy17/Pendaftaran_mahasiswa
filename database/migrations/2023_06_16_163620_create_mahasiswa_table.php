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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id_mahasiswa');
            $table->string('email', 200);
            $table->string('nama', 200);
            $table->string('jkl', 5);
            $table->date('tgl_laghir');
            $table->string('agama', 30);
            $table->string('alamat', 200);
            $table->string('pdk_trkhr', 30);
            $table->integer('id_lokasi_k');
            $table->integer('id_program');
            $table->string('ktp', 250);
            $table->string('ijazah', 250);
            $table->integer('role');
            $table->integer('status');
            $table->string('password', 250);
            $table->string('verify_key', 250);
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
        Schema::dropIfExists('mahasiswa');
    }
};

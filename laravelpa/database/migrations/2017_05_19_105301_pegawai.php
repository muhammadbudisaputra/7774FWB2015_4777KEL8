<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id_pegawai');
            $table->string('nama_pegawai');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('no_telpon');
            $table->integer('id_pengguna',false,true);
            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('pegawai');
    }
}

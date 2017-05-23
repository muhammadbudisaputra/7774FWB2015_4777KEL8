<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kapal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kapal', function (Blueprint $table) {
            $table->increments('id_kapal');
            $table->string('nama_kapal');
            $table->string('jenis_kapal');
             $table->integer('id_tujuan',false,true);
            $table->foreign('id_tujuan')->references('id_tujuan')->on('tujuan')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kapal');
    }
}

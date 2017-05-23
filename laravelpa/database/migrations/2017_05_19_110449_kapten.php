<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kapten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kapten', function (Blueprint $table) {
            $table->increments('id_kapten');
            $table->string('nama_kapten');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('umur');
            $table->integer('id_kapal',false,true);
            $table->foreign('id_kapal')->references('id_kapal')->on('kapal')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('kapten');
    }
}

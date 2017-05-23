<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Awak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awak', function (Blueprint $table) {
            $table->increments('id_awak');
            $table->string('nama');
            $table->integer('umur');
            $table->text('alamat');
            $table->string('jenis_kelamin');
            $table->string('bagian');
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
        Schema::drop('awak');
    }
}

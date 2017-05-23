<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelasiTujuanpenumpangtiket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relasi_tpt', function (Blueprint $table) {
            $table->increments('id_relasi');
             $table->integer('id_tiket',false,true);
            $table->foreign('id_tiket')->references('id_tiket')->on('tiket');
             $table->integer('id_tujuan',false,true);
            $table->foreign('id_tujuan')->references('id_tujuan')->on('tujuan');
             $table->integer('id_penumpang',false,true);
            $table->foreign('id_penumpang')->references('id_penumpang')->on('penumpang');
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
        Schema::drop('relasi_tpt');
    }
}

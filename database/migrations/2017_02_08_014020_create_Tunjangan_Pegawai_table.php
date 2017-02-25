<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTunjanganPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tunjangan_Pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Kode_Tunjangan');
            $table->foreign('Kode_Tunjangan')->references('id')
                  ->on('Tunjangan')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('Kode_Pegawai');
            $table->foreign('Kode_Pegawai')->references('id')->on('Pegawai')
                  ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('Tunjangan_Pegawai');
    }
}

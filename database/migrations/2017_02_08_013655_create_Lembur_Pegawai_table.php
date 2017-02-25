<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLemburPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lembur_Pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Kode_Lembur');
            $table->foreign('Kode_Lembur')->references('id')
                  ->on('Kategori_Lembur')->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->unsignedInteger('Kode_Pegawai');
            $table->foreign('Kode_Pegawai')->references('id')->on('Pegawai')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('Jumlah_Jam');
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
        Schema::dropIfExists('Lembur_Pegawai');
    }
}

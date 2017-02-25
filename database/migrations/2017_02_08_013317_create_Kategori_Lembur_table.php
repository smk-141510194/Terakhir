<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriLemburTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Kategori_Lembur', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Kode_Lembur');
            $table->unsignedInteger('Kode_Jabatan');
            $table->foreign('Kode_Jabatan')->references('id')->on('Jabatan')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('Kode_Golongan');
            
            $table->foreign('Kode_Golongan')->references('id')->on('Golongan')
                  ->onDelete('cascade')->onUpdate('cascade');
            
            $table->integer('Besaran_Uang');
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
        Schema::dropIfExists('Kategori_Lembur');
    }
}

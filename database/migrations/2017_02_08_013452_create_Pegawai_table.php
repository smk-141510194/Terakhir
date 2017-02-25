<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nip');
            $table->unsignedInteger('user_id');
            
            $table->foreign('user_id')->references('id')->on('users')
                  ->onUpdate('cascade')->onDelete('cascade');
            
            $table->unsignedInteger('Kode_Jabatan');
            $table->foreign('Kode_Jabatan')->references('id')->on('Jabatan')
                  ->onUpdate('cascade')->onDelete('cascade');
            
            $table->unsignedInteger('Kode_Golongan');
            $table->foreign('Kode_Golongan')->references('id')->on('Golongan')
                  ->onUpdate('cascade')->onDelete('cascade');
           
            $table->string('Photo');
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
        Schema::dropIfExists('Pegawai');
    }
}

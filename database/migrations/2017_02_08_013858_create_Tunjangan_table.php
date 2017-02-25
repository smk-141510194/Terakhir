<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTunjanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('Tunjangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Kode_Tunjangan');

            $table->unsignedInteger('Kode_Jabatan');
            $table->foreign('Kode_Jabatan')->references('id')->on('Jabatan')
                  ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('Kode_Golongan');
            $table->foreign('Kode_Golongan')->references('id')->on('Golongan')
                  ->onUpdate('cascade')->onDelete('cascade');

            $table->string('Status');
            $table->integer('Jumlah_Anak')->nullable;
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
        Schema::dropIfExists('Tunjangan');
    }
}

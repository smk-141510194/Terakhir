<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJabatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Jabatan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Kode_Jabatan');
            $table->string('Nama_Jabatan');
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
        Schema::dropIfExists('Jabatan');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    //
    protected $table = 'Golongan';
    protected $fillable = ['Kode_Golongan', 'Nama_Golongan', 'Besaran_Uang'];
    protected $visible = ['Kode_Golongan', 'Nama_Golongan', 'Besaran_Uang'];
    public $timestamps = true;

    public function Kategori_Lembur(){
    	return $this->hasMany('App\Kategori_Lembur', 'Kode_Golongan');
    }
    public function Pegawai(){
        return $this->hasMany('App\Pegawai', 'Kode_Golongan');
    }
    public function Tunjangan(){
        return $this->hasMany('App\Tunjangan', 'Kode_Golongan');
    }
}

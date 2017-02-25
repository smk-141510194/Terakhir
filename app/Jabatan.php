<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
   
    //
    protected $table = 'Jabatan';
    protected $fillable = ['Kode_Jabatan', 'Nama_Jabatan', 'Besaran_Uang'];
    protected $visible = ['Kode_Jabatan', 'Nama_Jabatan', 'Besaran_Uang'];
    public $timestamps = true;

     public function Kategori_Lembur(){
    	return $this->hasMany('App\Kategori_Lembur', 'Kode_Jabatan');
    }
    public function Pegawai(){
        return $this->hasMany('App\Pegawai', 'Kode_Jabatan');
    }
    public function Tunjangan(){
        return $this->hasMany('App\Tunjangan', 'Kode_Jabatan');
    }
}

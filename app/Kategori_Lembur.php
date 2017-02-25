<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_Lembur extends Model
{
    // 
    protected $table = 'Kategori_Lembur';
    protected $fillable = ['Kode_Lembur', 'Kode_Jabatan', 'Kode_Golongan', 'Besaran_Uang'];
    protected $visible = ['Kode_Lembur', 'Kode_Jabatan', 'Kode_Golongan', 'Besaran_Uang'];
    public $timestamps = true;

    public function Jabatan(){
    	return $this->belongsTo('App\Jabatan', 'Kode_Jabatan');
    }
    public function Golongan(){
    	return $this->belongsTo('App\Golongan', 'Kode_Golongan');
    }
    public function Lembur_Pegawai(){
        return $this->hasMany('App\Lembur_Pegawai','Kode_Lembur');
    }
}

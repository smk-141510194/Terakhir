<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tunjangan extends Model
{
    //
    protected $table = 'Tunjangan';
    protected $fillable = ['Kode_Tunjangan','Kode_Jabatan','Kode_Golongan','Status','Jumlah_Anak','Besaran_Uang'];
    protected $visible = ['Kode_Tunjangan','Kode_Jabatan','Kode_Golongan','Status','Jumlah_Anak','Besaran_Uang'];
    public $timestamps = true;

     public function Jabatan(){
    	return $this->belongsTo('App\Jabatan', 'Kode_Jabatan');
    }
    public function Golongan(){
    	return $this->belongsTo('App\Golongan', 'Kode_Golongan');
    }
    public function Tunjangan_Pegawai(){
        return $this->hasMany('App\Tunjangan_Pegawai', 'Kode_Tunjangan'); 
    }

}

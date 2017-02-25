<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tunjangan_Pegawai extends Model
{
    //
    protected $table = 'Tunjangan_Pegawai';
    protected $fillable = ['Kode_Tunjangan', 'Kode_Pegawai'];
    protected $visible = ['Kode_Tunjangan', 'Kode_Pegawai'];
    public $timestamps = true;

     public function Tunjangan(){
    	return $this->belongsTo('App\Tunjangan', 'Kode_Tunjangan');
    }
    public function Pegawai(){
    	return $this->belongsTo('App\Pegawai', 'Kode_Pegawai');
    }
    public function Penggajian(){
        return $this->belongsTo('App\Penggajian','Tunjangan_Pegawai');
    }
}

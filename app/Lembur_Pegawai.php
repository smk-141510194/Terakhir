<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembur_Pegawai extends Model
{
    //
    protected $table = 'Lembur_Pegawai';
    protected $fillable = ['Kode_Lembur', 'Kode_Pegawai', 'Jumlah_Jam'];
    protected $visible = ['Kode_Lembur', 'Kode_Pegawai', 'Jumlah_Jam'];
    public $timestamps = true;

     public function Kategori_Lembur(){
        return $this->belongsto('App\Kategori_Lembur', 'Kode_Lembur');
    }
    public function Pegawai(){
        return $this->belongsto('App\Pegawai', 'Kode_Pegawai');
    }
}

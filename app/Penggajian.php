<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    //
    protected $table = 'Penggajian';
    protected $fillable = ['Kode_Tunjangan', 'Jumlah_jam_lembur', 'Jumlah_uang_lembur', 'Gaji_pokok', 'Total_gaji', 'Tanggal_pengambilan', 'Status_pengambilan', 'Petugas_penerima'];

    protected $visible = ['Kode_Tunjangan', 'Jumlah_jam_lembur', 'Jumlah_uang_lembur', 'Gaji_pokok', 'Total_gaji', 'Tanggal_pengambilan', 'Status_pengambilan', 'Petugas_penerima'];
    public $timestamps = true;

    public function Tunjangan_Pegawai(){
    	return $this->belongsTo('App\Tunjangan_Pegawai', 'Kode_Tunjangan');
    }
}

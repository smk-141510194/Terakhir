<?php

namespace App\Http\Controllers;

use App\Tunjangan;
use App\Penggajian;
use App\Tunjangan_Pegawai;
use Input;
use App\Pegawai;
use App\Jabatan;
use App\Golongan;
use App\Kategori_Lembur;
use App\Lembur_Pegawai;
use Auth;
use Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('Admin');
    }
    public function index()
    {
        $Penggajian = Penggajian::paginate(3);
        return view('Penggajian.index',compact('Penggajian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $Gaji = Tunjangan_Pegawai::paginate(10);
        return view('Penggajian.create',compact('Gaji')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $i_Gaji=Input::all();
       $Tunjangan_Pegawai=Tunjangan_Pegawai::where('id',$i_Gaji['Kode_Tunjangan'])->first();
       $Penggajian=Penggajian::where('Kode_Tunjangan',$Tunjangan_Pegawai->id)->first();
       $Tunjangan=Tunjangan::where('id',$Tunjangan_Pegawai->Kode_Tunjangan)->first();
       $Pegawai=Pegawai::where('id',$Tunjangan_Pegawai->Kode_Pegawai)->first();
       $Kategori_Lembur=Kategori_Lembur::where('Kode_Jabatan',$Pegawai->Kode_Jabatan)->where('Kode_Golongan',$Pegawai->Kode_Golongan)->first();
       $Lembur_Pegawai=Lembur_Pegawai::where('Kode_Pegawai',$Pegawai->id)->first();
       $Jabatan=Jabatan::where('id',$Pegawai->Kode_Jabatan)->first();
       $Golongan=Golongan::where('id',$Pegawai->Kode_Golongan)->first();

       $Gaji = new Penggajian ;

       if (isset($Penggajian)) {
           $error=true ;
           $Tunjangan=Tunjangan_Pegawai::paginate(10);
           return view('Penggajian.create',compact('Tunjangan','error'));
       }
       elseif (!isset($Lembur_Pegawai)) {
            $nol = 0;
            $Gaji->Jumlah_jam_lembur= $nol;
            $Gaji->Jumlah_uang_lembur = $nol;
            $Gaji->Gaji_pokok=$Jabatan->Besaran_Uang+$Golongan->Besaran_Uang;
            $Gaji->Total_gaji=($Tunjangan->Jumlah_Anak*$Tunjangan->Besaran_Uang)+($Jabatan->Besaran_Uang+$Golongan->Besaran_Uang);
            $Gaji->Tanggal_pengambilan = date('Y-m-d');
            $Gaji->Status_pengambilan = Input::get('Status_pengambilan');
            $Gaji->Kode_Tunjangan = Input::get('Kode_Tunjangan');
            $Gaji->Petugas_penerima = Auth::user()->name;
            $Gaji->save();
        }
        elseif(!isset($Lembur_Pegawai) || !isset($Kategori_Lembur))
        {
            $nol = 0;
            $Gaji->Jumlah_jam_lembur= $nol;
            $Gaji->Jumlah_uang_lembur = $nol;
            $Gaji->Gaji_pokok=$Jabatan->Besaran_Uang+$Golongan->Besaran_Uang;
            $Gaji->Total_gaji = ($Tunjangan->Jumlah_Anak*$Tunjangan->Besaran_Uang)+($Jabatan->Besaran_Uang+$Golongan->Besaran_uang);
            $Gaji->Tanggal_pengambilan = date('Y-m-d');
            $Gaji->Status_pengambilan = Input::get('Status_pengambilan');
            $Gaji->Kode_Tunjangan = Input::get('Kode_Tunjangan');
            $Gaji->Petugas_penerima = Auth::user()->name;
            $Gaji->save();
        }
        else
        {
            $Gaji->Jumlah_jam_lembur=$Lembur_Pegawai->Jumlah_Jam;
            $Gaji->Jumlah_uang_lembur =($Lembur_Pegawai->Jumlah_Jam)*($Kategori_Lembur->Besaran_uang);
            $Gaji->Gaji_pokok=$Jabatan->Besaran_Uang+$Golongan->Besaran_uang;
            $Gaji->Total_gaji = ($Lembur_Pegawai->Jumlah_Jam*$Kategori_Lembur->Besaran_Uang)+($Tunjangan->Jumlah_Anak*$Tunjangan->Besaran_Uang)+($Jabatan->Besaran_Uang+$Golongan->Besaran_uang);
            $Gaji->Tanggal_pengambilan = date('Y-m-d');
            $Gaji->Status_pengambilan = Input::get('Status_pengambilan');
            $Gaji->Kode_Tunjangan = Input::get('Kode_Tunjangan');
            $Gaji->Petugas_penerima = Auth::user()->name;
            $Gaji->save();
        }
        return redirect('Penggajian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        Penggajian::find($id)->delete();
        return redirect('Penggajian');
    }
}


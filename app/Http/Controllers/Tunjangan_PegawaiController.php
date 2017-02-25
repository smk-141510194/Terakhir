<?php

namespace App\Http\Controllers;

use Request;
use App\Tunjangan_Pegawai;
use App\Pegawai;
use App\Tunjangan;
use App\Jabatan;
use App\Golongan;
class Tunjangan_PegawaiController extends Controller
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
        //
        $Tunjangan= Tunjangan::all();
        
        $Tunjangan_Pegawai = Tunjangan_Pegawai::all();
        $Pegawai = Pegawai::all();
        return view('Tunjangan_Pegawai.index',compact('Pegawai','Tunjangan_Pegawai'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $Pegawai = Pegawai::all();
        $Tunjangan = Tunjangan::all();
        
        return view('Tunjangan_Pegawai.create',compact('Pegawai','Tunjangan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $Tunjangan_Pegawai=Request::all();
        Tunjangan_Pegawai::create($Tunjangan_Pegawai);
        return redirect('Tunjangan_Pegawai');
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
         $Tunjangan_Pegawai=Tunjangan_Pegawai::findOrFail($id);
        $Pegawai=Pegawai::all();
        $Tunjangan=Tunjangan::all();
        return view('Tunjangan_Pegawai.edit',compact('Tunjangan_Pegawai','Pegawai','Tunjangan'));
  
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
         $Tunjangan_PegawaiUpdate=Request::all();
        $Tunjangan_Pegawai=Tunjangan_Pegawai::find($id);
        $Tunjangan_Pegawai->update($Tunjangan_PegawaiUpdate);
        return redirect('Tunjangan_Pegawai');

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
         Tunjangan_Pegawai::find($id)->delete();
        return redirect('Tunjangan_Pegawai');
 
    }
}

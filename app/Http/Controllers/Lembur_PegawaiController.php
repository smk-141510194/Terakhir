<?php

namespace App\Http\Controllers;

use Request;
use App\Lembur_Pegawai;
use App\Kategori_Lembur;
use App\Pegawai;

class Lembur_PegawaiController extends Controller
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
        
        $Kategori_Lembur = Kategori_Lembur::all();
        $Lembur_Pegawai = Lembur_Pegawai::all();
        return view('Lembur_Pegawai.index',compact('Lembur_Pegawai','Kategori_Lembur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Kategori_Lembur = Kategori_Lembur::all();
        $Pegawai = Pegawai::all();
        return view('Lembur_Pegawai.create',compact('Pegawai','Kategori_Lembur'));
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
        $Lembur_Pegawai=Request::all();
        Lembur_Pegawai::create($Lembur_Pegawai);
        return redirect('Lembur_Pegawai');
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

         $Lembur_Pegawai=Lembur_Pegawai::findOrFail($id);
         $Pegawai=Pegawai::all();
         $Kategori_Lembur=Kategori_Lembur::all();
      
        return view('Lembur_Pegawai.edit',compact('Lembur_Pegawai','Pegawai','Kategori_Lembur'));

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
         $Lembur_PegawaiUpdate=Request::all();
        $Lembur_Pegawai=Lembur_Pegawai::find($id);
        $Lembur_Pegawai->update($Lembur_PegawaiUpdate);
        return redirect('Lembur_Pegawai');
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
        Lembur_Pegawai::find($id)->delete();
        return redirect('Lembur_Pegawai');
    }
}

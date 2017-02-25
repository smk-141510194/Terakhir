<?php

namespace App\Http\Controllers;

use Request;
use App\Golongan;
use App\Jabatan;
use App\Kategori_Lembur;

class Kategori_LemburController extends Controller
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

        return view('Kategori_Lembur.index',compact('Kategori_Lembur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Golongan = Golongan::all();
        $Jabatan = Jabatan::all();
        return view('Kategori_Lembur.create',compact('Jabatan','Golongan'));
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
         $Kategori_Lembur=Request::all();
         // $Golongan=Request::all();
         // $Jabatan=Request::all();
        Kategori_Lembur::create($Kategori_Lembur);
        // Kategori_Lembur::create($Golongan);
        // Kategori_Lembur::create($Jabatan);
        return redirect('Kategori_Lembur');
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
        $Kategori_Lembur=Kategori_Lembur::findOrFail($id);
        $Golongan=Golongan::all();
        $Jabatan=Jabatan::all();
        return view('Kategori_Lembur.edit',compact('Kategori_Lembur','Golongan','Jabatan'));
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
        $Kategori_LemburUpdate=Request::all();
        $Kategori_Lembur=Kategori_Lembur::find($id);
        $Kategori_Lembur->update($Kategori_LemburUpdate);
        $Kategori_Lembur->Golongan = Request::get('Golongan'); 
        $Kategori_Lembur->Jabatan = Request::get('Jabatan'); 
        
        return redirect('Kategori_Lembur');
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
        Kategori_Lembur::find($id)->delete();
        return redirect('Kategori_Lembur');
    }
}

<?php

namespace App\Http\Controllers;

use Request;
use App\Tunjangan;
use App\Golongan;
use App\Jabatan;
use DB;
class TunjanganController extends Controller
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
        $Jabatan = Jabatan::all();
        $Golongan = Golongan::all();
        $Tunjangan = Tunjangan::all();
        return view('Tunjangan.index', compact('Jabatan', 'Golongan', 'Tunjangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Jabatan = Jabatan::all();
        $Golongan = Golongan::all();
        return view('Tunjangan.create',compact('Golongan','Jabatan'));
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
         $Tunjangan=Request::all();
        Tunjangan::create($Tunjangan);
        return redirect('Tunjangan');
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
        $Tunjangan=Tunjangan::findOrFail($id);
        $Golongan=Golongan::all();
        $Jabatan=Jabatan::all();
        return view('Tunjangan.edit',compact('Tunjangan','Golongan','Jabatan'));
   
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
        $TunjanganUpdate=Request::all();
        $Tunjangan=Tunjangan::find($id);
        $Tunjangan->update($TunjanganUpdate);
        return redirect('Tunjangan');
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
         Tunjangan::find($id)->delete();
        return redirect('Tunjangan');
    }
}

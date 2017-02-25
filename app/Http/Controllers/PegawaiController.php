<?php

namespace App\Http\Controllers;

use Request;
use App\Jabatan;
use App\Golongan;
use App\User;
use App\Pegawai;
use DB;
use Validator;
use Input;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class PegawaiController extends Controller
{
        use RegistersUsers;
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
        $Pegawai = Pegawai::all();
        return view('Pegawai.index', compact('Pegawai', 'Golongan', 'Jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $forid = DB::table('Pegawai')->max('id');
        $newkode = $forid + 1;
        $digit = strlen($newkode);
        if ($digit == '1') {
            $kode = "10010110".$newkode;
        }
        elseif ($digit == '2') {
            $kode = "10101011".$newkode;
        }
        elseif ($digit == '3') {
            $kode = "10101010".$newkode;
        }
        elseif ($digit == '4') {
            $kode = "10101001".$newkode;
        }

        $dd = User::all();
        $Jabatan = Jabatan::all();
        $Golongan = Golongan::all();
        return view('Pegawai.create', compact('kode', 'Pegawai', 'dd', 'Jabatan', 'Golongan'));
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
            // $this->validate($request,[
            
            // 'name' => 'required',
            // 'nip' => 'required|numeric|min:3|unique:Pegawai',
            // 'permission' => 'required|max:255',
            // 'email' => 'required|email|max:255|unique:users',
            // 'password' => 'required|min:6|confirmed',
            //  ]);



        $input = Request::all();
        // dd($input);
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
            'permission' => $input['permission']
            
        ]);

        $file = Input::file('Photo');
        $destinationPath = public_path().'/image/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);

        if(Input::hasFile('Photo')){
           $mm = new Pegawai;
           $mm->Nip = Input::get('Nip'); 
           $mm->user_id = $user->id;  
           $mm->Kode_Jabatan = Input::get('Kode_Jabatan'); 
           $mm->Kode_Golongan = Input::get('Kode_Golongan'); 
           $mm->Photo = $filename;
           $mm->save();
        }
        return redirect('Pegawai');

        // if ($request->hasFile('Photo')){
        //     $uploaded_photo = $request->file('Photo');
        // $extension = 
        // $uploaded_photo->getClientOriginalExtension();
        // $filename = md5 (time()) . '.' . $extension;
        // $destinationPath = public_path() . 
        // DIRECTORY_SEPARATOR . 'image';
        // $uploaded_cover->move($destinationPath, $filename);
        // $Foto->cover = $filename;
        // $Foto->save();

        // }
        // return redirect('Pegawai');
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

        $Pegawai = Pegawai::find($id);
        $Jabatan = Jabatan::all();
        $Golongan = Golongan::all();

        return view('Pegawai.edit', compact('Pegawai', 'Jabatan', 'Golongan'));
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
         $Pegawai = Pegawai::find($id);

        if(Request::hasFile('Photo')){
            $file = Request::file('Photo');
            $destinationPath = public_path().'/image/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
        }
        
        $Pegawai->Nip = Request::get('Nip'); 
        $Pegawai->Kode_Jabatan = Request::get('Kode_Jabatan'); 
        $Pegawai->Kode_Golongan = Request::get('Kode_Golongan'); 
        $Pegawai->Photo = $filename;
        $Pegawai->save();
        return redirect('Pegawai');
        
        // if ($request->hasFile('Photo')){
        //     $filename = null;
        //     $uploaded_cover = $request->file('Photo');
        //     $extension = $uploaded_cover->getClientOriginalExtension();
        //     $filename = md5(time()) . '.' . $extension;
        //     $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'image';
        //     $uploaded_cover->move ($destinationPath, $filename);
            
        //     if ($book->cover){
        //         $old_cover = $Foto->cover;
        //         $filepath = public_path() . DIRECTORY_SEPARATOR . 'image' 
        //         . DIRECTORY_SEPARATOR . $book->cover;
        //         try{
        //             File::delete($filepath);
        //         } catch (FileNotFoundException $e){

        //         }
        //     }

        //     $Foto->cover = $filename;
        //     $Foto->save();
        // }

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
        Pegawai::find($id)->delete();
        return redirect('Pegawai');
    }
}

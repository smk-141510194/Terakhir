<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model. untuk nama model sesuaikan dengan nama model kalian
use App\User;
use App\Jabatan;
use App\Golongan;
use App\Pegawai;
use App\Tunjangan;
use App\TunjanganPegawai;
use App\KategoriLembur;
use App\LemburPegawai;
use App\Penggajian;

use Auth;
use DB;
use Hash;
use JWTAuth;

class ApiController extends Controller
{
    // public function register(Request $request)
    // {        
    //  $input = $request->all();
    //  $input['password'] = Hash::make($input['password']);
    //  User::create($input);
    //     return response()->json(['result'=>true]);
    // }
    

    public function login(Request $request)
    {
        // $user = User::where('id', Auth::user()->id)->get();
        $response = array("error" => FALSE);
        $input = $request->all();
        if (!$token = JWTAuth::attempt($input)) {
            $response["error"] = TRUE;
            $response["error_msg"] = "Email or password yang anda masukan salah. Silahkan Coba Lagi!";
            // return response()->json(['result' => 'wrong email or password.']);
            return ($response);
        }

        $user = JWTAuth::toUser($token);

        // Detail user & Pegawai Json
        // Bisa diakses lewat postman & Android Login
        $detail = $user::select('users.id as uid', 
                                'users.name as name', 
                                'users.email as email', 
                                'users.created_at as created_at', 
                                'users.permission as permission', 
                                'Peggawai.Nip as Nip',
                                'Peggawai.photo as photo', 
                                'Jabatan.Nama_Jabatan as Jabatan', 
                                'Jabatan.Besaran_Uang as Uang_Jabatan',
                                'Golongan.Nama_Golongan as Golongan',
                                'Golongan.Besaran_Uang as Uang_Golongan',
                                DB::raw('(Jabatans.Besaran_Uang + Golongan.Besaran_Uang) as gaji'))
                    ->join('Peggawai', 'Peggawai.user_id', '=', 'users.id')
                    ->join('Jabatans', 'Peggawai.Kode_Jabatan', '=', 'Jabatans.id')
                    ->join('Golongan', 'Peggawai.Kode_Golongan', '=', 'Golongan.id')
                    // ->join('tunjangan_pegawais' , 'tunjangan_pegawais.kode_tunjangan_id', '=', 'tunjangans.id')
                    // ->join('tunjangans', 'tunjangans.id', '=', 'tunjangan_pegawais.kode_tunjangan_id')
                    ->where('users.id', $user->id)
                    ->firstorFail();

        // Get Photo
        $img = asset("profile/".$detail->photo);

        // JSON Output
        $response["error"] = FALSE;
        $response["uid"] = $detail["uid"];
        $response["user"]["photo"] = $img;
        $response["user"]["name"] = $detail["name"];
        $response["user"]["email"] = $detail["email"];
        $response["user"]["permission"] = $detail["permission"];
        $response["user"]["Nip"] = $detail["Nip"];
        $response["user"]["created_at"] = $detail["created_at"];
        $response["user"]["detail"]["Jabatan"] = $detail["Jabatan"];
        $response["user"]["detail"]["Golongan"] = $detail["Golongan"];
        $response["user"]["keuangan"]["Uang Jabatan"] = $detail["Uang_Jabatan"];
        $response["user"]["keuangan"]["Uang Golongan"] = $detail["Uang_Golongan"];
        $response["user"]["keuangan"]["gaji pokok"] = $detail["gaji"];


        // echo json_encode($response);
        // return response()->json(['result' =>  $response]);
        return ($response);
    }
    
    // public function get_user_details(Request $request)
    // {
    //  $input = $request->all();
    //  $user = JWTAuth::toUser($input['token']);
    //     return response()->json(['result' => $user]);
    // }
}

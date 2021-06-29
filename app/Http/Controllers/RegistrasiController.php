<?php 

namespace App\Http\Controllers;

use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller{
    public function registrasi(Request $request){

        //kirim data
        $nama = $request->input('nama');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        
        //simpan data
        Registrasi::create([
            'nama'=>$nama,
            'username' => $username,
            'email'=>$email,
            'password'=>$password,
        ]);
        //responeHasil() dari Controller
        return $this->responseHasil(200,true,"Registrasi Berhasil");
    }
    
}

?>
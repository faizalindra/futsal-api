<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Login;
use Exception;

class BookingController extends Controller{

    //Fungsi untuk memasukan data ke tabel
    public function create(){
        $data = [
            'nama' => request()->post('nama'),
            'alamat' => request()->post('alamat'),
            'id_jam' => request()->post('id_jam'),
            'tgl_jadwal' => request()->post('tgl_jadwal'),
            'id_lapang' => request()->post('id_lapang'),
            'notelp' => request()->post('notelp'),
        ];
        
        try{
            $hasil = Booking::create($data); 
            
            return $this -> responseHasil(200,true,$hasil);

        }catch(Exception $e){
            return $this->responseHasil(500,false, [
                'massage' => $e->getMessage(),
                'data' => $data
            ]);
        }
    }
    
    //untuk membaca data dari tabel
    public function read(){        
        $data = Booking::all();
        return $this-> responseHasil(200,true,$data);
    }

    //Fungsi untuk menampilkan hasil
    public function show($id){
        //variabel a digunakan untuk menampilkan hasil
        $a = Booking::find($id);
        return $this->responseHasil(200,true,$a);
        
    }
}
?>
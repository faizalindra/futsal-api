<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Exception;

class BookingController extends Controller{

    //Fungsi untuk memasukan data ke tabel
    public function create(){
        $data = [
            'nama' => request()->post('nama'),
            'user_id' => request()->post('user_id'),
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
        //$data = Produk::all(); kode untuk me load semua data pada tabel
        //untuk membatasi jumlah data yang diambil
        
        $data = Booking::all();
        return $this-> responseHasil(200,true,$data);
    }

    //untuk mengubah data dari tabel
    // public function update($id){
    //     $data = [
    //         //kode_produk,nama_produ & notelp di depan haru sama dengan di Postman
    //         //sedangkan yang dibelakang hrus sama dengan tabel database
    //         'nama' => request('nama'),
    //         'kode_produk' => request('kode_produk'),
    //         'alamat' => request('alamat'),
    //         'id_jam' => request('id_jam'),
    //         'tgl_jadwal' => request('tgl_jadwal'),
    //         'id_lapangan' => request('id_lapangan'),
    //         'notelp' => request('notelp')
    //     ];
        
    //     try{
    //         //variable produk namanya bebas
    //         $produk = Booking::find($id); 
            
    //         //cek jika produk ditemukan, jika ditemukan skip
    //         if(empty($produk)){
    //             return $this->responseHasil(404, false, 'Data Tidak Ditemukan');
    //         }
            
    //         //perintah untuk merubah data
    //         $hasil = $produk->update($data);

    //         return $this -> responseHasil(200,true,$hasil);

    //     }catch(Exception $e){
    //         return $this->responseHasil(500,false, [
    //             'massage' => $e->getMessage(),
    //             'data' => $data
    //         ]);
    //     }

        //cara sederhana, jika error sulit di didiagnosis
        /*
        $h = Produk::find($id);
        $r = $h ->update([
            'kode_produk' => request('kode_produk'),
            'nama_produk' => request('nama_produk'),
            'harga' => request('harga')S
        ]);

        return $this->responseHasil(200,true,$r);
        */
    // }


    //Fungsi untuk menampilkan hasil
    public function show($id){
        //variabel a digunakan untuk menampilkan hasil
        $a = Booking::find($id);
        return $this->responseHasil(200,true,$a);
        
    }

    //fungsi untuk menghapus
    // public function delete($id){
    //     //variabel b digunakan untuk mencari data
    //     $b = Booking::find($id);

    //     //jika data ada skip
    //     if(empty($b)){
    //         return $this->responseHasil(404, false, 'Data Tidak Ditemukan');
    //     }

    //     //variabel h digunakan untuk menghapus hasil
    //     $h = $b->delete();

    //     return $this->responseHasil(200,true,$h);
        
    // }



}
?>
<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Exception;

class ProdukController extends Controller{

    //Fungsi untuk memasukan data ke tabel
    public function create(){
        // cara mengirim data, cara ke 1
        /*
        $kode = request()->post('kode_produk');
        $nama = request()->post('nama_produk');
        $harga = request()->post('harga');
        $data = [
            'kode_produk' => $kode,
            'nama_produk' => $nama,
            'harga' => $harga,
        ];
        */

        // Cara mengirim data, cara ke 2
        $data = [
            'kode_produk' => request()->post('kode_produk'),
            'nama_produk' => request()->post('nama_produk'),
            'harga' => request()->post('harga'),
        ];
        
        try{
            $hasil = Produk::create($data); 

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
        $data = Produk::paginate(20);
        return $this-> responseHasil(200,true,$data);
    }

    //untuk mengubah data dari tabel
    public function update($id){
        $data = [
            //kode_produk,nama_produ & harga di depan haru sama dengan di Postman
            //sedangkan yang dibelakang hrus sama dengan tabel database
            'kode_produk' => request('kode_produk'),
            'nama_produk' => request('nama_produk'),
            'harga' => request('harga')
        ];
        
        try{
            //variable produk namanya bebas
            $produk = Produk::find($id); 
            
            //cek jika produk ditemukan, jika ditemukan skip
            if(empty($produk)){
                return $this->responseHasil(404, false, 'Data Tidak Ditemukan');
            }
            
            //perintah untuk merubah data
            $hasil = $produk->update($data);

            return $this -> responseHasil(200,true,$hasil);

        }catch(Exception $e){
            return $this->responseHasil(500,false, [
                'massage' => $e->getMessage(),
                'data' => $data
            ]);
        }

        //cara sederhana, jika error sulit di didiagnosis
        /*
        $h = Produk::find($id);
        $r = $h ->update([
            'kode_produk' => request('kode_produk'),
            'nama_produk' => request('nama_produk'),
            'harga' => request('harga')
        ]);

        return $this->responseHasil(200,true,$r);
        */
    }


    //Fungsi untuk menampilkan hasil
    public function show($id){
        //variabel a digunakan untuk menampilkan hasil
        $a = Produk::find($id);
        return $this->responseHasil(200,true,$a);
        
    }

    //fungsi untuk menghapus
    public function delete($id){
        //variabel b digunakan untuk mencari data
        $b = Produk::find($id);

        //jika data ada skip
        if(empty($b)){
            return $this->responseHasil(404, false, 'Data Tidak Ditemukan');
        }

        //variabel h digunakan untuk menghapus hasil
        $h = $b->delete();

        return $this->responseHasil(200,true,$h);
        
    }



}
?>
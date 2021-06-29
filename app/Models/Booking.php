<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model{
    protected $table = 'tb_pemesanan';
    protected $fillable = ['nama','alamat','id_jam','tgl_jadwal','id_lapang','notelp'];
    public $timestamps = false;
}

?>
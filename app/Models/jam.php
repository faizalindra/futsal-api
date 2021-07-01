<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jam extends Model{
    protected $table = 'tb_jam';
    protected $fillable = ['id_jam','jam'];
    public $timestamps = false;
}

?>
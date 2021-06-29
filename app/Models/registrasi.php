<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model{
    protected $table = 'tb_user';
    protected $fillable = ['nama','username','email', 'password'];
    public $timestamps = false;
}


?>
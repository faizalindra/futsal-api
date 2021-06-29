<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberToken extends Model{
    protected $table = 'tb_token';
    protected $fillable = ['member_id','auth_key'];
    public $timestamps = false; 
}

?>
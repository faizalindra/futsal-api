<?php

namespace App\Http\Controllers;

use App\Models\Jam;
use App\Models\Login;
use Exception;

class JamController extends Controller{
    
    //untuk membaca data dari tabel
    public function read(){        
        $data = Jam::all();
        return $this-> responseHasil(200,true,$data);
    }
        
    }

?>
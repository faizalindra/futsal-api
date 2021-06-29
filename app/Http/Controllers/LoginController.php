<?php
namespace App\Http\Controllers;

use App\Models\MemberToken;
use App\Models\Login;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller{
    public function login(){
        $email = request()->post('email');
        $password = request()->post('password');
        $member = Login::where('email', $email)->first();

        //cek email ada atau tidak jika ada skip
        if(empty($member)){
            return $this->responseHasil(404, false, 'Email tidak ditemukan');
        }

        //cek password benar atau tidak jika benar skip
        if( ! Hash::check($password, $member->password)){
            return $this->responseHasil(404,false,'Password tidak Benar');
        }
        
        //simpan data ini ke tabel member_token
        $data = [
            'auth_key' => Hash::make(md5(date('Y-m-d H:i:s'). rand(9,9999). $member->id)),
            'member_id' => $member->id
        ];

        //antisipasi error
        //jika simpan data berhasil
        try {
            MemberToken::create($data);
            return $this->responseHasil(200, true, [
                'token' => $data['auth_key'],
                'user' => $member
            ]);
        }
        //jika simpan data gagal
        catch(Exception $e){
            return $this->responseHasil(500,false,$e->getMessage());
        }
    }
}

?>
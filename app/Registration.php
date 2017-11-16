<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


use Carbon\Carbon;

class Registration extends Model
{


    public function insertdata($name,$email,$phone,$pass,$img ){

        $data =array(
            'Name' => $name,
            'Email' => $email,
            'Phone' => $phone,
            'Password' => $pass,
            'User_Type' => 'users',
            'Photo_path' =>$img,

        );

        DB::table('users')->insert($data);
    }
}

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

    public function get_reg_user_info($email){

        $verify_reg_data= DB::table('users')
            ->where('Email',$email)
            ->count();
        return $verify_reg_data;

    }
}

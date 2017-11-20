<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


use Carbon\Carbon;

class User extends Model
{

    public function get(){

        $user_email=session('user_email');


        $profile_info= DB::table('users')
            ->where('Email',$user_email)
            ->limit(1)
            ->get();
        return $profile_info;
    }

    public function edit_profile($User_Email,$phone,$img){


        $data=array(
            'Phone'=>$phone,
            'Photo_Path'=>$img,
        );


        $edit_profile=DB::table('users')
            ->where('Email',$User_Email)
            ->update($data);


    }

    public function update_user_pass($User_Email,$pass){


    $data=array(
        'Password'=>$pass,
    );


    $update_user_pass=DB::table('users')
        ->where('Email',$User_Email)
        ->update($data);


}




}

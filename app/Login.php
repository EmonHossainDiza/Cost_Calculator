<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


use Carbon\Carbon;

class Login extends Model
{
    public function validate($user_email,$user_pass){

        $user = DB::table('users')
            ->where('Email', $user_email)
            ->where('Password', $user_pass)
            ->get();

        return $user;
    }



    public function log(){

        date_default_timezone_set("Asia/Dhaka");
        $logtime =Carbon::now();
        $ip = \Request::ip();
        DB::insert('insert into log_info (User_Email,Login_Details,Login_Ip) values (?,?,?)', [session('user_email'),$logtime,$ip,1]);

    }

    public function logout(){

        date_default_timezone_set("Asia/Dhaka");
        $logtime =Carbon::now();
        $c_name=session('user_email');

        DB::table('log_info')
            ->where('User_Email',$c_name)
            ->where('Login_Status','0')
            ->update(array('Logout_Details'=>$logtime,'Login_Status'=>'1'));
    }
}

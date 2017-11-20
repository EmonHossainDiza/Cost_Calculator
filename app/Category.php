<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


use Carbon\Carbon;

class Category extends Model
{
    public function insert_category($category_name,$user_email,$date){
        $data =array(
            'category_name' => $category_name,
            'email' => $user_email,
            'date'=> $date,

        );
        DB::table('category')->insert($data);
    }


    public function get_category(){

        $user_email=session('user_email');

        $get_category= DB::table('category')
            ->where('Email',$user_email)
            ->get();
        return $get_category;
    }

    public function edit_category($category_name,$category_id){

        $data=array(
            'category_name'=>$category_name,
        );


        DB::table('category')
            ->where('id',$category_id)
            ->update($data);
    }

    public function delete_category($category_id){

        $delete_category= DB::table('category')
            ->where('id',$category_id)
            ->delete();
    }

    public function get_category_id($category_id){

        $get_category_id= DB::table('category')
            ->where('Id',$category_id)
            ->get();
        return $get_category_id;
    }

    public function get_cat_id($id){

        $get_id_cat= DB::table('category')
            ->where('Id',$id)
            ->get();
        return $get_id_cat;
    }
}

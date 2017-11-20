<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


use Carbon\Carbon;

class SubCategory extends Model
{

    public function insert_sub_category($cat_id_subcat,$sub_category_name,$sub_category_type,$date){


        $data =array(
            'category_id' => $cat_id_subcat,
            'name' => $sub_category_name,
            'type'=> $sub_category_type,
            'date'=> $date,

        );

        DB::table('sub_category')->insert($data);
    }

    public function get_category_id($category_id){

        $get_category_id= DB::table('category')
            ->where('Id',$category_id)
            ->get();
        return $get_category_id;
    }

    public function get_sub_cat($id){

        $get_sub_cat= DB::table('sub_category')
            ->where('category_id',$id)
            ->get();

        return $get_sub_cat;

    }

    public function get_sub_cat_info($id){

        $get_sub_cat= DB::table('sub_category')
            ->where('id',$id)
            ->get();

        return $get_sub_cat;

    }





}

<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\User;
use App\Login;
use App\SubCategory;
use Illuminate\Support\Facades\Input;
use Session;

class SubCategoryController extends Controller
{

    public function get_sub_cat_modal(request $request){

        $category_id=$request-> id;
        $save = (new Category)->get_category_id($category_id);

        return view('modal/add_Sub_category_modal',compact('save'));
    }


    public function get_sub_category($sub_category_id){
        $User_Type = session('user_type');

        if ($User_Type == 'admin' || $User_Type == 'users' )
        {

            $id=$sub_category_id;


            $profile_info = (new User())->get();
            $get_sub_cat =(new SubCategory())->get_sub_cat_info($id);


            return view('subcategory',compact('profile_info','get_sub_cat'));
        }
        else {

            return redirect(url('/'));
        }
    }



    public function add_sub_category(request $request){

        $cat_id=session('blog');

        $cat_id_subcat =  $request->category_id;
        $sub_category_name=$request->sub_category_name;
        $sub_category_type=$request->sub_category_type;
        $date=$request->date;

        if($cat_id==$cat_id_subcat ){
            if($sub_category_type == "income" || $sub_category_type == "expense" ){
                $save = (new SubCategory)->insert_sub_category($cat_id_subcat, $sub_category_name, $sub_category_type, $date);
                try {

                    echo "<script type=\"text/javascript\">
				alert(\"Sub Category Added Successfully\");
				window.location=\"/category/$cat_id\";
				</script>";

                } catch (Exception $e) {

                    echo "<script type=\"text/javascript\">
				alert(\"There is an issue. Please Refresh the page and try again.\");
				window.location=\"/\";
				</script>";

                }
            }
            else{
                echo "<script type=\"text/javascript\">
				alert(\"There is an issue. Please Refresh the page and try again.\");
				window.location=\"/category/$cat_id\";
				</script>";
            }
        }
        else{
            echo "<script type=\"text/javascript\">
				alert(\"There is an issue. Please Refresh the page and try again.\");
				window.location=\"/category/$cat_id\";
				</script>";
        }
    }
}

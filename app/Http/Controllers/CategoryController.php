<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

use App\User;
use App\Login;

use Illuminate\Support\Facades\Input;
use Session;

class CategoryController extends Controller
{
    public function add_category(request $request){

        $category_name=$request->category_name;
        $date=$request->date;
        $user_email=session('user_email');


        $save = (new Category)->insert_category($category_name,$user_email,$date);

        try {

            echo "<script type=\"text/javascript\">
				alert(\"Category Added Successfully\");
				window.location=\"/profile\";
				</script>";

        } catch (Exception $e) {

            echo "<script type=\"text/javascript\">
				alert(\"There is an issue. Please Refresh the page and try again.\");
				window.location=\"/\";
				</script>";

        }


    }

    public function edit_category(request $request){

        $category_name=$request->category_name;
        $category_id=$request->category_id;


        $save = (new Category)->edit_category($category_name,$category_id);

        try {

            echo "<script type=\"text/javascript\">
				alert(\"Category Name Updated Successfully\");
				window.location=\"/profile\";
				</script>";

        } catch (Exception $e) {

            echo "<script type=\"text/javascript\">
				alert(\"There is an issue. Please Refresh the page and try again.\");
				window.location=\"/\";
				</script>";

        }


    }




    public function update_category(request $request){


        $category_id=$request-> id;


        $save = (new Category)->get_category_id($category_id);

        return view('modal/edit_category_modal',compact('save'));


    }





    public function delete_category(request $request){

        $category_id=$request->category_id;

        $save = (new Category)->delete_category($category_id);

        try {

            echo "<script type=\"text/javascript\">
				alert(\"Category Deleted Successfully\");
				window.location=\"/profile\";
				</script>";

        } catch (Exception $e) {

            echo "<script type=\"text/javascript\">
				alert(\"There is an issue. Please Refresh the page and try again.\");
				window.location=\"/\";
				</script>";

        }


    }

    public function cat_get($category_id){
        $User_Type = session('user_type');

        if ($User_Type == 'admin' || $User_Type == 'users' )
        {


            $id=$category_id;

            Session::put('blog',$id);

            $profile_info = (new User())->get();
            $get_cat_id= (new Category())->get_cat_id($id);
            $get_sub_cat =(new SubCategory())->get_sub_cat($id);

            return view('category',compact('get_cat_id','profile_info','get_sub_cat'));
        }
        else {

            return redirect(url('/'));
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\User;
use App\Login;
use Illuminate\Support\Facades\Input;
use Session;

class UserController extends Controller
{
    public function index(){

        $User_Type = session('user_type');

        if ($User_Type == 'admin' || $User_Type == 'users' )
        {
            $profile_info = (new User)->get();
            $get_category= (new Category())->get_category();
            return view('profile',compact('get_category','profile_info'));
        }
        else {

            return redirect(url('/'));
        }
    }

    public function edit_profile(request $request){


        $User_Type = session('user_type');

        if ($User_Type == 'admin' || $User_Type == 'users' )
        {
            $profile_info = (new User)->get();
            $get_category= (new Category)->get_category();
            return view('Edit_Profile',compact('get_category','profile_info'));
        }

        else {

            return redirect(url('/'));
        }
    }

    public function update_edit_profile(request $request){


        $User_Type = session('user_type');

        if ($User_Type == 'admin' || $User_Type == 'users' )
        {
            $User_Email = session('user_email');
            $phone=$request->phone;

//if image not select
            $profile_info = (new User)->get();

            foreach ($profile_info as $p)
                $image=$p->Photo_Path ;


            $file = Input::file('photo_file');
            if ($file == null) {

                $img = $image;
            }
//IMAGE UPLOAD
            else {
                $destinationPath = ('user_img');
                $extension = $file->getClientOriginalExtension();
                $filename = $User_Email . ".{$extension}";
                $img = $file->move($destinationPath, $filename);
            }

            $save = (new User)->edit_profile($User_Email,$phone,$img);
            try {

                echo "<script type=\"text/javascript\">
				alert(\"Profile Info Updated Successfully\");
				window.location=\"/profile_edit\";
				</script>";

            } catch (Exception $e) {

                echo "<script type=\"text/javascript\">
				alert(\"There is an issue. Please Refresh the page and try again.\");
				window.location=\"/\";
				</script>";

            }
        }

        else {

            return redirect(url('/'));
        }
    }

    public function update_user_pass(request $request){


        $User_Type = session('user_type');

        if ($User_Type == 'admin' || $User_Type == 'users' )
        {
            $profile_info = (new User)->get();

            $pass = $request->pass;
            $con_pass = $request->con_pass;
            $User_Email=session('user_email');

            foreach ($profile_info as $p)
                $Password=$p->Password ;

            if ($pass == null || $con_pass == null ) {

                $pass = $Password;

                echo "<script type=\"text/javascript\">
				alert(\"Enter Password\");
				window.location=\"/change_password\";
				</script>";

            }
            elseif($pass == $con_pass){

                    $save = (new User)->update_user_pass($User_Email, $pass);
                    try {

                        echo "<script type=\"text/javascript\">
				alert(\"Password Update Successfully\");
				window.location=\"/change_password\";
				</script>";

                    } catch (Exception $e) {

                        echo "<script type=\"text/javascript\">
				alert(\"There is an issue. Please Refresh the page and try again.\");
				window.location=\"/\";
				</script>";

                    }

            }
            else {
                echo "<script type=\"text/javascript\">
				alert(\"Enter Same Password & Confirm Password\");
				window.location=\"/change_password\";
				</script>";
            }
            }


        else {

            return redirect(url('/'));
        }
    }

    public function user_pass(){


        $User_Type = session('user_type');

        if ($User_Type == 'admin' || $User_Type == 'users' )
        {
            $profile_info = (new User)->get();
            return view('Pass_Edit_Profile',compact('profile_info'));
        }
        else {

            return redirect(url('/'));
        }
    }



}

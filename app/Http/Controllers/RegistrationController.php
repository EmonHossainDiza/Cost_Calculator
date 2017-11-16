<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Registration;
use Illuminate\Support\Facades\Input;
use Session;

class RegistrationController extends Controller
{
    public function index()
    {
        return view("Registration");
    }

    public function insert_reg_data(request $request)
    {
        $name = $request->name;
        $email= $request->email;
        $phone = $request->phone;
        $pass = $request->pass;
        $con_pass = $request->con_pass;


        $verify_reg_data= (new Registration)->get_reg_user_info($email);
//exist email check
        if($verify_reg_data>0){
            echo "<script type=\"text/javascript\">
				alert(\"This Email already registered.\");
				window.location=\"/Registration\";
				</script>";
        }
        else {
//password match
            if ($pass == $con_pass) {

//if image not select
                $file = Input::file('photo_file');
                if ($file == null) {

                    $img = "null";
                } //IMAGE UPLOAD
                else {
                    $destinationPath = ('user_img');
                    $extension = $file->getClientOriginalExtension();
                    $filename = str_random(12) . ".{$extension}";
                    $img = $file->move($destinationPath, $filename);
                }

                $save = (new Registration)->insertdata($name, $email, $phone, $pass, $img);

                try {

                    echo "<script type=\"text/javascript\">
				alert(\"Registration Request Sent Successfully\");
				window.location=\"/\";
				</script>";

                } catch (Exception $e) {

                    echo "<script type=\"text/javascript\">
				alert(\"There is an issue. Please Refresh the page and try again.\");
				window.location=\"/Registration\";
				</script>";

                }
            }
            else{
                echo "<script type=\"text/javascript\">
				alert(\"Password dosen't match.\");
				window.location=\"/Registration\";
				</script>";
            }
        }
    }



}

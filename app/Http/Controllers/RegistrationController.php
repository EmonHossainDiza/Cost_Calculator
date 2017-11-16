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
        $email = $request->email;
        $phone = $request->phone;
        $pass = $request->pass;
        $con_pass = $request->con_pass;

        $file = Input::file('photo_file');
        $destinationPath =base_path("images");
        $extension = $file->getClientOriginalExtension();
        $filename = str_random(12).".{$extension}";
        $img = $file->move($destinationPath, $filename);


        $save = (new Registration)->insertdata($name, $email, $phone, $pass,$img);
            try {
                //your query


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

}

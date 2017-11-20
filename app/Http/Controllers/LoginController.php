<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Login;

use Session;

class LoginController extends Controller
{
    public function index()
    {


    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function validate_user(request $request)
    {
        $user_email = $request->email;
        $user_pass = $request->pass;

        $check = (new Login)->validate($user_email, $user_pass);

        if (count($check) > 0) {

//            echo $check;
            foreach ($check as $value) {
//                $uName=$value->Name;


                session
                (
                    [

                        'user_type' => $value->User_Type,
                        'user_email' => $value->Email

                    ]
                );
                $insert_log = (new Login)->log();


                //dd($profile_info);

                //return view('Profile', compact('profile_info'));

//                return redirect("/profile/".$uName);
                return redirect("/profile");


            }
        } else {

            //return redirect('/');
            echo "<script type=\"text/javascript\" >
				alert(\"Wrong ID or PASSWORD\");
				window.location=\"/\";
				</script>";
        }


    }

    public function logout()
    {

        $logout_log = (new Login)->logout();

        session::flush();
        return redirect(url('/'));

    }

}

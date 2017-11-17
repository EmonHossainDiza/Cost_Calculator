<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Registration;
use Illuminate\Support\Facades\Input;
use Session;

class UserController extends Controller
{
    public function add_category(resuest $resuest){

        $category_id = $resuest->add_category_id;
        return view('Registration');
    }
}

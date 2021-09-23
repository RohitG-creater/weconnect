<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
    //
    public function index(){
        if(session::exists('user_id')){
            return view('index');
        }
        return view('login');
    }

}

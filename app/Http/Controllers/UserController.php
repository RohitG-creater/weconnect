<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Session;

class UserController extends Controller
{
    //
    public function index(){
        if(session::exists('user_id')){
            $user_id = session('user_id');
            $user_data = Registration::where('ID',$user_id)->first();
            return view('welcome')->with('user_data',$user_data);
        }
        return view('login');
    }

    public function Registration(Request $request){
       $check_email = Registration::where('Email_Address',$request->Email)->first();
       if($check_email != null){
           $message = "Email_Exist"; 
           return response()->json(['message'=>$message]);
       }
       $check_mobile = Registration::where('Mobile_No',$request->Mobile)->first();
       if($check_mobile != null){
            $message = "Mobile_Exist"; 
            return response()->json(['message'=>$message]);
        }
        date_default_timezone_set('Asia/Kolkata');
        $date = date("Y-m-d H:i:s");
        $obj = new Registration();
        $obj->First_Name = $request->First_Name;
        $obj->Last_Name = $request->Last_Name;
        $obj->Email_Address = $request->Email;
        $obj->Password = $request->Password;
        $obj->Mobile_No = $request->Mobile;
        $obj->Gender = $request->gender;
        $obj->DateofBirth = date('Y-m-d H:i:s',strtotime($request->dateofbirth));
        $obj->Reg_Date = $date;
        $obj->save();
        $ID = Registration::select('ID')->where('Email_Address',$request->Email)->first();
        session(['user_id' => $ID]);
        session(['user_email' => $request->Email]);
        return response()->json(['message'=>'success']);
    }

    public function Login(Request $request){
        $check_user = Registration::where('Email_Address',$request->Email_Mobile)->orwhere('Mobile_No',$request->Email_Mobile)->first();
        if($check_user != null){
            $message = "Wrong_Credential"; 
            return response()->json(['message'=>$message]);
        }
        return response()->json(['message'=>'success']);
    }

    public function Logout(){
        session::flush();
        return redirect('/');
    }

}

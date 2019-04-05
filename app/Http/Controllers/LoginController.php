<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
   public function index(){
        return view('login.index');
   } 

   public function check(Request $req){
       $user = DB::table('users')
                    ->where('u_email','=',$req->email)
                    ->where('u_pass','=',$req->pass)
                    ->first();
        if($user){
            echo "welcome".' '.$user->u_name;
        }else{
            return back()->with('success', 'Invalid User!');
        }  
    }
}

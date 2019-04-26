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
            session(['user' => $user]);
            
            if($user->u_type == "Doctor")
            return redirect()->route('doctor.index');
            
            if($user->u_type == "Pharmacy")
            return redirect()->route('pharmacy.index');
        }else{
            return back()->with('success', 'Invalid User!');
        }  
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function index(){
        return view('login.change_password');
   } 

   public function changePassword(Request $req){
       echo 'welcome';
   }
}

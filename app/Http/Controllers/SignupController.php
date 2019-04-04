<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignupController extends Controller
{
    public function index(){
        return view('signup.index');
    }

    public function create(Request $req){
        echo 'data inserted';
    }
    //ajax call function for email 
    public function getEmail($val){
        $result = DB::table('users')->where('u_email','=',$val)->get();
       return $result;
    }
}

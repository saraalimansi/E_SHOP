<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class userController extends Controller
{
    public function login(Request $r){
      $query=DB::select("select * from user where email='$r->email' and password='$r->password'");

      if(count($query)>0){
        Session::put("userID",$query[0]->id);
        return redirect('/home');

      }
    }

    public function register(Request $r){

      $query=DB::insert("INSERT into user(name,email,phone,password,address) values('$r->name' , '$r->email' , '$r->phone' , '$r->password' , '$r->address')");
      return redirect("/login");


    }
}

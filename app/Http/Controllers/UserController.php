<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function viewLoad(){
       
        $data=['anil','peter','test1'];

        return view('users',['users'=>$data]);
    }
    function getData(Request $req)
    {
      //return  $req->input();
        $data =  $req->validate(['username'=>'required','userpassword'=>'required']);
    }
}

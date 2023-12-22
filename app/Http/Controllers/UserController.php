<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;

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
    function index(){
        return DB::select("select * from users");
    }
    function index1(){
        return User::all();
    }
    function getRemote(){
          return Http::get("https:\\regres.in\api\users?page=1");
    }
}

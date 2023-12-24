<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    function userLogin(Request $req){
 
          $data = $req->input();
          print_r($data);
              $req->session()->put('user',[$data['user']]);
           //   print_r(session('user'));
            return  redirect('profile');
    }
}

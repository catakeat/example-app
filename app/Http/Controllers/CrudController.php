<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class CrudController extends Controller
{
    function addMember(Request $req){
       $member = new Member;
       $member->prenume = $req->prenume;
       $member->nume = $req->nume;
       $member->email = $req->email;
       $member->save();
       $all  =  Member::all();
       session()->flash('members', $all);
     
    //  return redirect('add')->withInput(['members' => $all]);
    return view('members',['members'=>$all]);
    }

    function delete($id){
        $member = Member::find($id);
        $member->delete();
        $all= Member::all();

        return view('members',['members'=>$all]);
    }
    function edit($id){
        $member = Member::find($id);
        return view('update',['member'=>$member]);
    }
    function update(Request $req){
        $id = $req->id;
        $member = Member::find($id);
        $member->prenume = $req->prenume;
        $member->nume = $req->nume;
        $member->email = $req->email;

       $member->save();

       $all= Member::all();
       return view('members',['members'=>$all]);
    }
    public function testRouteModelBinding(Member $membr){
        return $membr->nume;

    }
}

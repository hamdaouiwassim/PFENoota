<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use validate;
class UsersController extends Controller
{
    //
    public function changeinfo(Request $request){
        $iduser = Auth::user()->id;
        $user = User::find($iduser);
        
        $user->intro = $request->input('intro');
        $user->description = $request->input('description');
        $user->adresse =$request->input('adresse');
        
        $user->save();
        return redirect()->route('home');
    }
    public function changepwview(){
        $user = Auth::user();
        return view('changepw')->with('user',$user);
    }
    public function changepw(){
        $iduser = Auth::user()->id;
        $user = User::find($iduser);
        //echo $iduser;
        $user->password = bcrypt('wassim');
        $user->save();

    }
}

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
        $this->validate($request, [
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            
            
            //return back()->with('success','Image Upload successfully');
        }
        $user->description = $request->input('description');
        $user->adresse =$request->input('adresse');
        $user->logo =$name;
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

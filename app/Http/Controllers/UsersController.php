<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use validate;
use Hash;
use App\Follower;
use App\Post;
use App\Comment;


class UsersController extends Controller
{
    //
    public function changeinfo(Request $request){

        $iduser = Auth::user()->id;
        $user = User::find($iduser);
        
        request()->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.request()->logo->getClientOriginalExtension();
        request()->logo->move(public_path('images'), $imageName);
        //return back()->with('success','You have successfully upload image.')
        //           ->with('logo',$imageName);
    
        $user->logo = $imageName;
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
    public function changepw(Request $request){
        
        request()->validate([
            
            'newpw' => 'required|min:8',
            'rnewpw' => 'required|min:8',

        ]);
        $iduser = Auth::user()->id;
        $user = User::find($iduser);
        // Password Match
        
            if ( $request->input('newpw') == $request->input('rnewpw') ){
                $user->password = Hash::make($request->input('newpw')); 
                $user->save();
                return view('changepw')->with('msg','تمّ تغيير كلمة المرور بنجاح')->with('type','success');
            }else{
                return view('changepw')->with('msg','كلمتا السرّ غير متطابقتان , الرجاء التأكد')->with('type','erreur');
            } 
        
    }

    public function ShowUser($id){
        $user = User::find($id);
        $talents = explode(",",$user->talents);
        $followed = Follower::where('idwriter',$user->id)
                            ->where('iduser',Auth::user()->id)
                            ->get()->count();
        $numberFlowers = Follower::where('idwriter',$user->id)->get()->count();
        // Calculer la somme des commentaires gagner d'un utilisateurs
        // Selectionner les posts d'un utilisateurs
        $posts = Post::where('iduser',$user->id)->get();
        $numberComments = 0;
        // Calculer les commentaires pour chaque publication utilisateur
        foreach($posts as $post){
           
            $numberComments += Comment::where('idpost',$post->Id)->get()->count();
        
        }
        
        $numbersPosts = Post::where('iduser',$user->id)->get()->count();
        return view('user.userprofile')->with('user',$user)
                                    ->with('talents',$talents)
                                    ->with('nbrpsts',$numbersPosts)
                                    ->with('nbrflws',$numberFlowers)
                                    ->with('nbrcmts',$numberComments)
                                    ->with('posts',$posts)
                                    ->with('followed',$followed);
        

    }
    public function FollowUser($id){

        $userFollowed = User::find($id);
        $user = Auth::user();
        
        $followed = Follower::where('idwriter',$id)
                            ->where('iduser',$user->id)
                            ->get()->count();
        if ($followed == 0 )
        {
        $follow = new Follower();
        $follow->Iduser = $user->id;
        $follow->Idwriter= $id ;
        $follow->save();   
        }
        return redirect('/user/'.$id);
        

    }
}

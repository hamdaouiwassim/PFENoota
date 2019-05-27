<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Signale;
use DB;
class AdminController extends Controller
{
    //
    public function index(){
        //$states = array("Signaled","Blocked");
       /* $states = array();
        $states[] = "Signaled";
        $states[] = "Signaled";
        */
       
        $signaledposts = Post::where('State',"Blocked")
                            ->where('State',"Blocked")
                            ->get();
        //var_dump($signaledposts[0]);
        //$signaledposts = $signaledposts[0];
        $users = User::all();
        foreach($users as $user){
            $usernames[$user->id] = $user->name;

        }
        $nbrsignales = array();
        foreach($signaledposts as $post){
            //var_dump($post);
            //echo $post->Id;
           $nbrsignales[$post->Id][] = Signale::where('Idpost',$post->Id)->count();
                                $user = User::find($post->Iduser);
        
            $nbrsignales[$post->Id][] = $user->State;
        }
        
        //var_dump($nbrsignales);
        return view('admin.adminpanel')->with('nbrsignales',$nbrsignales)->with('users',$usernames)->with('signaledposts',$signaledposts);
   
    }
    public function bloqueUser($id){
        $user = User::find($id);
        $user->State = 'Blocked';
        $user->save();
        return redirect('/admin'); 
    }

    public function bloquePost($id){
        DB::table('posts')->where('id',$id)->update(['State' => 'Blocked']);
       
        return redirect('/admin'); 
    }
}

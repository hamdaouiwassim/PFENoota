<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Post;
use App\Follower;
use App\Comment;
class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $user=Auth::user();
        $talents = explode(",",$user->talents);
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
        return view('home')->with('user',$user)
                                    ->with('talents',$talents)
                                    ->with('nbrpsts',$numbersPosts)
                                    ->with('nbrflws',$numberFlowers)
                                    ->with('nbrcmts',$numberComments);
    }
    public function favourite_writers()
    {

        return view('home');
    }
    public function top_writers()
    {
        return view('home');
    }
    public function monthly_writing_contest()
    {
        return view('home');
    }
    public function statistics()
    {
        return view('home');
    }
}

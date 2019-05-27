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
use App\Reaction;
use App\Bookmark;

use DB;


class UsersController extends Controller
{
    //
    public function changeinfo(Request $request){

        $iduser = Auth::user()->id;
        $user = User::find($iduser);
        
        request()->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'intro' => 'required',
            'description' => 'required',
            'adresse' => 'required',

        ]);
        if (request()->logo){
            $imageName = time().'.'.request()->logo->getClientOriginalExtension();
            request()->logo->move(public_path('images'), $imageName);
            //return back()->with('success','You have successfully upload image.')
            //           ->with('logo',$imageName);
        
            $user->logo = $imageName;
           
        }
        $user->intro = $request->input('intro');
        $user->description = $request->input('description');
        $user->adresse =$request->input('adresse');
        echo $user->logo;
        echo $user->intro;
        echo $user->description;
        echo $user->adresse;
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
        $posts = Post::where('iduser',$user->id)
            ->where('State','publish')
            ->get();
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
    public function UnfollowUser($id){

       
        
        $followed = Follower::where('Idwriter',$id)
                            ->where('Iduser',Auth::user()->id)
                            ->get();
        if (count($followed) > 0 )
        {
            
        //$follow = Follower::find($followed[0]->Id);
        DB::table('followers')->where('Id',$followed[0]->Id)->delete();
        //$follow->delete();   
        }
        return redirect('/user/'.$id);
        

    }
    public function favourite_writers(){
        $writersIds = Follower::where('Iduser',Auth::user()->id)->get();
        $writersIdsArray = Array();
        foreach($writersIds as $writersId){
            $writersIdsArray[] = $writersId->Idwriter;
        }
        $writers = User::whereIn('id',$writersIdsArray)->get();
        //var_dump($writers);
        return view('writers.faveratewriterlist')->with('writers',$writers);
    }
    public function top_writers(){
        $users = User::all();
        $topWriters = array();
        $topWritersDetails = array( 0, 0 , 0 , 0 , 0 );
        foreach ($users as $user){
            $postsUser = Post::where('Iduser',$user->id)
                            //->where('State','publish')
                            ->get();
            $DetailsForUser = 0 ;
            //$reactionsForUser = 0 ;
            //var_dump($postsUser);
            foreach ($postsUser as $post){
                    $DetailsForUser += Comment::where('idpost',$post->Id)->get()->count() + Reaction::where('idpost',$post->Id)->get()->count() ;

            }
            if ( $DetailsForUser >= $topWritersDetails[0] ){


                $topWritersDetails[1] = $topWritersDetails[0];
                $topWritersDetails[2] = $topWritersDetails[1];
                $topWritersDetails[3] = $topWritersDetails[2];
                $topWritersDetails[4] = $topWritersDetails[3];
                $topWritersDetails[0] = $DetailsForUser;

                $topWriters[0] = $user->id;


            }else if ( $DetailsForUser >= $topWritersDetails[1] ){

                $topWritersDetails[2] = $topWritersDetails[1];
                $topWritersDetails[3] = $topWritersDetails[2];
                $topWritersDetails[4] = $topWritersDetails[3];
                $topWritersDetails[1] = $DetailsForUser;

                $topWriters[1] = $user->id;

            }else if ( $DetailsForUser >= $topWritersDetails[2] ){
                $topWritersDetails[3] = $topWritersDetails[2];
                $topWritersDetails[4] = $topWritersDetails[3];
                $topWritersDetails[2] = $DetailsForUser;
                $topWriters[2] = $user->id;
            }else if ( $DetailsForUser >= $topWritersDetails[3] ){

                $topWritersDetails[4] = $topWritersDetails[3];
                $topWritersDetails[3] = $DetailsForUser;
                $topWriters[3] = $user->id;

            }else if ( $DetailsForUser >= $topWritersDetails[4] ){
                $topWritersDetails[4] = $DetailsForUser;
                $topWriters[4] = $user->id;
            }

        }
        $writers = array();
        //var_dump($topWriters);
        $writers = User::whereIn('id',$topWriters)->get();
        //var_dump($writers);
        return view('writers.bestwriters')->with('writers',$writers);
    }
    public function statistics(){
        $Monthposts = Post::where('Iduser',Auth::user()->id)->where('State','publish')->get();
        $Allposts = Post::where('Iduser',Auth::user()->id)
            ->where('State','publish')
            ->whereMonth('created_at', '=', date('m'))
            ->whereYear('created_at', '=', date('Y'))
            ->get();
        $Monthreactions = 0;
        $Monthcomments = 0;
        $AllTimecomments = 0;
        $AllTimereactions = 0;
        $Monthpost=null;
        $MonthCommentsPost = 0;
        $MonthReactionsPost = 0;
        $AllTimepost=null;
        $AllTimeCommentsPost = 0;
        $AllTimeReactionsPost = 0;
        foreach($Monthposts as $post){
            // Monthly
            if ( ( $MonthCommentsPost+$MonthReactionsPost ) <  ( Comment::where('Idpost',$post->Id)->get()->count() + Reaction::where('Idpost',$post->Id)->get()->count() ) ){

                $Monthpost = $post;
                $MonthCommentsPost = Comment::where('Idpost',$post->Id)->get()->count();
                $MonthReactionsPost = Reaction::where('Idpost',$post->Id)->get()->count();
            }


            $Monthcomments += Comment::where('Idpost',$post->Id)->get()->count();
            $Monthreactions += Reaction::where('Idpost',$post->Id)->get()->count();

        }
        $reactions = array();
        $favorites = array();
        $comments = array();

        foreach($Allposts as $post){
            // All Times
            if ( ( $AllTimeCommentsPost+$AllTimeReactionsPost ) <  ( Comment::where('Idpost',$post->Id)->get()->count() + Reaction::where('Idpost',$post->Id)->get()->count() ) ){

                $AllTimepost = $post;
                $AllTimeCommentsPost = Comment::where('Idpost',$post->Id)->get()->count();
                $AllTimeReactionsPost = Reaction::where('Idpost',$post->Id)->get()->count();
            }
            $AllTimecomments += Comment::where('Idpost',$post->Id)->get()->count();
            $AllTimereactions += Reaction::where('Idpost',$post->Id)->get()->count();


                $comment = Comment::where('idpost',$post->Id)->count();
                $react = Reaction::where('idpost',$post->Id)->count();
                $fav = Bookmark::where('idpost',$post->Id)->count();
                $comments[$post->Id] = $comment;
                $reactions[$post->Id] = $react;
                $favorites[$post->Id] = $fav;


        }
        //var_dump($Monthpost);
        $users = User::all();
        return view('user.statistcs')->with('comments',$comments)->with('reactions',$reactions)->with('users',$users)->with('AllTimepost',$AllTimepost)->with('Monthpost',$Monthpost)->with('AllTimereactions',$AllTimereactions)->with('AllTimecomments',$AllTimecomments)->with('Monthreactions',$Monthreactions)->with('Monthcomments',$Monthcomments);
    }
    public function monthly_writing_contest(){
        $reactions = array();
        $favorites = array();
        $comments = array();

        $posts = Post::where('State','publish')->get();
        //$postsMonthDetails = array();
        $postsMonth = array(0,0,0,0,0);
        $topPosts = array();
        foreach ($posts as $post){
            $postsMonthDetails = Comment::where('idpost',$post->Id)->get()->count() +  Reaction::where('idpost',$post->Id)->get()->count() ;
            if ( $postsMonthDetails >= $postsMonth[0] ){


                $postsMonth[1] = $postsMonth[0];
                $postsMonth[2] = $postsMonth[1];
                $postsMonth[3] = $postsMonth[2];
                $postsMonth[4] = $postsMonth[3];
                $postsMonth[0] = $postsMonthDetails;

                $topPosts[0] = $post->Id;


            }else if ( $postsMonthDetails >= $postsMonth[1] ){

                $postsMonth[2] = $postsMonth[1];
                $postsMonth[3] = $postsMonth[2];
                $postsMonth[4] = $postsMonth[3];
                $postsMonth[1] = $postsMonthDetails;

                $topPosts[1] = $post->Id;

            }else if ( $postsMonthDetails >= $postsMonth[2] ){
                $postsMonth[3] = $postsMonth[2];
                $postsMonth[4] = $postsMonth[3];
                $postsMonth[2] = $postsMonthDetails;
                $topPosts[2] = $post->Id;
            }else if ( $postsMonthDetails >= $postsMonth[3] ){

                $postsMonth[4] = $postsMonth[3];
                $postsMonth[3] = $postsMonthDetails;
                $topPosts[3] = $post->Id;

            }else if ( $postsMonthDetails >= $postsMonth[4] ){
                $postsMonth[4] = $postsMonthDetails;
                $topPosts[4] = $post->Id;
            }

        }
        //var_dump($topPosts);
        $posts = Post::whereIn('Id',$topPosts)
            ->where('State','publish')
            ->get();
        foreach ($posts as $post){
            $comment = Comment::where('idpost',$post->Id)->count();
            $react = Reaction::where('idpost',$post->Id)->count();
            $fav = Bookmark::where('idpost',$post->Id)->count();
            $comments[$post->Id] = $comment;
            $reactions[$post->Id] = $react;
            $favorites[$post->Id] = $fav;
        }
        //var_dump($posts);
        $users = User::all();


        return view('posts.bestmonthposts')->with('users',$users)->with('posts',$posts)->with('reactions',$reactions)->with('comments',$comments);


    }

}

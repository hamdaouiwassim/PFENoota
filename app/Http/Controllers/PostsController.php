<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use App\Comment;
use App\Reaction;
use App\Replay;
use App\Signale;
use App\Bookmark;
use Illuminate\Http\Request;
use DB;
use Auth;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('newstory');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->Iduser = $request->user()->id;
        $post->Title = $request->input("title");
        $post->Content = $request->input("storycontent");
        $post->Description = $request->input("description");
        $post->Keywords = $request->input("keywords");
        $post->Lang = "ar";
        $post->State = "publish";
        
        $post->save();

        return redirect('/mywritings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function journal()
    {
        $posts = Post::where('Iduser', Auth::user()->id)->orderBy('updated_at', 'desc')->paginate(15);

        return view('mywritings', compact("posts",$posts));
    }

    public function outer()
    {
        $posts = Post::where('State','publish')->orderBy('updated_at', 'desc')->paginate(7);

        return view('recentposts', compact("posts",$posts));
    }
    public function filter(Request $request){
       $stat = $request->input('posttype');
       if ( $stat == 1 ){
        $posts = Post::where('state','publish')->where('iduser',Auth::user()->id)->get();
       }else if ( $stat == 2 ){
        $posts = Post::where('state','publish')->where('iduser',Auth::user()->id)->get();
       }
       return view('mywritings', compact("posts",$posts));

    }
    public function recents(){
        // Comments Table numbers 
        $posts = Post::where('State','publish')->get();
        $users = User::all();
        $reactions = array();
        $favorites =array();
        $comments = array();
        foreach($posts as $post){
            $comment = Comment::where('idpost',$post->Id)->count();
            $react = Reaction::where('idpost',$post->Id)->count();
            $fav = Bookmark::where('idpost',$post->Id)->count();
            $comments[$post->Id] = $comment;
            $reactions[$post->Id] = $react;
            $favorites[$post->Id] = $fav;
        }
      /*  var_dump($comments);
        echo "<br>========<br>";
        var_dump($reactions); */
       return view('posts.recents')->with("favorites",$favorites)->with("posts",$posts)->with("users",$users)->with('reactions',$reactions)->with('comments',$comments);
    }
    public function singlepost($id){
        $users = User::all();
        // Comments Table numbers 
        $post = Post::find($id);
        $user = User::find($post->Iduser);
        $comments = Comment::where('idpost',$post->Id)->orderBy('created_at', 'desc')->get();
        $reactions = array();
        if (Auth::user()){
            $reactions = Reaction::where('idpost',$post->Id)
                                ->where('iduser',Auth::user()->id)
                                ->get();
        
        }
        $favorites = Bookmark::where('idpost',$post->Id)->get();
        $replays = Replay::all();

      
       return view('posts.singlepost')->with('replays',$replays)->with('favorites',$favorites)->with('users',$users)->with("post",$post)->with("user",$user)->with('reactions',$reactions)->with('comments',$comments);
    }
    public function signaler($id){
        $iduser = Auth::user()->id;
        $idpost = $id;
        $signal = new Signale();
        $signal->Idpost = $idpost;
        $signal->Iduser = $iduser;
        $signal->save();
        //$post = Post::find($id);
        DB::table('posts')->where('id',$id)->update(['State' => 'Signaled']);
        //->update(['State' => 'Signaled']);;
        //var_dump($post);
        //$post->State = 'Signaled';
        //echo $post->State;
        //$post->Lang = "FR";
        //$post->save();
        
        //var_dump($post);
        return redirect('/post/'.$id);
        

    }
    public function Bookmarks(){
    // Comments Table numbers
    
    $bmks = Bookmark::where('Iduser',Auth::user()->id)->get(); 
    $postsids = array();
    foreach($bmks as $bm){
        $postsids[] = $bm->Idpost;
    }
    //var_dump($postsids);
    
    $posts = Post::whereIn('Id',$postsids)->where('State','publish')->get();
    $users = User::all();
    $reactions = array();
        $favorites =array();
    $comments = array();
    foreach($posts as $post){
        $comment = Comment::where('idpost',$post->Id)->count();
        $react = Reaction::where('idpost',$post->Id)->count();
        $fav = Bookmark::where('idpost',$post->Id)->count();
        $comments[$post->Id] = $comment;
        $reactions[$post->Id] = $react;
        $favorites[$post->Id] = $fav;
    }
    /*  var_dump($comments);
    echo "<br>========<br>";
    var_dump($reactions); */
  
    return view('posts.favoris')->with("favorites",$favorites)->with("posts",$posts)->with("users",$users)->with('reactions',$reactions)->with('comments',$comments);
    
    }
    public function PostBookmark($id){
        $idpost = $id;
        $iduser = Auth::user()->id;
        $msg = "هذا المقال موجود في المفضلة الخاصة بك ";
        $favexist = Bookmark::where('Iduser',$iduser)
                                ->where('Idpost',$idpost)
                                ->get();
                                
        if (count($favexist) == 0 ){
            $fav = new Bookmark();
            $fav->Iduser = $iduser;
            $fav->Idpost = $idpost;
            $fav->save();
            $msg = "تمت إضافة المقالة الى المفضلة ";
        }
        return redirect('/post/'.$id)->with('msg',$msg);
    }
    public function addReaction($id,$reaction){
        if ($reaction =="heart"){
            $react = 1;
        }else if ($reaction == "up") {
            $react = 2;
        }else{
            $react = 3;
        }
        $reaexist = Reaction::where('iduser',Auth::user()->id)
                                ->where('idpost',$id)
                                ->get();
        if (count($reaexist) == 0 ){        
        $reactionM = new Reaction();
        $reactionM->iduser =  Auth::user()->id;
        $reactionM->idreact = $react;
        $reactionM->idpost = $id;
        $reactionM->save();
        }else{
            $reactionM =  Reaction::find($reaexist[0]->id);
            $reactionM->idreact = $react;
            $reactionM->save();
        }
        return redirect('/post/'.$id);
    }
}

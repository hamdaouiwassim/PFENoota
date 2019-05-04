<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
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
        $post = new Post([
            "Iduser"=> $request->user()->id,
            "Title"=> $request->input("title"),
            "Content"=> $request->input("storycontent"),
            "Description"=> $request->input("description"),
            "Keywords"=> $request->input("keywords"),
            "Lang"=> "ar",
            "State"=> "publish",
        ]);
        $post->save();

        return view('newstory');
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
        $posts = Post::orderBy('updated_at', 'desc')->paginate(7);

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
        $posts = Post::all();
        $users = User::all();
        return view('posts.recents')->with("posts",$posts)->with("users",$users);
    }
}

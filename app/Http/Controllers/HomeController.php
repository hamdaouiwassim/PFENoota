<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function new_story()
    {
        return view('newstory');
    }
    public function add_new_story(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('storycontent');
        $desc = "";
        $keywords = "";
        $lang = "ar_TN";
        $userId=  $request->user()->id;
        $post = new Post([
            "Title"=>$title,
            "Content"=>$content,
            "Description"=>$desc,
            "Keywords"=>$keywords,
            "Lang"=>$lang,
            "Iduser"=>$userId
        ]);
        $post->save();
        $saved=($post->getAttributes()["id"]);
        return view('newstory')->with('saved',$saved);
    }
    public function journal()
    {
        return view('home');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
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
/*
        $myid=Auth::user()->id;

        $users = DB::table('posts')->where('id', $myid)->first();*/
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

<?php

namespace App\Http\Controllers;
use App\Replay;
use Illuminate\Http\Request;


use Auth;
class ReplaysController extends Controller
{
    //
    public function AddReplay(Request $request){
        $idpost = $request->input('postid') ;
        $replay = new Replay();
        $replay->Idcomment = $request->input('commentid') ;
        $replay->Iduser = Auth::user()->id;
        $replay->Content = $request->input('replayContent');
        $replay->save();
        return redirect('/post/'.$idpost);
    }
}

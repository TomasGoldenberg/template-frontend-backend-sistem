<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Instagram;
use App\InstaDetail;

class PageController extends Controller
{
    public function home(){
        return view("home");
    }

    public function posts(Request $request){
        $title= $request->get("title");
        $body= $request->get("body");

        $posts= Post::with("user")
            ->latest()
            ->title($title)
            ->body($body)
            ->paginate();

        return view("posts", compact("posts","title","body"));

        
    }

    public function post(Post $post){
        return view("post",["post" => $post]);
    }

    public function instagram(){
        return view("instagram",[
            "categories" => Instagram::all()
        ])  ;}

    public function instadetail($id){
        $instagram= Instagram::findOrFail($id);
        return view("instadetail",compact("instagram"));
        
    
    }
}

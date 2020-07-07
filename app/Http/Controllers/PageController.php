<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

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
}

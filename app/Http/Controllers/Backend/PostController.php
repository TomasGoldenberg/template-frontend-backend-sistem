<?php

namespace App\Http\Controllers\Backend;

use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->get();

        return view("posts.index",compact('posts'));
    }

    public function create()
    {
        return view("posts.create");
    }


    public function store(PostRequest $request)
    {
        //guardar
        $post = Post::create([
            "user_id"   => auth()->user()->id //el user id es el del user autenticado en ese momento
        ] + $request->all()); //al user_id le agregamos toda la info del request
        
        //img
        if($request->file("file")){//"file" es el name del input html
            $post->image= $request->file("file")->store("posts","public");//crea la carpeta posts y guarda ahi las imagenes, luego guardaremos la ruta a cada una de ellas en la DB
            $post->save();
        }
        //redirect
        return back()->with("status","Creado con Exito !");
    }



    public function edit(Post $post)
    {
        return view("posts.edit",compact('post'));
    }


    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->all());

        Storage::disk("public")->delete($post->image);
        if($request->file("file")){//"file" es el name del input html para la imagen
            
            $post->image= $request->file("file")->store("posts","public");//crea la carpeta posts y guarda ahi las imagenes, luego guardaremos la ruta a cada una de ellas en la DB
            $post->save();
        }

        return back()->with("status","Actualizado con Exito !");
    }


    public function destroy(Post $post)
    {
        Storage::disk("public")->delete($post->image);

        $post->delete();

        return back()->with("status","Eliminado Con Exito !");
    }
}

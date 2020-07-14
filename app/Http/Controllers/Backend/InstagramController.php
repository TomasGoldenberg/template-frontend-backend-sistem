<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Instagram;


class InstagramController extends Controller
{
    public function index(){
        $categories = Instagram::latest()->get();

        return view("instagram.index",compact('categories'));
    }

    public function create(){
        return view("instagram.create");
    }
    

    public function store(Request $request){
        $category = Instagram::create($request->all());
        $category->save();
        return redirect()->
            route("instagram.index")
            ->with("status","Creado con Exito !");

    }

    public function show(Instagram $instagram){
        return view("instagram.show",compact('instagram'));
    }

    public function destroy(Instagram $instagram){
        $instagram->delete();
        return back()->with("status","Categoria Eliminada");
    }
}

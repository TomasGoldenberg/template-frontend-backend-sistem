<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gmail;


class GmailController extends Controller
{
    public function index(){
        $categories = Gmail::latest()->get();

        return view("gmail.index",compact("categories"));
    }

    public function create(){
        return view("gmail.create");
    }

    public function store(Request $request){
        $category = Gmail::create($request->all());
        $category->save();

        return redirect()->
            route("gmail.index")
            ->with("status","Categoria Creada !");
    }

    public function show(Gmail $gmail){
        return view("gmail.show",compact("gmail"));
    }

    public function destroy(Gmail $gmail){
        $gmail->delete();
        return back()->with("status","Categoria Eliminada");
    }
}

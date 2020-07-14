<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\InstaDetail;
use App\Instagram;


class InstaDetailController extends Controller
{
    public function create(Instagram $instagram){
        return view("instaDetails.create",compact('instagram'));
    }

    public function store(Request $request, Instagram $instagram){
        $detail = InstaDetail::create([
            "instagram_id"=> $instagram->id
        ]+$request->all());
        
        $detail->save();

        return redirect()
            ->route("instagram.show",$instagram)
            ->with("status","Informacion Guardada Exitosamente");
    }

    public function edit(Instagram $instagram, $id){
        $instaDetail = InstaDetail::findOrFail($id);
        return view("instaDetails.edit",compact('instagram','instaDetail'));
    }

    public function update(Instagram $instagram,$id,Request $request){
        $instaDetail = InstaDetail::findOrFail($id);
        $instaDetail->update($request->all());
        $instaDetail->save();

        return redirect()
        ->route("instagram.show",$instagram)
        ->with("status","Informacion Actualizada Exitosamente");
    }

    public function destroy(Instagram $instagram,$id){
        $instaDetail = InstaDetail::findOrFail($id);
        $instaDetail->delete();
        return back()->with("status","Detalle Eliminada");

    }
}

<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use App\GmailDetail;
use App\Gmail;


class GmailDetailController extends Controller
{
    public function create(Gmail $gmail){
        return view("gmailDetails.create",compact("gmail"));
    }

    public function store(Request $request,Gmail $gmail){
   
        $detail = GmailDetail::create([
            "gmail_id"=>$gmail->id
        ]+ $request->all());
        $detail->save();

        return redirect()
            ->route("gmail.show",$gmail)
            ->with("status","Mensaje Guardado con Exito");
    }

    public function edit(Gmail $gmail,$id){
        $detail= GmailDetail::findOrFail($id);
        return view("gmailDetails.edit",compact("gmail","detail"));
    }

    public function update(Gmail $gmail,$id,Request $request){
        $detail= GmailDetail::findOrFail($id);
        $detail->update($request->all());
        $detail->save();

        return redirect()
            ->route("gmail.show",$gmail)
            ->with("status","Informacion Actualizada Exitosamente");

    }


    public function destroy(Gmail $gmail,$id){
        $detail= GmailDetail::findOrFail($id);
        $detail->delete();
        return back()->with("status","Mensaje Eliminado");
    }
}

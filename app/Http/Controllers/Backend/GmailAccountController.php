<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use App\GmailAccount;
use App\Gmail;

class GmailAccountController extends Controller
{
    public function create(Gmail $gmail){
        return view("gmailAccounts.create",compact("gmail"));
    }

    public function store(Request $request,Gmail $gmail){
        
        $account = GmailAccount::create([
            "gmail_id" => $gmail->id
        ] + $request->all());
        $account->save();

        return redirect()
            ->route("gmail.show",$gmail)
            ->with("status","Cuenta Guardada Exitosamente");
    }
}

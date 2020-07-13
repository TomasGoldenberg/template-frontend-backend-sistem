<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\InstaAccount;
use App\Instagram;

class InstaAccountController extends Controller
{
    public function create(Instagram $instagram){
        return view("instaAccounts.create",compact('instagram'));
    }

    public function store(Request $request, Instagram $instagram){
        $account = InstaAccount::create([
            "instagram_id"=> $instagram->id
        ]+$request->all());
        
        $account->save();

        return redirect()
            ->route("instagram.show",$instagram)
            ->with("status","Cuenta Guardada Exitosamente");
    }
}

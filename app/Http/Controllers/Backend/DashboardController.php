<?php

namespace App\Http\Controllers\Backend;


use App\User;

class DashboardController extends Controller
{
    public function index(User $user){
        return view("dashboard",[

            "users" => $user->latest()->take(4)->get()
        ]);
    }
}

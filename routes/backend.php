<?php


Route::get("/dashboard" , "DashboardController@index")->name("dashboard");

Route::resource("/posts","PostController")->except("show");
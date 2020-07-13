<?php


Route::get("/dashboard" , "DashboardController@index")->name("dashboard");

Route::resource("/posts","PostController")->except("show");


Route::resource("/instagram","InstagramController");

Route::resource("/instagram.instadetails","InstaDetailController");
Route::resource("/instagram.instaaccounts","InstaAccountController");


Route::resource("/gmail","GmailController");


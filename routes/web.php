<?php

use Illuminate\Support\Facades\Route;



Route::get('/', "PageController@home")->name("home");

Route::get('/blog', "PageController@posts")->name("posts");
Route::get('/blog/{post:slug}', "PageController@post")->name("post");



Auth::routes();


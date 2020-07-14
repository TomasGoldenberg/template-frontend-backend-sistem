<?php

use Illuminate\Support\Facades\Route;



Route::get('/', "PageController@home")->name("home");

Route::get('/blog', "PageController@posts")->name("posts");
Route::get('/blog/{post:slug}', "PageController@post")->name("post");


Route::get("/instagram","PageController@instagram")->name("instagram");
Route::get("/instagram/{instadetail}","PageController@instadetail" )->name("instadetail");

Route::get("/gmail","PageController@gmail")->name("gmail");
Route::get("/gmail/{gmaildetail}","PageController@gmaildetail")->name("gmaildetail");


Route::resource("/expenseReport" , "ExpenseReportController");

Route::resource("/expenseReport.expenses" ,"ExpenseController");

Route::get("/expenseReport/{expenseReport}/confirmSendMail","ExpenseReportController@confirmSendMail")->name("expenseReport.confirmSendMail");
Route::post("/expenseReport/{expenseReport}/sendMail","ExpenseReportController@sendMail")->name("expenseReport.sendMail");


Auth::routes();


<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});


Route::get('/anggota',function (){
    return view('card');
   });


Route::get('/loginadmin',function (){
    return view('login');
   });


Route::get('/signup',function (){
    return view('signup');
   });
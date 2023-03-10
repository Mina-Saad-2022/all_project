<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Users\User_conrtoller;

Route::group(['prefix'=>'admin/users'],function (){


    /*********************** to import books data ***********************/

    Route::post('/index',[User_conrtoller::class,'users_import'])->name('upload_users');

    Route::get('/all',[User_conrtoller::class,'all_user'])->name('users_data');
});

Route::get('/',[User_conrtoller::class,'all_user']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Open_Pages\Pages_controller;

Route::group(['prefix' => 'admin'], function()
{

    /*********************** to open import page ***********************/

    Route::get('/import',[Pages_controller::class,'import_page'])->name('import_page');

    /*********************** to open books page ***********************/

    Route::get('/Books',[Pages_controller::class,'books_page'])->name('books_page');


    /*********************** to open Users page ***********************/

    Route::get('/Users',[Pages_controller::class,'users_page'])->name('users_page');


});
//Route::get('/',[Pages_controller::class,'login']);


Route::group(['prefix' => '/'], function(){
    Route::get('/admin/login',[Pages_controller::class,'login'])->name('login');

});


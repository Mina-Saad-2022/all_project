<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Books\Book_conrtoller ;

Route::group(['prefix'=>'admin'],function (){


    /*********************** to import books data ***********************/

    Route::post('/index',[Book_conrtoller::class,'import_books'])->name('upload_books');

    /*********************** to view all books in table ***********************/

    Route::get('/Books',[BookController::class,'index']);

});

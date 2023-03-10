<?php

namespace App\Http\Controllers\Open_Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pages_controller extends Controller
{
    /*********************** to open books page ***********************/

    public  function books_page(){
        return view('books.index');
    }

    /*********************** to open users page ***********************/

    public function users_page(){
        return view('users.index');
    }


    /*********************** to open import page ***********************/

    public function import_page(){
        return view('import.index');
    }

    public function login(){
        return view('welcome');
    }
}

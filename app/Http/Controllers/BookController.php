<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {

        $books = Book::get();

        return view('books.index',compact('books'));

    }
    public function show(){
        return view('layout.menu-bottom');
    }
}

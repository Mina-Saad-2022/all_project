<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Books\Book_model;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
 use App\Imports\Books\Books_import;


class Book_conrtoller extends Controller
{


    /*********************** to import books data  in database by excel ***********************/

    public function import_books(Request $request){

        Excel::import(new Books_import , $request -> upload_books);
        return redirect(route('books_page'));

    }

    /*********************** to view all books in table ***********************/

    public function index()
    {

        $Books = Book_model::get();

        return view('books.index',compact('Books'));

    }


}

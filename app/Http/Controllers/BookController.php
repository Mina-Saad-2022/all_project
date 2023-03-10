<?php
//
//namespace App\Http\Controllers;
//
//use App\Imports\User_import;
//use App\Models\Book;
//use Illuminate\Http\Request;
//use Maatwebsite\Excel\Facades\Excel;
//
//
//class BookController extends Controller
//{
//    public function index()
//    {
//
//        $books = Book::get();
//
//return view('books.index',compact('books'));
//
//}
//public function show(){
//    return view('layout.menu-bottom');
//}
//
//public  function  page_import(){
//    return view('books/import');
//}
//
//public function uplode_user(Request $request){
//
//    Excel::import(new User_import, $request->file_users);
//
//}
//}

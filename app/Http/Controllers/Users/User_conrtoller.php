<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Imports\Users\Users_import;
use App\Models\Users\User_model;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class User_conrtoller extends Controller
{
    /********************* for import user data in database by excel *********************/

    public function users_import(Request $request){

        Excel::import(new Users_import , $request -> upload_users);
        return redirect(route('users_page'));


    }

    public function all_users(){
        $data =User_model::all();
        return view('users.index',['user_data'=>$data]);
    }

    public function all_user()
    {
        $data =  User_model::all();
        return view('users.index',['user_data'=>$data]);

    }

}

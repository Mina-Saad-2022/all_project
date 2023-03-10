<?php

namespace App\Imports\Users;

use App\Models\Users\User_model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class Users_import implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */


    public function model(array $row)
    {

        return new User_model
        ([

            'name'  => $row['name'],
            'email' => $row['email'],
            'phone' => $row['phone']
        ]);
    }
}

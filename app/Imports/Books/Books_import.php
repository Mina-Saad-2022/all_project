<?php

namespace App\Imports\Books;

use App\Models\Books\Book_model;
use App\Models\Users\User_model;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Books_import implements ToModel, WithHeadingRow

{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */



    public function model(array $row)
    {
        return new Book_model
        ([

            'title'  => $row['title'],
            'des' => $row['description'],
            'image' => $row['image']
        ]);
    }
}

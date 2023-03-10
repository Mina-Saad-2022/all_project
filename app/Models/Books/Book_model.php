<?php

namespace App\Models\Books;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_model extends Model
{
    use HasFactory;

    protected $table = 'books';


    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}

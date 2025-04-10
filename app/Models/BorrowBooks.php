<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BorrowBooks extends Model
{
    protected $table = "borrow_books";

    protected $fillable = [
        'student_id',
        'book_id',
    ];
}

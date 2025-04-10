<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Return_logs extends Model
{
    protected $table = "returned_logs";

    protected $fillable = [
        'student_id',
        'book_id'
    ];
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserBorrowBooksController extends Controller
{
    public function index(){
        return view('tenant.user.borrowBooks');
    }
}

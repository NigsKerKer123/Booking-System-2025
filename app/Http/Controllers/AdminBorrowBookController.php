<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBorrowBookController extends Controller
{
    public function index(){
        return view('tenant.admin.borrowBooks');
    }
}

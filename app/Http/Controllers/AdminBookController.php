<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBookController extends Controller
{
    public function index(){
        return view('tenant.admin.books');
    }
}

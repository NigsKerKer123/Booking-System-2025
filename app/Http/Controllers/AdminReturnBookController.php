<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminReturnBookController extends Controller
{
    public function index(){
        return view('tenant.admin.returnBooks');
    }
}

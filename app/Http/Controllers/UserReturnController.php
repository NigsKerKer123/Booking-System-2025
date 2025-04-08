<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserReturnController extends Controller
{
    public function index(){
        return view('tenant.user.returnBooks');
    }
}

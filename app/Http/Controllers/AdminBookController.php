<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class AdminBookController extends Controller
{
    public function index(){
        return view('tenant.admin.books');
    }

    public function store(){
        
    }

    public function update(){

    }

    public function destroy(){

    }
}

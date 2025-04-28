<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandlordDashboardController extends Controller
{
    public function index()
    {
        return view('landlord.dashboard');
    }
}

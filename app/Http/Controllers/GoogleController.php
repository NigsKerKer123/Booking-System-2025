<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\Students;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $student = Students::where('email', $googleUser->email)->first();

            if (!$student) {
                return redirect('/welcome')->withErrors('Student does not exist.');
            }
        
            Auth::guard('students')->login($student);
            
            return redirect()->route('admin.book.index')->with('success', 'login successfully!');
        } catch (\Exception $e) {
            return redirect('/welcome')->withErrors('Login failed');
        }
    }

    public function logout()
    {
        Auth::guard('students')->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/welcome')->with('success', 'Logged out successfully.');
    }
}


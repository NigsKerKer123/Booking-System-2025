<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class RegisterTenantController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request)
    {
        try {
            // Validate first
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8',
                'subdomain' => 'required|string|max:10',
                'subscription' => 'required|in:free,pro',
            ]);

            // Wrap logic in DB transaction for safety
            DB::beginTransaction();

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'subdomain' => $request->subdomain,
                'password' => bcrypt($request->password),
                'subscription' => $request->subscription,
                'role' => 'tenant',
            ]);

            $tenant = Tenant::create([
                'name' => $request->name,
            ]);

            $tenant->domains()->create([
                'domain' => $request->subdomain,
            ]);

            $user->tenants()->attach($tenant->id);

            event(new Registered($user));

            DB::commit();

            return redirect()->route('welcome')->with('success', 'Tenant registered successfully!');
        } catch (ValidationException $e) {
            // Let Laravel handle validation errors normally
            throw $e;
        } catch (\Exception $e) {
            DB::rollBack();

            // Optionally log the error for debugging
            Log::error('Tenant registration failed: ' . $e->getMessage());

            return redirect()->route('register')->with('error', 'Something went wrong while registering the tenant.');
        }
    }
}

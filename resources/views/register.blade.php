@extends('app')

@section('title', 'Register')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-300">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="mb-6 text-2xl font-bold text-center text-gray-700">Create an Account</h2>
        <form method="POST" action="" class="space-y-4">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" id="name" name="name" value="" required autofocus
                    class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email address</label>
                <input type="email" id="email" name="email" value="" required
                    class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- subdomain and subcription -->
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Sub domain</label>
                    <input type="text" id="first_name" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <div>
                    <label for="subscription" class="block mb-2 text-sm font-medium text-gray-900">Subscription</label>
                    <select id="subscription" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option selected>Select Subscription</option>
                        <option value="free">free</option>
                        <option value="pro">pro</option>
                    </select>
                </div>
                
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- Submit -->
            <div>
                <button type="submit"
                    class="w-full px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Register
                </button>
            </div>

            <div class="text-sm text-center text-gray-500">
                Already have an account?
                <a href="" class="text-blue-600 hover:underline">Login</a>
            </div>
        </form>
    </div>
</div>
@endsection
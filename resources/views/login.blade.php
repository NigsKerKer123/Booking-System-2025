@extends('app')

@section('title', 'Register')

@section('content')
<section class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="container mx-auto px-6 py-8">
        <div class="flex flex-col items-center">
            <div class="w-full max-w-md bg-white rounded-lg shadow-lg border">
                <div class="p-8 space-y-6">
                    <h1 class="text-2xl font-extrabold text-gray-800">
                        Sign in to your account
                    </h1>
                    <form class="space-y-6" action="{{route('login.post')}}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="name@company.com" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember" type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
                            </div>
                            <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 text-white font-medium rounded-lg text-sm px-5 py-3 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">
                            Sign in
                        </button>
                        <p class="text-sm text-gray-600">
                            Don’t have an account yet? <a href="{{route('register')}}" class="text-blue-600 hover:underline">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
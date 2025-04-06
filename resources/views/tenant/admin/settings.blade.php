@extends('layouts.app')

@section('title', 'Settings')

@include('tenant.admin.sidebar')

@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-4 mt-20">
        <div class="grid grid-cols-2 gap-4 mb-4">
            <!-- change pass card -->
            <div class="h-auto rounded-sm h-28 bg-gray-50 shadow-md">
                <p class="text-lg p-4 text-gray-500">
                Change Password
                </p>
                <!-- settings form -->
                 <div class="p-4">
                    <form>
                        <div class="mb-6">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required />
                        </div> 
                        <div class="mb-6">
                            <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900">Confirm password</label>
                            <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required />
                        </div> 
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                    </form>
                 </div>
            </div>
        </div>

        <!-- customize -->
        <div class="grid grid-cols-2 gap-4">

            <!-- change pass card -->
            <div class="h-auto rounded-sm h-28 bg-gray-50 shadow-md">
                <p class="text-lg p-4 text-gray-500">
                Change Password
                </p>
                <!-- settings form -->
                 <div class="p-4">
                    <form>
                        <div class="mb-6">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required />
                        </div> 
                        <div class="mb-6">
                            <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900">Confirm password</label>
                            <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required />
                        </div> 
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                    </form>
                 </div>
            </div>
        </div>
   </div>
</div>
@endsection
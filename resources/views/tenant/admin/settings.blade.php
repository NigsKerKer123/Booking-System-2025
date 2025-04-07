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

            <!-- customize card -->
            <div class="h-auto rounded-sm h-28 bg-gray-50 shadow-md">
                <p class="text-lg p-4 text-gray-500">
                Customize
                </p>
                <!-- Customize form -->
                <div class="p-4">
                    <form action="#" method="POST" enctype="multipart/form-data" class="space-y-5">
                        @csrf

                        <!-- Logo Upload -->
                        <div>
                            <label for="logo" class="block text-sm font-medium text-gray-700 mb-1">Brand Logo</label>
                            <input type="file" id="logo" name="logo" accept="image/*" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                                file:rounded-full file:border-0
                                file:text-sm file:font-semibold
                                file:bg-blue-50 file:text-blue-700
                                hover:file:bg-blue-100"/>
                        </div>

                        <!-- Primary Color -->
                        <div>
                            <label for="primary_color" class="block text-sm font-medium text-gray-700 mb-1">Color</label>
                            <input type="color" id="primary_color" name="primary_color" value="#000000"
                                class="w-16 h-10 rounded border border-gray-300 cursor-pointer" />
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                    </form>
                </div>
            </div>
        </div>
   </div>
</div>
@endsection
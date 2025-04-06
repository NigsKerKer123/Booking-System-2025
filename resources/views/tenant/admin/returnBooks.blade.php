@extends('layouts.app')

@section('title', 'Return Books')

@include('tenant.admin.sidebar')

@section('content')
<div class="p-4 sm:ml-64"> 
    <div class="p-4 mt-22">
        <!-- Borrow Books -->
        <div class="flex flex-col h-170 mb-4 rounded-sm bg-gray-50 shadow-md overflow-y-auto overflow-x-auto">
            <div class="flex justify-between items-center">
                <p class="text-lg p-4 text-gray-500">
                Borrowed Books
                </p>

                <div class="mr-4">
                    <form class="flex items-center max-w-lg mx-auto">   
                        <div class="relative w-full"> 
                            <input type="text" id="search" class="bg-gray-100 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Search Students" required />
                        </div>
                        <button type="submit" class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>Search
                        </button>
                    </form>
                </div>
            </div>

            <!-- table -->
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Student ID
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            College
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            School year
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Book Title
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Book Author
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            2123214
                        </th>
                        <td class="px-6 py-4 whitespace-nowrap">
                            Robert Palma
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            College of Technologies
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            4
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            Pride and Prejudice Jane Austen.
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            Jane Austen
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                                4:05PM 05/04/2026
                            </td>
                        <td class="px-6 py-4 text-center  whitespace-nowrap">
                            <button type="button" data-modal-target="manage-modal" data-modal-toggle="manage-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Return</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Books')

@include('tenant.admin.sidebar')

@section('content')
<div class="p-4 sm:ml-64">
   <div class="pl-4 pr-2 mt-22 flex justify-end">
      <!-- add button -->
         <button type="button" data-modal-target="add-modal" data-modal-toggle="add-modal" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add Books</button>
   </div>

    <div class="p-4">
        <div class="flex flex-col h-160 mb-4 rounded-sm bg-gray-50 shadow-md overflow-y-auto overflow-x-auto">
         <div class="flex justify-between items-center">
            <p class="text-lg p-4 text-gray-500">
               Manage Books
            </p>
         </div>

         <!-- table -->
         <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                  <tr>
                     <th scope="col" class="px-6 py-3 whitespace-nowrap">
                        Book ID
                     </th>
                     <th scope="col" class="px-6 py-3 whitespace-nowrap">
                        Book Title
                     </th>
                     <th scope="col" class="px-6 py-3 whitespace-nowrap">
                        Author
                     </th>
                     <th scope="col" class="px-6 py-3 whitespace-nowrap">
                        Quantity
                     </th>
                     <th scope="col" class="px-6 py-3 whitespace-nowrap">
                        Registration Date
                     </th>
                     <th scope="col" class="px-6 py-3 text-center">
                        Action
                     </th>
                  </tr>
            </thead>
            <tbody>
                  <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        1
                     </th>
                     <td class="px-6 py-4 whitespace-nowrap">
                        Pride and Prejudice Jane Austen.
                     </td>
                     <td class="px-6 py-4">
                        Jane Austen
                     </td>
                     <td class="px-6 py-4">
                        3
                     </td>
                     <td class="px-6 py-4 whitespace-nowrap">
                        4:05PM 05/04/2026
                     </td>
                     <td class="px-6 py-4 text-center  whitespace-nowrap">
                        <button type="button" data-modal-target="manage-modal" data-modal-toggle="manage-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Manage</button>

                        <button type="button" data-modal-target="remove-modal" data-modal-toggle="remove-modal" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Remove</button>
                     </td>
                  </tr>
            </tbody>
         </table>
        </div>
    </div>
</div>
@endsection
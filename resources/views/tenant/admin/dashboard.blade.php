@extends('layouts.app')

@section('title', 'Dasboard')
@include('tenant.admin.sidebar')

@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-4 mt-20">

      <!-- generate report -->
      <div class="flex justify-end mb-4">
         <button type="button" class="shadow-md focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Generate Reports</button>
      </div>
      

      <!-- 3 status-->
      <div class="grid grid-cols-3 gap-4 mb-4">
         <div class="flex flex-col items-center justify-center h-30 p-4 rounded-lg bg-gray-50 shadow-md">
            <p class="text-lg font-medium text-black">
               TOTAL STUDENTS
            </p>
            <p class="text-4xl font-medium text-black">
               100
            </p>
         </div>
         <div class="flex flex-col items-center justify-center h-30 p-4 rounded-lg bg-gray-50 shadow-md">
            <p class="text-lg font-medium text-black">
                BOOKS
            </p>
            <p class="text-4xl font-medium text-black">
               100
            </p>
         </div>
         <div class="flex flex-col items-center justify-center h-30 p-4 rounded-lg bg-gray-50 shadow-md">
            <p class="text-lg font-medium text-black">
                BOOKS BORROWED
            </p>
            <p class="text-4xl font-medium text-black">
               100
            </p>
         </div>
      </div>

      <!-- books borrowed -->
      <div class="flex flex-col h-100 mb-4 rounded-sm bg-gray-50 shadow-md overflow-y-auto">
         <p class="text-lg p-4 text-gray-500">
            Student Borrowed Books
         </p>
         
         <!-- table -->
         <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                  <tr>
                     <th scope="col" class="px-6 py-3 whitespace-nowrap">
                        Student ID
                     </th>
                     <th scope="col" class="px-6 py-3 whitespace-nowrap">
                        Student Name
                     </th>
                     <th scope="col" class="px-6 py-3 whitespace-nowrap">
                        Book Title
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Quantity
                     </th>
                     <th scope="col" class="px-6 py-3 whitespace-nowrap">
                        Date Borrowed
                     </th>
                     <th scope="col" class="px-6 py-3 whitespace-nowrap">
                        Due Date
                     </th>
                     <th scope="col" class="px-6 py-3 text-center">
                        Returned Date
                     </th>
                     <th scope="col" class="px-6 py-3 text-center">
                        Action
                     </th>
                  </tr>
            </thead>
            <tbody>
                  <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        2100402024
                     </th>
                     <td class="px-6 py-4 whitespace-nowrap">
                        Robert Palma
                     </td>
                     <td class="px-6 py-4">
                        Pride and Prejudice Jane Austen.
                     </td>
                     <td class="px-6 py-4">
                        3
                     </td>
                     <td class="px-6 py-4 whitespace-nowrap">
                        4:05PM 05/04/2025
                     </td>
                     <td class="px-6 py-4 whitespace-nowrap">
                        4:05PM 05/04/2025
                     </td>
                     <td class="px-6 py-4 whitespace-nowrap">
                        4:05PM 05/04/2025
                     </td>
                     <td class="px-6 py-4 text-center">
                        <button type="button" data-modal-target="manage-modal" data-modal-toggle="manage-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">More</button>
                     </td>
                  </tr>
            </tbody>
         </table>
      </div>

      <!-- Student and Books activity logs -->
      <div class="h-100 grid grid-cols-2 gap-4 mb-4">
         <div class="h-full rounded-sm h-28 bg-gray-50 shadow-md overflow-y-auto overflow-x-auto">
            <p class="text-lg p-4 text-gray-500">
               Student Activity Logs
            </p>

            <!-- student table -->
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
               <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                     <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                           Account ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Student ID
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap text-center">
                           Event
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap text-center">
                           Date
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap text-center">
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
                           20120204020
                        </td>
                        <td class="px-6 py-4">
                           update_student
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                           4:05PM 05/04/2025
                        </td>
                        <td class="px-6 py-4">
                           <div class="flex gap-4 justify-center items-center">
                              <button type="button" data-modal-target="remove-log-modal" data-modal-toggle="remove-log-modal" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Remove</button>
                           </div>
                        </td>
                     </tr>
               </tbody>
            </table>
         </div>

         <!-- Pending tenant notification -->
         <div class="h-full rounded-sm h-28 bg-gray-50 shadow-md overflow-y-auto overflow-x-auto">
            <p class="text-lg p-4 text-gray-500">
               Book Activity Logs
            </p>

            <!-- books table -->
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
               <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                     <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                           Account ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Book ID
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap text-center">
                           Event
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap text-center">
                           Date
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap text-center">
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
                           1
                        </td>
                        <td class="px-6 py-4">
                           update_book
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                           4:05PM 05/04/2025
                        </td>
                        <td class="px-6 py-4">
                           <div class="flex gap-4 justify-center items-center">
                              <button type="button" data-modal-target="remove-log-modal" data-modal-toggle="remove-log-modal" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Remove</button>
                           </div>
                        </td>
                     </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Dasboard')

@include('landlord.sidebar')
@include('landlord.modal')

@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-4 mt-14">

      <!-- generate report -->
      <div class="flex justify-end mb-4">
         <button type="button" class="shadow-md focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Generate Reports</button>
      </div>
      

      <!-- 3 col-->
      <div class="grid grid-cols-3 gap-4 mb-4">
         <div class="flex flex-col items-center justify-center h-30 p-4 rounded-lg bg-gray-50 shadow-md">
            <p class="text-lg font-medium text-black">
               TOTAL TENANTS
            </p>
            <p class="text-4xl font-medium text-black">
               100
            </p>
         </div>
         <div class="flex flex-col items-center justify-center h-30 p-4 rounded-lg bg-gray-50 shadow-md">
            <p class="text-lg font-medium text-black">
               ACTIVE TENANTS
            </p>
            <p class="text-4xl font-medium text-black">
               100
            </p>
         </div>
         <div class="flex flex-col items-center justify-center h-30 p-4 rounded-lg bg-gray-50 shadow-md">
            <p class="text-lg font-medium text-black">
               PENDING TENANTS
            </p>
            <p class="text-4xl font-medium text-black">
               100
            </p>
         </div>
      </div>

      <!-- 1 col -->
      <div class="flex flex-col h-100 mb-4 rounded-sm bg-gray-50 shadow-md overflow-y-auto">
         <p class="text-lg p-4 text-gray-500">
            Tenant Status
         </p>
         
         <!-- table -->
         <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                  <tr>
                     <th scope="col" class="px-6 py-3">
                        Tenant_ID
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Domain
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Subscription
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Status
                     </th>
                     <th scope="col" class="px-6 py-3 whitespace-nowrap">
                        Subcription Date
                     </th>
                     <th scope="col" class="px-6 py-3 whitespace-nowrap">
                        Expiration Date
                     </th>
                     <th scope="col" class="px-6 py-3 text-center">
                        Action
                     </th>
                  </tr>
            </thead>
            <tbody>
                  <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        tenant_1
                     </th>
                     <td class="px-6 py-4">
                        buksu.domain.com
                     </td>
                     <td class="px-6 py-4">
                        pro
                     </td>
                     <td class="px-6 py-4">
                        active
                     </td>
                     <td class="px-6 py-4 whitespace-nowrap">
                        4:05PM 05/04/2025
                     </td>
                     <td class="px-6 py-4 whitespace-nowrap">
                        4:05PM 05/04/2025
                     </td>
                     <td class="px-6 py-4 text-center">
                        <button type="button" data-modal-target="manage-modal" data-modal-toggle="manage-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Manage</button>
                     </td>
                  </tr>
            </tbody>
         </table>
      </div>

      <!-- 2 col -->
      <div class="h-100 grid grid-cols-2 gap-4 mb-4">

         <!-- activity logs -->
         <div class="h-full rounded-sm h-28 bg-gray-50 shadow-md overflow-y-auto overflow-x-auto">
            <p class="text-lg p-4 text-gray-500">
               Tenant Activity Logs
            </p>

            <!-- table -->
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
               <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                     <tr>
                        <th scope="col" class="px-6 py-3">
                           Tenant_ID
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                           Domain
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Request
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                           DATE & TIME
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap text-center">
                           Action
                        </th>
                     </tr>
               </thead>
               <tbody>
                     <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                           tenant_1
                        </th>
                        <td class="px-6 py-4 whitespace-nowrap">
                           buksu.domain.com
                        </td>
                        <td class="px-6 py-4">
                           GET
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
               Pending Tenants
            </p>

            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
               <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                     <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                           Tenant_ID
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                           Request Domain
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                           Request Subscription
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                           DATE & TIME
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap text-center">
                           Action
                        </th>
                     </tr>
               </thead>
               <tbody>
                     <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                           tenant_1
                        </th>
                        <td class="px-6 py-4">
                           buksu.domain.com
                        </td>
                        <td class="px-6 py-4">
                           Pro
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                           4:05PM 05/04/2025
                        </td>
                        <td class="px-6 py-4">
                           <div class="flex gap-1 justify-center items-center">
                              <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Accept</button>
                              <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Decline</button>
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
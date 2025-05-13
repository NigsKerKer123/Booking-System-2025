@extends('layouts.app')

@section('title', 'ReadSphere: LandLord Dasboard')

@include('landlord.sidebar')
@include('landlord.modal')

@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-4 mt-20">

      <!-- generate report -->
      <div class="flex justify-end mb-4">
         <button type="button" class="shadow-md focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Generate Reports</button>
      </div>
      

      <!-- 3 col status-->
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
               FREE TENANTS
            </p>
            <p class="text-4xl font-medium text-black">
               100
            </p>
         </div>
         <div class="flex flex-col items-center justify-center h-30 p-4 rounded-lg bg-gray-50 shadow-md">
            <p class="text-lg font-medium text-black">
               PRO TENANTS
            </p>
            <p class="text-4xl font-medium text-black">
               100
            </p>
         </div>
      </div>

      <!-- Tenant Status -->
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
                  </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>
@endsection
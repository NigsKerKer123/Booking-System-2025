@extends('layouts.app')

@section('title', 'Students')

@include('tenant.admin.sidebar')

@section('content')

<!-- alert toast -->
@if ($errors->any())
<div class="fixed top-4 right-4 z-50">
    @foreach ($errors->all() as $index => $error)
        <div id="toast-danger-{{ $index }}" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm" role="alert">
            <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                </svg>
                <span class="sr-only">Error icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ $error }}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-danger" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
         <!-- toast javascript -->
        <script>
            setTimeout(function() {
                const toast = document.getElementById('toast-danger-{{ $index }}');
                if (toast) {
                    toast.style.display = 'none';
                }
            }, 5000);
        </script>
    @endforeach
</div>
@endif

<!-- succuss toast -->
@if (session('success'))
<div class="fixed top-4 right-4 z-50">
    <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm" role="alert">
        <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ms-3 text-sm font-normal">{{ session('success')}}</div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
    <script>
        setTimeout(function() {
            const toast = document.getElementById('toast-success');
            if (toast) {
                toast.style.display = 'none';
            }
        }, 5000);
    </script>
</div>
@endif

<div class="p-4 sm:ml-64">
   <div class="pl-4 pr-2 mt-22 flex justify-between items-center">
      <!-- add button -->
         <button type="button" data-modal-target="add-modal" data-modal-toggle="add-modal" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Add Student</button>
   </div>

    <div class="p-4">
        <div class="flex flex-col h-160 mb-4 rounded-sm bg-gray-50 shadow-md overflow-y-auto overflow-x-auto">
         <div class="flex justify-between items-center">
            <p class="text-lg p-4 text-gray-500">
               Manage Students
            </p>
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
                        Email
                     </th>
                     <th scope="col" class="px-6 py-3 whitespace-nowrap">
                        Course
                     </th>
                     <th scope="col" class="px-6 py-3 whitespace-nowrap">
                        College
                     </th>
                     <th scope="col" class="px-6 py-3 whitespace-nowrap">
                        School year
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
                        Robert Palma
                     </td>
                     <td class="px-6 py-4">
                        test@gmail.com
                     </td>
                     <td class="px-6 py-4">
                        BSIT
                     </td>
                     <td class="px-6 py-4">
                        College of Technologies
                     </td>
                     <td class="px-6 py-4">
                        4
                     </td>
                     <td class="px-6 py-4 whitespace-nowrap">
                        4:05PM 05/04/2026
                     </td>
                     <td class="px-6 py-4 text-center  whitespace-nowrap">
                        <button type="button" data-modal-target="manage-modal" data-modal-toggle="manage-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Manage</button>

                        <button type="button" data-modal-target="remove-modal" data-modal-toggle="remove-modal" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Remove</button>
                     </td>
                  </tr>
            </tbody>
         </table>
        </div>
    </div>
</div>
@endsection

<!-- add Student modal -->
<div id="add-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b border-gray-300 rounded-t">
                <h3 class="text-lg font-semibold text-gray-900">
                    Add Student
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="add-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" action="{{ route('admin.student.store') }}" method="POST">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="student_id" class="block mb-2 text-sm font-medium text-gray-900">Student ID</label>
                        <input type="text" name="student_id" id="student_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type student ID" required="">
                    </div>

                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type student name" required="">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type email" required="">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="school_year" class="block mb-2 text-sm font-medium text-gray-900">School Year</label>
                        <select id="school_year" name="school_year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                            <option selected disabled>Select School Year</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="college" class="block mb-2 text-sm font-medium text-gray-900">College</label>
                        <input type="text" name="college" id="college" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type college" required="">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="course" class="block mb-2 text-sm font-medium text-gray-900">Course</label>
                        <input type="text" name="course" id="course" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type course" required="">
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Add Student
                </button>
            </form>
        </div>
    </div>
</div>

<!-- manage Student modal -->
<div id="manage-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b border-gray-300 rounded-t">
                <h3 class="text-lg font-semibold text-gray-900">
                Manage Student
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="manage-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" action="{{ route('admin.student.store') }}" method="POST">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="student_id" class="block mb-2 text-sm font-medium text-gray-900">Student ID</label>
                        <input type="text" name="student_id" id="student_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type student ID" required="">
                    </div>

                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type student name" required="">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type email" required="">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="school_year" class="block mb-2 text-sm font-medium text-gray-900">School Year</label>
                        <select id="school_year" name="school_year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                            <option selected disabled>Select School Year</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="college" class="block mb-2 text-sm font-medium text-gray-900">College</label>
                        <input type="text" name="college" id="college" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type college" required="">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="course" class="block mb-2 text-sm font-medium text-gray-900">Course</label>
                        <input type="text" name="course" id="course" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type course" required="">
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Apply Changes
                </button>
            </form>
        </div>
    </div>
</div>

<!-- remove tenant modal -->
<div id="remove-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow-sm">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="remove-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500">Are you sure you want to remove $student?</h3>
                <form action="">
                    <input type="hidden" name="tenant_id">
                    <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Confirm
                    </button>

                    <button data-modal-hide="remove-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Cancel</button>
                </form>
                
            </div>
        </div>
    </div>
</div>
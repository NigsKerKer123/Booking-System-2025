<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Models\Students;
use Illuminate\Support\Str;

class AdminStudentController extends Controller
{
    public function index(){
        return view('tenant.admin.students');
    }

    public function store(StudentRequest $request){
        $randomPassword = Str::random(10);
        try {
            Students::create([
                'student_id' => $request->student_id,
                'name' => $request->name,
                'email' => $request->email,
                'password' => $randomPassword,
                'role' => "student",
                'course' => $request->course,
                'college' => $request->college,
                'school_year' => $request->school_year,
            ]);
    
            return redirect()->route('admin.student.index')->with('success', 'Student added successfully.');
        } catch (\Exception $e) {
            return dd($e->getMessage());
            return redirect()->route('admin.student.index')->with('error', 'An error occurred while adding the student: ' . $e->getMessage());
        }
    }
}

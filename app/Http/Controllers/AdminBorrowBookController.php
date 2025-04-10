<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Students;
use App\Models\BorrowBooks;
use Carbon\Carbon;

class AdminBorrowBookController extends Controller
{
    public function index(){
        $books = Books::all();
        $students = Students::all();

        $books->each(function ($books) {
            $books->formatted_timestamp = Carbon::parse($books->created_at)->format('g:iA m/d/Y');
        });
        return view('tenant.admin.borrowBooks', compact('books', 'students'));
    }

    public function store(Request $request)
    {
        try {
            // Validate input
            $request->validate([
                'student_id' => 'required|exists:students,id',
                'selected_books' => 'required|array|min:1',
                'selected_books.*' => 'exists:books,id',
            ], [
                'student_id.required' => 'Please select a student.',
                'student_id.exists' => 'The selected student does not exist.',
                'selected_books.required' => 'Please select at least one book.',
                'selected_books.*.exists' => 'One or more selected books do not exist.',
            ]);

            $studentId = $request->student_id;
            $selectedBookIds = $request->selected_books;

            foreach ($selectedBookIds as $bookId) {
                BorrowBooks::create([
                    'student_id' => $studentId,
                    'book_id' => $bookId,
                ]);
            }

            return redirect()->back()->with('success', 'Books successfully borrowed by the student.');
        
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->withErrors(['error' => 'An unexpected error occurred. Please try again later.']);
        }
    }
}

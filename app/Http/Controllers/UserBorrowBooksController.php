<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\BorrowBooks;
use App\Models\Books;
use App\Models\Borrow_logs;
use Carbon\Carbon;

class UserBorrowBooksController extends Controller
{
    public function index()
    {
        $books = Books::where('quantity', '>', 0)->get();

        $books->each(function ($book) {
            $borrowedCount = BorrowBooks::where('book_id', $book->id)->count();
            $book->available_quantity = $book->quantity - $borrowedCount;
        });

        $books = $books->filter(function ($book) {
            return $book->available_quantity > 0;
        });

        $studentId = Auth::guard('students')->id();

        $borrowedBooks = BorrowBooks::with('book')
            ->where('student_id', $studentId)
            ->get();

        return view('tenant.user.borrowBooks', compact('books', 'borrowedBooks', 'studentId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'book_id' => 'required',
            'book_id' => 'exists:books,id',
        ], [
            'student_id.required' => 'Please select a student.',
            'student_id.exists' => 'student does not exist.',
            'book_id.exists' => 'selected book do not exist.',
        ]);

        try {
            $dueDate = Carbon::now()->addWeek(); 
            $studentId = $request->student_id;
            $book_id = $request->book_id;

            BorrowBooks::create([
                'student_id' => $studentId,
                'book_id' => $book_id,
                'due_date' => $dueDate
            ]);

            Borrow_logs::create([
                'student_id' => $studentId,
                'book_id' => $book_id,
            ]);

            return redirect()->back()->with('success', 'Books successfully borrowed');
        
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'An unexpected error occurred. Please try again later.']);
        }
    }
}

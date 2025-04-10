<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Students;
use App\Models\BorrowBooks;

class AdminReturnBookController extends Controller
{
    public function index()
    {
        $borrowBooks = BorrowBooks::with('student', 'book')->get();
        return view('tenant.admin.returnBooks', compact('borrowBooks'));
    }

    public function destroy(Request $request)
    {
        try {
            // Validate that borrowedBook_id is provided
            $request->validate([
                'borrowedBook_id' => 'required|exists:borrow_books,id',
            ], [
                'borrowedBook_id.required' => 'Borrowed book ID is required.',
                'borrowedBook_id.exists' => 'The borrowed book record does not exist.',
            ]);

            // Find the BorrowBooks entry using the provided ID
            $borrowBook = BorrowBooks::find($request->borrowedBook_id);

            if ($borrowBook) {
                // Delete the borrow record
                $borrowBook->delete();

                // Redirect with a success message after deletion
                return redirect()->back()->with('success', 'The borrowed book record has been deleted.');
            } else {
                // If no record was found, return an error message
                return redirect()->back()->withErrors(['error' => 'Record not found for this borrowed book.']);
            }
        } catch (\Exception $e) {

            // Redirect back with a generic error message
            return redirect()->back()->withErrors(['error' => 'An unexpected error occurred. Please try again later.']);
        }
    }


}

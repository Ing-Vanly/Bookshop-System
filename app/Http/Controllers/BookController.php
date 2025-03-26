<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Show list of books
    public function index()
    {
        $books = Book::with('author', 'genre')->get();
        return view('backend.book.index', compact('books'));
    }

    // Show form to create a new book
    public function create()
    {
        $authors = Author::all();
        $genres = Genre::all();
        return view('backend.book.create', compact('authors', 'genres'));
    }


    // Store a new book
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'author_id' => 'required|exists:authors,id',
            'genre_id' => 'required|exists:genres,id',
            'description' => 'nullable|string',
            'publication_date' => 'nullable|date',
            'cover_image' => 'nullable|image',
            'stock_quantity' => 'required|integer',
            'rating' => 'nullable|numeric|between:0,5',  // Validation for rating
        ]);

        // Handle file upload for cover image


        $book = Book::create([
            'title' => $request->title,
            'price' => $request->price,
            'author_id' => $request->author_id,
            'genre_id' => $request->genre_id,
            'description' => $request->description,
            'publication_date' => $request->publication_date,
            'stock_quantity' => $request->stock_quantity,
            'rating' => $request->rating ?? 0,  // Default rating to 0 if not provided
        ]);

        if ($request->hasFile('cover_image') && $request->file('cover_image')->isValid()) {
            // Generate unique filename
            $file = $request->file('cover_image');
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Move file to the public/images/profile-photos directory
            $file->move(public_path('img/cover_images'), $fileName);

            // Save relative path to database
            $book->cover_image = 'img/cover_images/' . $fileName;
            $book->save();
        }

        return redirect()->route('book.index')->with('success', 'Book created successfully!');
    }

    public function show( Book $book)
{

    return view('backend.book.show', compact('book'));
}



    // Show form to edit a book
    public function edit(Book $book)
    {
        $authors = Author::all();
        $genres = Genre::all();
        return view('backend.book.edit', compact('book', 'authors', 'genres'));
    }

    // Update book details
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'author_id' => 'required|exists:authors,id',
            'genre_id' => 'required|exists:genres,id',
            'description' => 'nullable|string',
            'publication_date' => 'nullable|date',
            'cover_image' => 'nullable|image',
            'stock_quantity' => 'required|integer',
            'rating' => 'nullable|numeric|between:0,5',  // Validation for rating
        ]);



        $book->update([
            'title' => $request->title,
            'price' => $request->price,
            'author_id' => $request->author_id,
            'genre_id' => $request->genre_id,
            'description' => $request->description,
            'publication_date' => $request->publication_date,
            'stock_quantity' => $request->stock_quantity,
            'rating' => $request->rating ?? $book->rating,  // Keep the existing rating if none is provided
        ]);
        // Handle profile image upload if provided
        if ($request->hasFile('cover_image') && $request->file('cover_image')->isValid()) {
            // Delete old profile photo if exists
            if ($book->cover_image) {
                $oldPath = public_path($book->cover_image);
                if (file_exists($oldPath)) {
                    unlink($oldPath); // Delete old image from the server
                }
            }

            // Generate a unique filename
            $file = $request->file('cover_image');
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Move file to the public/img/profile_images directory
            $file->move(public_path('img/cover_images'), $fileName);

            // Save the relative path to the database
            $book->cover_image = 'img/cover_images/' . $fileName;
            $book->save();
        }

        return redirect()->route('book.index')->with('success', 'Book updated successfully!');
    }

    // Delete a book
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('book.index')->with('success', 'Book deleted successfully!');
    }
}

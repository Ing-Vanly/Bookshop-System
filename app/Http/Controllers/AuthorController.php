<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthorController extends Controller
{
    // Display a listing of authors
    public function index()
    {
        // Paginate authors
        $authors = Author::paginate(10);  // 10 authors per page (adjust as necessary)

        // Return the view with the paginated authors
        return view('backend.author.index', compact('authors'));
    }


    // Show the form for creating a new author
    public function create()
    {
        return view('backend.author.create');
    }

    // Store a newly created author in the database

    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors,email',
            'password' => 'required|string|min:8',
            'phone_number' => 'nullable|string|max:15',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // Optional image
        ]);

        // Create the author and save to the database
        $author = Author::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),  // Hashing the password
            'phone_number' => $request->phone_number,
        ]);


        if ($request->hasFile('profile_image') && $request->file('profile_image')->isValid()) {
            // Generate unique filename
            $file = $request->file('profile_image');
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Move file to the public/images/profile-photos directory
            $file->move(public_path('img/profile_images'), $fileName);

            // Save relative path to database
            $author->profile_image = 'img/profile_images/' . $fileName;
            $author->save();
        }

        // Redirect to the authors index with a success message
        return redirect()->route('author.index')->with('success', 'Author created successfully.');
    }


    // Show the form for editing an author
    public function edit(Author $author)
    {
        return view('backend.author.edit', compact('author'));
    }

    // Update the specified author in the database
    public function update(Request $request, Author $author)
    {
        // Validate the incoming request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors,email,' . $author->id,
            'phone_number' => 'nullable|string|max:15',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update author details
        $author->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        // Handle profile image upload if provided
        if ($request->hasFile('profile_image') && $request->file('profile_image')->isValid()) {
            // Delete old profile photo if exists
            if ($author->profile_image) {
                $oldPath = public_path($author->profile_image);
                if (file_exists($oldPath)) {
                    unlink($oldPath); // Delete old image from the server
                }
            }

            // Generate a unique filename
            $file = $request->file('profile_image');
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Move file to the public/img/profile_images directory
            $file->move(public_path('img/profile_images'), $fileName);

            // Save the relative path to the database
            $author->profile_image = 'img/profile_images/' . $fileName;
            $author->save();
        }

        // Redirect with success message
        return redirect()->route('author.index')->with('success', 'Author updated successfully.');
    }



    // Delete the specified author from the database
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('author.index')->with('success', 'Author deleted successfully.');
    }
}

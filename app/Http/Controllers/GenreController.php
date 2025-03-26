<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    // Display a listing of the genres
    public function index()
    {
        $genres = Genre::all();  // Get all genres
        // $genres = Genre::paginate(10);
        return view('backend.genre.index', compact('genres'));
    }


    // Show the form for creating a new genre
    public function create()
    {
        return view('backend.genre.create');
    }

    // Store a newly created genre
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Genre::create($request->all());

        return redirect()->route('genre.index')
            ->with('success', 'Genre created successfully.');
    }

    // Show the form for editing the specified genre
    public function edit(Genre $genre)
    {
        return view('backend.genre.edit', compact('genre'));
    }

    // Update the specified genre
    public function update(Request $request, Genre $genre)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre->update($request->all());

        return redirect()->route('genre.index')
            ->with('success', 'Genre updated successfully.');
    }

    // Remove the specified genre
    public function destroy(Genre $genre)
    {
        $genre->delete();

        return redirect()->route('genre.index')
            ->with('success', 'Genre deleted successfully.');
    }
}

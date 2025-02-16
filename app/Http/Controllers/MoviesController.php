<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }
    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request) {
    $request->validate([
        'movie_name' => 'required',
        'movie_description' => 'required',
        'movie_gener' => 'required',
    ]);
// **
    Movie::create($request->all());
    return redirect()->route('movies.index'); // ->with('success', 'Movie created successfully.');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    
    public function edit(Movie $movie) {
        
        // return view('movies.edit', compact('movie')); 

        return view('movies.edit', ['koko'=> $movie]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie) {
        $request->validate([
            'movie_name' => 'required',
            'movie_description' => 'required',
            'movie_gener' => 'required',
        ]);

    
        $movie->update($request->all()); 
        return redirect()->route('movies.index');  // ->with('success', 'Movie updated successfully.');
    }




    
        /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie) {
        $movie->delete(); 
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully.');
    }

}

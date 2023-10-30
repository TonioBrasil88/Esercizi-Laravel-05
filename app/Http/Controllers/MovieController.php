<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    function create(){
        return view('movies.create');
    }

    public function store(Request $request)
    {
      
        $title = $request->input('title');
        $director = $request->input('director');
        $genre = $request->input('genre');
        $img = $request->input('img');
        $released_at = $request->input('released_at');
        $description = $request->input('description');

        $movie = new Movie();

        $movie->title = $title;
        $movie->director = $director;
        $genre->genre = $genre;
        $img->img = $img;
        $released_at->released_at = $released_at;
        $movie->desciption = $description;


        $movie->save();

        return to_route('homepage')->with('message', 'Movie creato con successo');
        //return redirect()->route('homepage')->with('message', 'Movie creato con successo');
    }
}
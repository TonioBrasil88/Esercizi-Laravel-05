<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PublicController extends Controller 
{
    public function homepage(){

        $movies = Movie::all();
        
        return view('homepage', ['movies' => $movies]);
    }
}

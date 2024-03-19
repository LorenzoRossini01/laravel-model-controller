<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // # homepage sito 
    public function home(){
        return view("home");
    }

    public function index(){
        $movies = Movie::all();
        // dd  ($movies);
        return view("movies.index", compact("movies"));
    }
    public function show(Movie $movie){

        return view("movies.show", compact("movie"));
    }
}

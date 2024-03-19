<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // # homepage sito 
    public function home(){
        return view("home");
    }

    public function index(){
        return view("movies.index");
    }
    public function show(){
        return view("movies.show");
    }
}

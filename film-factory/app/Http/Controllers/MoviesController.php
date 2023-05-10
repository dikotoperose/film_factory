<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Cinema;
use Illuminate\Support\Collection;

class MoviesController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        $cinemas = Cinema::all();
        
        return view('/welcome', ['movies' => $movies, 'cinemas' => $cinemas]);
    }
    
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        $movies = Movie::all();
        $cinemas = Cinema::all();
        
        return view('/dashboard', ['movies' => $movies, 'cinemas' => $cinemas]);
    }
}


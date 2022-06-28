<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        // $movies = config('Movie');

        return view('home');
    }

    public function details($id) {
        dd($id);
    }

    public function movies() {
        $movies = Movie::all();

        return view('movies', compact('movies'));
    }


}

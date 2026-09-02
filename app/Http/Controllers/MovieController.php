<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = [
            1 => ['id' => 1, 'title' => 'The Hows of Us', 'genre' => 'Romance / Drama', 'rating' => '9.2/10'],
            2 => ['id' => 2, 'title' => 'Hello, Love, Again', 'genre' => 'Romance', 'rating' => '8.9/10'],
            3 => ['id' => 3, 'title' => 'Avatar: The Way of Water', 'genre' => 'Sci-Fi / Adventure', 'rating' => '8.5/10'],
            4 => ['id' => 4, 'title' => 'Barbie', 'genre' => 'Comedy / Fantasy', 'rating' => '8.0/10'],
            5 => ['id' => 5, 'title' => 'Four Sisters and a Wedding', 'genre' => 'Comedy / Drama', 'rating' => '9.0/10'],
        ];

        return view('movies.index', ['movies' => $movies]);
    }

    public function show($id)
    {
        $movies = [
            1 => ['id' => 1, 'title' => 'The Hows of Us', 'genre' => 'Romance / Drama', 'rating' => '9.2/10'],
            2 => ['id' => 2, 'title' => 'Hello, Love, Again', 'genre' => 'Romance', 'rating' => '8.9/10'],
            3 => ['id' => 3, 'title' => 'Avatar: The Way of Water', 'genre' => 'Sci-Fi / Adventure', 'rating' => '8.5/10'],
            4 => ['id' => 4, 'title' => 'Barbie', 'genre' => 'Comedy / Fantasy', 'rating' => '8.0/10'],
            5 => ['id' => 5, 'title' => 'Four Sisters and a Wedding', 'genre' => 'Comedy / Drama', 'rating' => '9.0/10'],
        ];

        abort_if(!isset($movies[$id]), 404);
        return view('movies.show', ['movie' => $movies[$id]]);
    }
}
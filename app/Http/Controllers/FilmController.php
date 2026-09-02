<?php

namespace App\Http\Controllers;

class FilmController extends Controller
{
    private function getAllMovies()
    {
        return [
            1 => ['id' => 1, 'title' => 'The Hows of Us', 'genre' => 'Romance / Drama', 'rating' => '9.2/10', 'year' => 2018],
            2 => ['id' => 2, 'title' => 'Hello, Love, Again', 'genre' => 'Romance', 'rating' => '8.9/10', 'year' => 2024],
            3 => ['id' => 3, 'title' => 'Avatar: The Way of Water', 'genre' => 'Fantasy / Adventure', 'rating' => '8.8/10', 'year' => 2022],
            4 => ['id' => 4, 'title' => 'Barbie', 'genre' => 'Comedy / Sci-Fi', 'rating' => '8.5/10', 'year' => 2023],
            6 => ['id' => 6, 'title' => 'Four Sisters and a Wedding', 'genre' => 'Comedy / Drama', 'rating' => '8.0/10', 'year' => 2013],
            7 => ['id' => 7, 'title' => 'Everything Everywhere All at Once', 'genre' => 'Sci-Fi / Drama', 'rating' => '9.0/10', 'year' => 2022],
            8 => ['id' => 8, 'title' => 'Crazy Rich Asians', 'genre' => 'Romance / Comedy', 'rating' => '8.7/10', 'year' => 2018],
            // dagdag na pelikula kung kailangan
        ];
    }

    public function index()
    {
        $movies = $this->getAllMovies();
        return view('movies.index', ['movies' => $movies]);
    }

    public function show($id)
    {
        $movies = $this->getAllMovies();
        abort_if(!isset($movies[$id]), 404); // mas malinis na pagsusuri
        return view('movies.show', ['movie' => $movies[$id]]);
    }

    public function featured()
    {
        $movies = $this->getAllMovies();
        // ✅ Kunin ang UNANG pelikula gamit ang array_values + index 0
        $moviesList = array_values($movies);
        return view('movies.show', ['movie' => $moviesList[0]]);
    }

    public function filter($genre = null)
    {
        $movies = $this->getAllMovies();

        // ✅ Kung walang genre → ibalik LAHAT
        if ($genre === null || trim($genre) === '') {
            return view('movies.filter', ['movies' => $movies, 'genre' => '']);
        }

        $filtered = [];
        foreach ($movies as $movie) {
            // ✅ stripos = gumana sa PHP 7 & 8, hindi sensitibo sa malaki/maliit na titik
            if (stripos($movie['genre'], $genre) !== false) {
                $filtered[] = $movie;
            }
        }

        return view('movies.filter', ['movies' => $filtered, 'genre' => $genre]);
    }
}
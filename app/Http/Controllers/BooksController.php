<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = [
            ['id' => 1, 'title' => 'Noli Me Tangere', 'author' => 'Jose Rizal', 'year' => 1887],
            ['id' => 2, 'title' => 'El Filibusterismo', 'author' => 'Jose Rizal', 'year' => 1891],
            ['id' => 3, 'title' => 'Ibong Adarna', 'author' => 'Jose de la Cruz', 'year' => 1734],
            ['id' => 4, 'title' => 'Florante at Laura', 'author' => 'Francisco Balagtas', 'year' => 1838],
            ['id' => 5, 'title' => 'Dekada \'70', 'author' => 'Lualhati Bautista', 'year' => 1983],
            ['id' => 6, 'title' => 'Bata, Bata... Paano Ka Ginawa?', 'author' => 'Lualhati Bautista', 'year' => 1988],
        ];

        return view('books.index', compact('books'));
    }

    public function featured()
    {
        $featured = [
            ['id' => 1, 'title' => 'Noli Me Tangere', 'author' => 'Jose Rizal', 'year' => 1887],
            ['id' => 2, 'title' => 'El Filibusterismo', 'author' => 'Jose Rizal', 'year' => 1891],
            ['id' => 3, 'title' => 'Ibong Adarna', 'author' => 'Jose de la Cruz', 'year' => 1734],
        ];

        return view('books.featured', compact('featured'));
    }

    public function filter(Request $request)
    {
        $allBooks = [
            ['id' => 1, 'title' => 'Noli Me Tangere', 'author' => 'Jose Rizal', 'year' => 1887],
            ['id' => 2, 'title' => 'El Filibusterismo', 'author' => 'Jose Rizal', 'year' => 1891],
            ['id' => 3, 'title' => 'Ibong Adarna', 'author' => 'Jose de la Cruz', 'year' => 1734],
            ['id' => 4, 'title' => 'Florante at Laura', 'author' => 'Francisco Balagtas', 'year' => 1838],
            ['id' => 5, 'title' => 'Dekada \'70', 'author' => 'Lualhati Bautista', 'year' => 1983],
            ['id' => 6, 'title' => 'Bata, Bata... Paano Ka Ginawa?', 'author' => 'Lualhati Bautista', 'year' => 1988],
        ];

        $results = $allBooks;

        if ($request->author) {
            $results = array_filter($results, fn($b) => stripos($b['author'], $request->author) !== false);
        }

        if ($request->year) {
            $results = array_filter($results, fn($b) => $b['year'] == $request->year);
        }

        return view('books.filter', compact('results'));
    }

    public function show($id)
    {
        $allBooks = [
            ['id' => 1, 'title' => 'Noli Me Tangere', 'author' => 'Jose Rizal', 'year' => 1887],
            ['id' => 2, 'title' => 'El Filibusterismo', 'author' => 'Jose Rizal', 'year' => 1891],
            ['id' => 3, 'title' => 'Ibong Adarna', 'author' => 'Jose de la Cruz', 'year' => 1734],
            ['id' => 4, 'title' => 'Florante at Laura', 'author' => 'Francisco Balagtas', 'year' => 1838],
            ['id' => 5, 'title' => 'Dekada \'70', 'author' => 'Lualhati Bautista', 'year' => 1983],
            ['id' => 6, 'title' => 'Bata, Bata... Paano Ka Ginawa?', 'author' => 'Lualhati Bautista', 'year' => 1988],
        ];

        $book = collect($allBooks)->firstWhere('id', $id);
        return view('books.show', compact('book'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    private function getBooksData()
    {
        return [
            1 => ['id' => 1, 'title' => 'Noli Me Tangere', 'author' => 'Jose Rizal', 'year' => 1887, 'category' => 'Classic'],
            2 => ['id' => 2, 'title' => 'El Filibusterismo', 'author' => 'Jose Rizal', 'year' => 1891, 'category' => 'Classic'],
            3 => ['id' => 3, 'title' => 'Ibong Adarna', 'author' => 'Jose de la Cruz', 'year' => 1734, 'category' => 'Folklore'],
            4 => ['id' => 4, 'title' => 'Florante at Laura', 'author' => 'Francisco Balagtas', 'year' => 1838, 'category' => 'Poetry'],
            5 => ['id' => 5, 'title' => 'Dekada \'70', 'author' => 'Lualhati Bautista', 'year' => 1983, 'category' => 'Modern'],
            6 => ['id' => 6, 'title' => 'Bata, Bata... Paano Ka Ginawa?', 'author' => 'Lualhati Bautista', 'year' => 1988, 'category' => 'Modern'],
        ];
    }

    public function index()
    {
        $books = $this->getBooksData();
        $fullName = 'Jose O. Obogne Jr.';

        return view('books.index', compact('books', 'fullName'));
    }

    public function featured()
    {
        $books = $this->getBooksData();
        $featured = $books[1];
        $fullName = 'Jose O. Obogne Jr.';
        return view('books.featured', compact('featured', 'fullName'));
    }

    public function filter($category = null)
    {
        $all = $this->getBooksData();
        $filtered = [];
        if ($category) {
            foreach ($all as $id => $book) {
                if ($book['category'] == ucfirst(strtolower($category))) {
                    $filtered[$id] = $book;
                }
            }
        } else {
            $filtered = $all;
        }
        $fullName = 'Jose O. Obogne Jr.';
        $filterValue = ucfirst(strtolower($category));
        return view('books.filter', compact('filtered', 'fullName', 'filterValue'));
    }

    public function show($id)
    {
        $books = $this->getBooksData();
        if (!isset($books[$id])) {
            abort(404, 'Book not found.');
        }
        $book = $books[$id];
        $fullName = 'Jose O. Obogne Jr.';
        return view('books.show', compact('book', 'fullName'));
    }
}
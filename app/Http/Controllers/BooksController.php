<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    private function getAllBooks()
    {
        return [
            ['id' => 1, 'title' => 'Noli Me Tangere', 'author' => 'Jose Rizal', 'year' => 1887],
            ['id' => 2, 'title' => 'El Filibusterismo', 'author' => 'Jose Rizal', 'year' => 1891],
            ['id' => 3, 'title' => 'Ibong Adarna', 'author' => 'Jose de la Cruz', 'year' => 1734],
            ['id' => 4, 'title' => 'Florante at Laura', 'author' => 'Francisco Balagtas', 'year' => 1838],
            ['id' => 5, 'title' => 'Dekada \'70', 'author' => 'Lualhati Bautista', 'year' => 1983],
            ['id' => 6, 'title' => 'Bata, Bata... Paano Ka Ginawa?', 'author' => 'Lualhati Bautista', 'year' => 1988],
        ];
    }

    // ✅ Updated: Accept Request + TWO filters (A1, A2, A3, A4)
    public function index(Request $request)
    {
        // Read query strings — sensible defaults = null
        $author = $request->query('author');
        $year = $request->query('year');

        // Start with ALL books
        $books = $this->getAllBooks();

        // Apply author filter if present
        if ($author) {
            $books = array_filter($books, fn($b) => $b['author'] === $author);
        }

        // Apply year filter if present
        if ($year) {
            $books = array_filter($books, fn($b) => $b['year'] == $year);
        }

        // Reset array keys
        $books = array_values($books);

        return view('books.index', compact('books', 'author', 'year'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $book = collect($this->getAllBooks())->firstWhere('id', $id);

        if (!$book) {
            abort(404);
        }

        return view('books.show', compact('book'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
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

    // ❌ OLD filter method — keep it for now but we won't use it
    public function filter(Request $request)
    {
        $allBooks = $this->getAllBooks();
        return view('books.filter', compact('allBooks'));
    }
}

@extends('layouts.app')

@section('content')
   <h2 class="mt-4 mb-3">My Book List</h2>
{{-- <p class="text-muted">Prepared by: Jose O. Obogne Jr.</p> --}}


    <div class="alert alert-light border mb-3">
        <strong>Showing:</strong>
        @if($author && $year)
            {{ $author }} — published in {{ $year }}
        @elseif($author)
            By {{ $author }} — All Years
        @elseif($year)
            Published in {{ $year }} — All Authors
        @else
            All Books
        @endif
    </div>

    <div class="mb-3">
        <strong>Filter by Author:</strong><br>
        <a href="{{ route('books.index', array_merge(request()->query(), ['author' => 'Jose Rizal'])) }}" class="btn btn-sm btn-outline-primary m-1">Jose Rizal</a>
        <a href="{{ route('books.index', array_merge(request()->query(), ['author' => 'Jose de la Cruz'])) }}" class="btn btn-sm btn-outline-primary m-1">Jose de la Cruz</a>
        <a href="{{ route('books.index', array_merge(request()->query(), ['author' => 'Francisco Balagtas'])) }}" class="btn btn-sm btn-outline-primary m-1">Francisco Balagtas</a>
        <a href="{{ route('books.index', array_merge(request()->query(), ['author' => 'Lualhati Bautista'])) }}" class="btn btn-sm btn-outline-primary m-1">Lualhati Bautista</a>
    </div>

    <div class="mb-3">
        <strong>Filter by Year:</strong><br>
        <a href="{{ route('books.index', array_merge(request()->query(), ['year' => '1887'])) }}" class="btn btn-sm btn-outline-secondary m-1">1887</a>
        <a href="{{ route('books.index', array_merge(request()->query(), ['year' => '1891'])) }}" class="btn btn-sm btn-outline-secondary m-1">1891</a>
        <a href="{{ route('books.index', array_merge(request()->query(), ['year' => '1734'])) }}" class="btn btn-sm btn-outline-secondary m-1">1734</a>
        <a href="{{ route('books.index', array_merge(request()->query(), ['year' => '1983'])) }}" class="btn btn-sm btn-outline-secondary m-1">1983</a>
    </div>
    <div class="mb-4">
        <a href="{{ route('books.index') }}" class="btn btn-sm btn-danger">Clear All Filters</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Pamagat</th>
                <th>May-akda</th>
                <th>Taon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $book['title'] }}</td>
                <td>{{ $book['author'] }}</td>
                <td>{{ $book['year'] }}</td>
                <td>
                    <a href="{{ route('books.show', $book['id']) }}" class="btn btn-sm btn-primary">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
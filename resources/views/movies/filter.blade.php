@extends('layouts.app')

@section('title', 'Movies by Genre')

@section('heading', 'Movies — ' . ($genre ?: 'All Genres'))

@section('content')

    <h3>
        @if ($genre)
            Showing: <strong>{{ $genre }}</strong>
        @else
            Select a genre from the navigation above
        @endif
    </h3>

    @if (!empty($movies))
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $index => $movie)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $movie['title'] }}</td>
                <td>{{ $movie['genre'] }}</td>
                <td>{{ $movie['year'] }}</td>
                <td>{{ $movie['rating'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No movies found for this genre.</p>
    @endif

@endsection
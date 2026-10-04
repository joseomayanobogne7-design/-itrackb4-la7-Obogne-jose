@extends('layouts.app')  {{-- ✅ Screenshot #2 — @extends sa taas --}}

@section('title', 'All Movies')

@section('heading', 'Movie Collection')

@section('content')

    <h3>List of Movies ({{ count($movies) }} total)</h3>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Rating</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $index => $movie)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><strong>{{ $movie['title'] }}</strong></td>
                <td>{{ $movie['genre'] }}</td>
                <td>{{ $movie['year'] }}</td>
                <td>
                    @if ($movie['rating'] >= '9.0')
                        ⭐ {{ $movie['rating'] }} — Excellent!
                    @elseif ($movie['rating'] >= '8.5')
                        ✨ {{ $movie['rating'] }} — Great
                    @else
                        {{ $movie['rating'] }}
                    @endif
                </td>
                <td><a href="{{ route('movies.show', $movie['id']) }}">View Details</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p style="margin-top: 20px;">
        <a href="{{ route('movies.featured') }}">View Featured Movie</a> |
        <a href="{{ route('movies.filter') }}">Browse by Genre</a>
    </p>

@endsection
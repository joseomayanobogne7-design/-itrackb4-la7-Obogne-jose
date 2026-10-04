@extends('layouts.app')  {{-- ✅ Screenshot #3 --}}

@section('title', $movie['title'])

@section('heading', 'Movie Details')

@section('content')

    <div style="padding: 20px; background: #f9f9f9; border-left: 4px solid #222; margin-top: 20px;">
        <h2>{{ $movie['title'] }}</h2>
        <p><strong>Genre:</strong> {{ $movie['genre'] }}</p>
        <p><strong>Year:</strong> {{ $movie['year'] }}</p>
        <p><strong>Rating:</strong> {{ $movie['rating'] }}</p>
        <br>
        <a href="{{ route('movies.index') }}">← Back to All Movies</a>
    </div>

@endsection
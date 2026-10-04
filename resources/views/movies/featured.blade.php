@extends('layouts.app')

@section('title', 'Featured Movie')

@section('heading', 'Featured Movie')

@section('content')

    <div style="padding: 20px; background: #fff3cd; border-left: 4px solid #ffc107; margin-top: 20px;">
        <h2>{{ $movie['title'] }}</h2>
        <p><strong>Genre:</strong> {{ $movie['genre'] }}</p>
        <p><strong>Year:</strong> {{ $movie['year'] }}</p>
        <p><strong>Rating:</strong> {{ $movie['rating'] }}</p>
        <br>
        <a href="{{ route('movies.index') }}">← Back to All Movies</a>
    </div>

@endsection
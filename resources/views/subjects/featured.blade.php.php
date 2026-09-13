@extends('layouts.app')

@section('title', 'Featured Subject')

@section('content')
    <h2>Featured Subject</h2>

    <div class="card p-4 mb-3">
        <p><strong>Code:</strong> {{ $featured['code'] }}</p>
        <p><strong>Title:</strong> {{ $featured['title'] }}</p>
        <p><strong>Units:</strong> {{ $featured['units'] }}</p>
        <p><strong>Course:</strong> {{ $featured['course'] }}</p>
    </div>

    <p class="text-center mt-3">
        Prepared by: <strong>{{ $student_name }}</strong>
    </p>

    <a href="{{ route('subjects.index') }}" class="btn btn-primary">Back to Subject List</a>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">📖 Book Details</h2>

    @if ($book)
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{ $book['title'] }}</h3>
            <h5 class="text-muted mb-3">by {{ $book['author'] }}</h5>
            <p><strong>Published Year:</strong> {{ $book['year'] }}</p>
        </div>
    </div>
    @else
    <div class="alert alert-danger">Libro hindi natagpuan.</div>
    @endif

    <div class="mt-4">
        <a href="{{ route('books.index') }}" class="btn btn-primary">← Back to Book List</a>
    </div>
</div>
@endsection
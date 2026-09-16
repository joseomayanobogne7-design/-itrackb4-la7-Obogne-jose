@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">⭐ Featured Books</h2>
    <p class="text-center text-muted mb-5">Mga paboritong akda ng ating mga pambansang manunulat</p>

    <div class="row">
        @foreach ($featured as $book)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $book['title'] }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $book['author'] }}</h6>
                    <p class="card-text"><strong>Taon:</strong> {{ $book['year'] }}</p>
                    <a href="{{ url('/books/'.$book['id']) }}" class="btn btn-primary btn-sm">Tingnan Detalye</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('books.index') }}" class="btn btn-secondary">← Balik sa Lahat ng Libro</a>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h2>👋 Welcome to Book Portal</h2>
    <p class="lead mt-3">Your collection of notable literary works from the Philippines</p>
    
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5>📚 All Books</h5>
                    <p>View the complete list</p>
                    <a href="{{ route('books.index') }}" class="btn btn-primary">Go</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5>⭐ Featured Books</h5>
                    <p>Selected works</p>
                    <a href="{{ route('books.featured') }}" class="btn btn-primary">Go</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5>🔍 Filter Books</h5>
                    <p>Search for a book</p>
                    <a href="{{ route('books.filter') }}" class="btn btn-primary">Go</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
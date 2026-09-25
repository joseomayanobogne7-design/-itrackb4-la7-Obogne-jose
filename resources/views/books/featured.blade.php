@extends('layouts.app')

@section('content')
    <h2 class="mt-4 mb-3">Featured Books</h2>
    <p class="text-muted">Prepared by: Jose O. Obogne Jr.</p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Pamagat</th>
                <th>May-akda</th>
                <th>Taon</th>
            </tr>
        </thead>
        <tbody>
            @foreach($featured as $book)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $book['title'] }}</td>
                <td>{{ $book['author'] }}</td>
                <td>{{ $book['year'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

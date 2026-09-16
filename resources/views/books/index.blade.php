@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-3">My Book List</h2>
    <p class="text-center text-muted mb-5">Prepared by: Jose O. Obogne Jr.</p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Pamagat</th>
                <th>May-akda</th>
                <th>Taon</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $index => $book)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>
                    @if ($book['author'] == 'Jose Rizal')
                        <strong class="text-danger">{{ $book['title'] }} ⭐</strong>
                    @else
                        {{ $book['title'] }}
                    @endif
                </td>
                <td>{{ $book['author'] }}</td>
                <td>{{ $book['year'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
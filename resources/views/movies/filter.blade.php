<!DOCTYPE html>
<html>
<head>
    <title>@if ($genre) {{ $genre }} Movies @else All Movies @endif</title>
    <style>
        body { font-family: serif; max-width: 800px; margin: 2rem; }
        ul { padding-left: 1.5rem; }
        li { margin: 0.4rem 0; }
        a { color: #0000ee; text-decoration: underline; }
    </style>
</head>
<body>

<h1>
    @if ($genre)
        Movies: {{ $genre }}
    @else
        All Movies
    @endif
</h1>

<p>By: Edshieline Kaye Ternida</p>

<p>
    @if ($genre)
        Showing movies matching: {{ $genre }}
    @else
        Showing all movies
    @endif
</p>

@if (count($movies) > 0)
<ul>
@foreach ($movies as $id => $m)
    <li>
        <a href="{{ route('movies.show', $id) }}">{{ $m['title'] }}</a>
        — {{ $m['genre'] }} {{ $m['rating'] }}
    </li>
@endforeach
</ul>
@else
<p><em>No movies found in this category.</em></p>
@endif

<p>
    Filter by:
    <a href="{{ route('movies.filter', 'Romance') }}">Romance</a> |
    <a href="{{ route('movies.filter', 'Sci-Fi') }}">Sci-Fi</a> |
    <a href="{{ route('movies.filter', 'Comedy') }}">Comedy</a> |
    <a href="{{ route('movies.filter', 'Drama') }}">Drama</a> |
    <a href="{{ route('movies.filter') }}">All</a>
</p>

<p><a href="{{ route('movies.index') }}">← Back to List of Movies</a></p>

</body>
</html>
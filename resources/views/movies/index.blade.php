<h1>List of Movies</h1>
<p>By: Edshieline Kaye Ternida</p> {{-- ✅ B5 --}}

<ul>
@foreach ($movies as $movie)
    <li>
        <a href="{{ route('movies.show', $movie['id']) }}">
            <strong>{{ $movie['title'] }}</strong>
        </a>
        — {{ $movie['genre'] }} {{ $movie['rating'] }}
    </li>
@endforeach
</ul>

<p><a href="{{ route('movies.featured') }}">View Featured Movie</a></p>
<p><a href="{{ route('movies.filter') }}">Browse by Genre</a></p>
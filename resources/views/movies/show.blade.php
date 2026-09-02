<h2>{{ $movie['title'] }}</h2>
<p>Genre: {{ $movie['genre'] }}</p>
<p>Rating: {{ $movie['rating'] }}</p>
<p>Year: {{ $movie['year'] }}</p>
<br>
<a href="{{ url('/movies') }}">⬅️ Back to Movies List</a>
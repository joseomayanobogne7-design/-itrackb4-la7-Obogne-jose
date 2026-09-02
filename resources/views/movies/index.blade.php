<!DOCTYPE html>
<html>
<head>
    <title>My Favorite Movies</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 2rem auto; padding: 0 1rem; }
        h1 { color: #e91e63; text-align: center; }
        .prepared { text-align: center; color: #666; margin-bottom: 2rem; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #f8bbd9; }
        a { color: #e91e63; text-decoration: none; }
    </style>
</head>
<body>
    <h1>🎬 My Favorite Movies</h1>
    <p class="prepared"><strong>Prepared by: Edshieline Kaye Ternida</strong></p>

    <table>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Rating</th>
            <th>Action</th>
        </tr>
        @foreach ($movies as $id => $m)
        <tr>
            <td>{{ $id }}</td>
            <td>{{ $m['title'] }}</td>
            <td>{{ $m['genre'] }}</td>
            <td>{{ $m['rating'] }}</td>
            <td><a href="{{ route('movies.show', $id) }}">View Details</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Books in a Library</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Books in a Library</h1>
    <p>Prepared by: <strong>{{ $fullName }}</strong></p>

    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year Published</th>
            <th>Action</th>
        </tr>
        @foreach ($books as $id => $book)
        <tr>
            <td>{{ $book['title'] }}</td>
            <td>{{ $book['author'] }}</td>
            <td>{{ $book['year'] }}</td>
            <td><a href="{{ url('/books/' . $id) }}">View Details</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
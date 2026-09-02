<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Books — {{ $filterValue }}</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Showing: {{ $filterValue }} Books</h1>
    <p>Prepared by: <strong>{{ $fullName }}</strong></p>

    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year Published</th>
        </tr>
        @foreach ($filtered as $book)
        <tr>
            <td>{{ $book['title'] }}</td>
            <td>{{ $book['author'] }}</td>
            <td>{{ $book['year'] }}</td>
        </tr>
        @endforeach
    </table>

    <p style="margin-top: 20px;"><a href="{{ url('/books') }}">← Back to Full Book List</a></p>
</body>
</html>
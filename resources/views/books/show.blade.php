<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $book['title'] }}</title>
    <style>
        .detail { margin: 10px 0; font-size: 16px; }
        .label { font-weight: bold; display: inline-block; width: 120px; }
        a { color: #0066cc; text-decoration: none; margin-top: 20px; display: inline-block; }
    </style>
</head>
<body>
    <h1>{{ $book['title'] }}</h1>

    <div class="detail">
        <span class="label">Title:</span> {{ $book['title'] }}
    </div>
    <div class="detail">
        <span class="label">Author:</span> {{ $book['author'] }}
    </div>
    <div class="detail">
        <span class="label">Year:</span> {{ $book['year'] }}
    </div>

    <p style="margin-top: 30px;">Prepared by: <strong>{{ $fullName }}</strong></p>

    <a href="{{ url('/books') }}">← Back to Book List</a>
</body>
</html>
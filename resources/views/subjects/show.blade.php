<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $subject['code'] }}</title>
</head>
<body>
    <h2>{{ $subject['title'] }}</h2>
    <p>Prepared by: Nadine C. Rojas</p>

    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>Code</th>
            <td>{{ $subject['code'] }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $subject['title'] }}</td>
        </tr>
        <tr>
            <th>Units</th>
            <td>{{ $subject['units'] }}</td>
        </tr>
        <tr>
            <th>Course</th>
            <td>{{ $subject['course'] }}</td>
        </tr>
    </table>

    <p><a href="{{ url('/subjects') }}">← Back to Subject List</a></p>
</body>
</html>
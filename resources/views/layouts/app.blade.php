<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Subject Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        .site-title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .prepared-by {
            color: #666;
            margin-bottom: 20px;
        }
        .nav-buttons {
            margin-bottom: 25px;
        }
        .nav-btn {
            border: 1px solid #007bff;
            color: #007bff;
            background: white;
            padding: 6px 12px;
            margin-right: 8px;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
        }
        .nav-btn:hover {
            background: #007bff;
            color: white;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>

    <h1 class="site-title">Subject Portal</h1>
    <p class="prepared-by">Prepared by: Nadine C. Rojas</p>

    <div class="nav-buttons">
        <a href="{{ route('teachers.index') }}" class="nav-btn">Subject List</a>
        <a href="{{ route('teachers.featured') }}" class="nav-btn">Featured Teacher</a>
    </div>

    @yield('content')

</body>
</html>
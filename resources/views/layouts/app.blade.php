<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body { background-color: #f8f9fa; }
        .site-header {
            background: linear-gradient(to right, #0047ab, #0066cc);
            color: white;
            padding: 25px;
            text-align: center;
        }
        .footer-name {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="site-header">
        <h1>My Subjects This Semester</h1>
    </div>

    @include('partials._nav')

    <div class="container py-4">
        @yield('content')
    </div>

    <div class="footer-name">
        Prepared by: Nadine C. Rojas | ITRACKB4 — Web Systems and Technologies
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Book Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .site-header {
            background-color: #0d6efd;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .footer-name {
            text-align: center;
            padding: 15px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="site-header">
        <h1>Book Portal</h1>
    </div>

    @include('partials._nav')

    <div class="container py-4">
        @yield('content')
    </div>

    <div class="footer-name">
        Prepared by: Jose O. Obogne Jr.
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
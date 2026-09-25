<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        {{-- Header --}}
        <div class="mb-4">
            <h1>Book Portal</h1>
            <p class="mb-2">Prepared by: Jose O. Obogne Jr.</p>
            
            {{-- ✅ Navigation with Active State (Part D) --}}
            <nav>
                <strong>
                    <a href="{{ route('books.index') }}" class="{{ request()->routeIs('books.index') ? 'text-decoration-underline fw-bold' : '' }}">Book List</a> |
                    <a href="{{ route('books.featured') }}" class="{{ request()->is('books/featured') ? 'text-decoration-underline fw-bold' : '' }}">Featured</a> |
                    <a href="#">Teacher</a>
                </strong>
            </nav>
        </div>

        {{-- ✅ Page Content — Dito lalabas ang index content --}}
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
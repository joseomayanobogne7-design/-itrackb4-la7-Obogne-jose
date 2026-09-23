<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subject Portal</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f8f9fa;
            color: #212529;
            line-height: 1.6;
        }

        /* Top Header — Dark Gray */
        header {
            background-color: #212529;
            color: #fff;
            padding: 1rem 2rem;
        }

        header h1 {
            font-size: 1.5rem;
            margin-bottom: 0.2rem;
        }

        header p {
            font-size: 0.95rem;
            opacity: 0.9;
        }

        /* Navigation Tabs */
        .nav-tabs {
            background-color: #fff;
            border-bottom: 1px solid #dee2e6;
            padding: 0 2rem;
        }

        .nav-tabs a {
            display: inline-block;
            padding: 0.75rem 1.25rem;
            color: #495057;
            text-decoration: none;
            font-weight: 500;
            border-bottom: 2px solid transparent;
            margin-right: 0.5rem;
        }

        .nav-tabs a:hover {
            color: #212529;
        }

        .nav-tabs a.active {
            color: #212529;
            border-bottom-color: #212529;
        }

        /* Main Content */
        .container {
            max-width: 1300px;
            margin: 1.5rem auto;
            padding: 0 1rem;
        }

        .page-title {
            margin-bottom: 1rem;
            color: #212529;
        }

        /* Table */
        .table-responsive {
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 0.9rem 1rem;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #212529;
            color: #fff;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f8f9fa;
        }

        /* Buttons — Black & Gray ONLY */
        .btn {
            display: inline-block;
            padding: 0.45rem 0.9rem;
            background-color: #212529;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 0.9rem;
            font-weight: 500;
            border: none;
        }

        .btn:hover {
            background-color: #000;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .btn-sm {
            padding: 0.35rem 0.7rem;
            font-size: 0.85rem;
        }

        /* Search / Filter Section */
        .filter-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .filter-bar input {
            padding: 0.5rem 0.75rem;
            border: 1px solid #ced4da;
            border-radius: 4px;
            width: 250px;
        }

        /* Footer */
        footer {
            margin-top: 3rem;
            text-align: center;
            color: #6c757d;
            font-size: 0.85rem;
            padding: 1rem;
        }
    </style>
</head>
<body>

    {{-- Top Header --}}
    <header>
        <div class="container">
            <h1>Subject Portal</h1>
            <p>Prepared by: Nadine C. Rojas</p>
        </div>
    </header>

    {{-- Navigation Tabs --}}
    <div class="nav-tabs">
        <div class="container">
            <a href="{{ route('subjects.index') }}" class="{{ request()->routeIs('subjects.index') ? 'active' : '' }}">Subject List</a>
            <a href="{{ route('subjects.featured') }}" class="{{ request()->routeIs('subjects.featured') ? 'active' : '' }}">Featured Teacher</a>
            <a href="{{ route('teachers.index') }}" class="{{ request()->routeIs('teachers.index') ? 'active' : '' }}">Teachers</a>
        </div>
    </div>

    {{-- Main Content --}}
    <div class="container">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer>
        &copy; {{ date('Y') }} Subject Portal. All rights reserved.
    </footer>

</body>
</html>
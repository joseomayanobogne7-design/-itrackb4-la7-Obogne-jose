<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/books') }}">Book Portal</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('books.featured') }}">Featured Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('books.filter') }}">Filter Books</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
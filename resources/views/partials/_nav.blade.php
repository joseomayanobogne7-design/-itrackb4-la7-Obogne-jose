<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">LibSys</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('teachers*') ? 'active' : '' }}" 
                       href="{{ route('teachers.index') }}">Teachers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('featured-teachers') ? 'active' : '' }}" 
                       href="{{ route('teachers.featured') }}">Featured Teacher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('subjects*') ? 'active' : '' }}" 
                       href="{{ route('subjects.index') }}">Subjects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('featured-subjects') ? 'active' : '' }}" 
                       href="{{ route('subjects.featured') }}">Featured Subjects</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

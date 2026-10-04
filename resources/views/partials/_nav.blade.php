<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">LibSys Portal</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                {{-- Home --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>

                {{-- Subjects --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('subjects*') ? 'active' : '' }}" href="{{ route('subjects.index') }}">Subjects</a>
                </li>

                {{-- Teachers --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('teachers*') ? 'active' : '' }}" href="{{ route('teachers.index') }}">Teachers</a>
                </li>

                {{-- Movies — kung meron ka pa rin --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('movies*') ? 'active' : '' }}" href="{{ url('/movies') }}">Movies</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

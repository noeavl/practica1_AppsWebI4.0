<nav class="navbar navbar-expand-lg">
    <div>
        <i class="fa-solid fa-bars fa-lg" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample"></i>
    </div>
</nav>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header d-flex align-items-center">
        <a href="{{ route('profile.edit') }}" class="d-flex align-items-center me-2">
            <img src="https://b2472105.smushcdn.com/2472105/wp-content/uploads/2022/11/10-Poses-para-foto-de-Perfil-Profesional-Mujer-04-2022-10-819x1024.jpg?lossy=1&strip=1&webp=1"
                alt="User Image" class="rounded-circle" height="60" width="60">
            <span>{{ auth()->user()->name }}</span>
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('courses.index') }}" class="nav-link"><i class="fas fa-graduation-cap"></i>
                    Courses</a>
            </li>
        </ul>
        <ul class="navbar-nav mt-3">
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link border-0 bg-transparent d-flex align-items-center">
                        <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
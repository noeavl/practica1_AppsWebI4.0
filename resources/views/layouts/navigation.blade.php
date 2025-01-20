<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <!-- Menú Hamburguesa -->
        <div class="m-2 cursor-pointer">
            <i class="fa-solid fa-bars fs-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample"></i>
        </div>
        <div class="d-flex align-items-center">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center" id="profileDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://b2472105.smushcdn.com/2472105/wp-content/uploads/2022/11/10-Poses-para-foto-de-Perfil-Profesional-Mujer-04-2022-10-819x1024.jpg?lossy=1&strip=1&webp=1"
                        alt="User Image" class="rounded-circle" height="60" width="60">
                </a>
                <ul class="dropdown-menu dropdown-menu-end border-0" aria-labelledby="profileDropdown"
                    style="box-shadow: -4px 8px 8px rgba(0, 0, 0, 0.3);">
                    <li class="dropdown-item disabled text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="https://b2472105.smushcdn.com/2472105/wp-content/uploads/2022/11/10-Poses-para-foto-de-Perfil-Profesional-Mujer-04-2022-10-819x1024.jpg?lossy=1&strip=1&webp=1"
                                alt="User Image" class="rounded-circle" height="40" width="40">
                            <div class="ms-2 text-start text-dark">
                                <strong>{{ auth()->user()->name }}</strong><br>
                                <small>{{ auth()->user()->email }}</small>
                            </div>
                        </div>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">My Profile</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" class="dropdown-item">
                            @csrf

                            <button type="submit" class="btn btn-link text-decoration-none text-danger">
                                <i class="fas fa-sign-out-alt me-2"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</nav>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link py-3 px-4 d-flex align-items-center fs-4">
                    <i class="fas fa-tachometer-alt me-3"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('courses.index') }}" class="nav-link py-3 px-4 d-flex align-items-center fs-4">
                    <i class="fas fa-graduation-cap me-3"></i> Courses
                </a>
            </li>
        </ul>
    </div>
</div>
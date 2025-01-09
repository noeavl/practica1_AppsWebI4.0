<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('welcome')}}">
            <img src="https://cdn-icons-png.flaticon.com/128/17201/17201771.png" alt="Logo" height="60"
                class="d-inline-block align-text-top me-2">
            <span class="text-center fw-bold">Core X</span>
        </a>
    </div>
    <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="container-fluid navbar-nav ms-auto">
            <div class="d-flex align-items-center">
                <a class="nav-link me-3" style=" white-space: nowrap;" href="{{ route('login')}}">Iniciar Sesión</a>
                <a class="nav-link" href="{{ route('register')}}">Registrarse</a>
            </div>
        </div>
    </div>
</nav>

<body>
    @yield('body')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
<footer>
    @yield('footer')
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 250px;">
        <p>@2025 Core X Education </p>
    </div>
</footer>

</html>
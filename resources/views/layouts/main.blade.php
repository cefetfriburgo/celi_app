<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- <script src="https://unpkg.com/@popperjs/core@2" defer></script> -->
    <!-- <script src="js/bootstrap.bundle.js" defer></script> -->
    <script src="/js/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="/css/app.css">
    <title>Celi - @yield('titulo')</title>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
</head>

<body>
<header>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="img/celi.png" alt="Logo"
                     class="imageWidth d-inline-block align-text-top">
            </a>
            <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
               aria-controls="offcanvasExample">
                <i class="bi bi-list fs-4"></i>
            </a>
        </div>
    </nav>
</header>
<main>
    <div class="container">
        @yield('principal')
    </div>
    <!-- MENU LATERAL -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <p class="m-0">Menu</p>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="dropdown mt-3">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="/eventos" class="nav-link">Eventos</a></li>
                    <li class="nav-item"><a href="/comoParticipar" class="nav-link">Como participar</a></li>
                    <li class="nav-item"><a href="/contatos" class="nav-link">Contatos</a></li>
                    <li class="nav-item"><a href="/sobreNos" class="nav-link">Sobre nós</a></li>
                </ul>
            </div>
        </div>
    </div>
</main>

<footer>
</footer>
</body>

</html>
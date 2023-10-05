<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

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
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container collapse navbar-collapse">
                <a class="navbar-brand" href="/">
                    <img src="/img/logo-white-e1535748387518.png" alt="Logo" class="imageWidth d-inline-block align-text-top">
                </a>
                <div class="container d-flex justify-content-between">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Proposta de cursos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Diário</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Eventos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div>
            @yield('principal')
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>
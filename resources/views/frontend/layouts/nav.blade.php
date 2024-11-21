<nav class="navbar navbar-expand-lg bg-navbar-theme main-menu-nav py-1">
    <div class="container-fluid">
        <div class="col-3 d-flex justify-content-center align-items-center">
            <a class="navbar-brand mx-2 py-0" href="{{ route('frontend.index') }}">
                <img src="{{ asset('frontend/img/pagina/logo.jpg') }}" alt="Logo" class="img-fluid" style="height: 75px; border-radius: 50%;">
            </a>
        </div>
        <div class="collapse navbar-collapse d-none d-lg-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ Route::is('frontend.index') ? 'active' : '' }}">
                    <a href="{{ route('frontend.index') }}" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item {{ Route::is('alphabet.index') ? 'active' : '' }} mx-5">
                    <a href="{{ route('alphabet.index') }}" class="nav-link">Abecedario</a>
                </li>
                <li class="nav-item {{ Route::is('word.index') ? 'active' : '' }}">
                    <a href="{{ route('word.index') }}" class="nav-link">Palabras</a>
                </li>
            </ul>
        </div>
        <div id="sidebar" class="sidebar">
            <div class="sidebar-header">
                <button id="sidebar-close" class="close-btn">&times;</button>
            </div>
            <ul class="navbar-nav-mobile">
                <li class="nav-item {{ Route::is('frontend.index') ? 'active' : '' }}">
                    <a href="{{ route('frontend.index') }}" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item {{ Route::is('alphabet.index') ? 'active' : '' }}">
                    <a href="{{ route('alphabet.index') }}" class="nav-link">Abecedario</a>
                </li>
                <li class="nav-item {{ Route::is('word.index') ? 'active' : '' }}">
                    <a href="{{ route('word.index') }}" class="nav-link">Palabras</a>
                </li>
            </ul>
            <div class="footer-bottom">
                <p>&copy; 2024 created by Stephen Perez</p>
                <div class="d-flex">
                    <a href="https://www.facebook.com/alfonsoperezpa/" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/stephen-alfons-p%C3%A9rez-parra-a80b17291/" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://www.instagram.com/stephen_perez29/" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">

        </div>
        <button class="navbar-toggler d-lg-none" type="button" id="sidebar-toggle">
            <i class="fa-solid fa-bars menu" style="font-size: 2rem; color: #ffffff;"></i>
        </button>
    </div>
    <div id="overlay"></div>
</nav>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
    // Mostrar el sidebar al hacer clic en el botón de hamburguesa (solo en móvil)
    document.getElementById('sidebar-toggle').addEventListener('click', function () {
        document.getElementById('sidebar').style.width = '250px';
        document.getElementById('overlay').style.display = 'block'; // Mostrar overlay
    });

    // Cerrar el sidebar y el overlay al hacer clic en el botón de cerrar
    document.getElementById('sidebar-close').addEventListener('click', function () {
        document.getElementById('sidebar').style.width = '0';
        document.getElementById('overlay').style.display = 'none'; // Ocultar overlay
    });

    // Cerrar el sidebar y el overlay al hacer clic fuera del sidebar
    window.addEventListener('click', function (event) {
        if (!event.target.matches('.menu') && !event.target.closest('.sidebar')) {
            document.getElementById('sidebar').style.width = '0';
            document.getElementById('overlay').style.display = 'none'; // Ocultar overlay
        }
    });
</script>

<style>
    /* Estilo del Sidebar */
    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        z-index: 1000;
    }

    .sidebar a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: white;
        display: block;
        transition: 0.3s;
    }

    .sidebar a:hover {
        color: #f1f1f1;
    }

    .sidebar .close-btn {
        color: #111111;
        font-size: 27px;
        position: absolute;
        top: 10px;
        right: 19px;
        border-radius: 13px;
    }

    /* Estilo del botón de hamburguesa */
    .navbar-toggler {
        border: none;
        background: transparent;
        outline: none;
    }
</style>
<nav class="navbar navbar-expand-lg bg-navbar-theme main-menu-nav py-1">
    <div class="container-fluid">
        <div class="col-2 d-flex justify-content-center align-items-center">
            <a class="navbar-brand mx-2 py-0" href="{{route('frontend.index')}}">
                <img src="{{asset('frontend/img/pagina/logo.jpg')}}" alt="Logo" class="img-fluid" style="height: 75px; border-radius: 50%;">
            </a>
        </div>
        <div class="col-8 d-flex justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item {{Route::is('frontend.index') ? 'active' : ''}}">
                    <a href="{{route('frontend.index')}}" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item {{Route::is('alphabet.index') ? 'active' : ''}} mx-5">
                    <a href="{{route('alphabet.index')}}" class="nav-link">Abecedario</a>
                </li>
                <li class="nav-item {{Route::is('word.index') ? 'active' : ''}}">
                    <a href="{{route('word.index')}}" class="nav-link">Palabras</a>
                </li>
            </ul>
        </div>
        <div class="col-2 d-flex justify-content-evenly align-items-center">
        </div>
    </div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            $(".main-menu-nav").addClass("fixed-navigation");



        } else {
            $(".main-menu-nav").removeClass("fixed-navigation");

        }

    });
</script>

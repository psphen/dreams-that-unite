@extends('frontend.layouts.app')
@section('title', ('Palabras y frases'))
@section('content')
    <div class="container py-5">
        <div class="mt-5 text-center">
            <h2 class="fw-bold">Aprende las palabras en Señas</h2>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <h4 clas="mb-0">Parentescos</h4>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video 
                            src="{{ asset('frontend/img/pagina/palabras/familia.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;"muted loop>
                        </video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Familia</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/hermano.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Hermano</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/primo.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Primo</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/sobrino.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Sobrino</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/mama.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Mamá</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/papa.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Papá</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/hijo.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Hijo</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/nieto.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Nieto</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/abuela.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Abuela</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/tio.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Tio</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <h4 clas="mb-0">Preguntas</h4>
            </div>
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/que paso.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">¿Que pasó?</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/para que.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">¿Para qué?</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/cual.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">¿Cual?</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/donde.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">¿Dónde?</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/que es eso.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">¿Que es eso?</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <h4 clas="mb-0">Meses</h4>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/enero.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Enero</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/febrero.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Febrero</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/marzo.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Marzo</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/abril.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Abril</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/mayo.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Mayo</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/junio.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Junio</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/julio.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Julio</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/agosto.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Agosto</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/septiembre.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Septiembre</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/octubre.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Octubre</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/noviembre.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Noviembre</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/diciembre.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Diciembre</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <h4 clas="mb-0">Dias</h4>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/lunes.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Lunes</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/martes.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Martes</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/miercoles.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Miercoles</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/jueves.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Jueves</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/viernes.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Viernes</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/sabado.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Sabado</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/domingo.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Domingo</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <h4 clas="mb-0">Otras palabras</h4>
            </div>
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video 
                            src="{{ asset('frontend/img/pagina/palabras/buenos dias.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;"muted loop>
                        </video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Buenos dias</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/buenas tardes.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Buenas tardes</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/buenas noches.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Buenas noches</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/hombre.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Hombre</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/mujer.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Mujer</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/amigos.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Amigos</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video 
                            src="{{ asset('frontend/img/pagina/palabras/novios.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;"muted loop>
                        </video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Novios</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/fonoaudiologo.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Fonoaudiólogo</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/oyente.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Oyente</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/sordo.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Sordo</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/mujer.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Mujer</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/amigos.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Amigos</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.hover-video').forEach(video => {
            video.addEventListener('mouseenter', () => {
                video.play();
            });
            video.addEventListener('mouseleave', () => {
                video.pause();
                video.currentTime = 0;
            });
        });
    </script>
@endsection
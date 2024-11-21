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
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video 
                            src="{{ asset('frontend/img/pagina/palabras/Familia.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;"muted loop>
                        </video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Familia</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Hermano.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Hermano</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Primo.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Primo</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Sobrino.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Sobrino</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Mama.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Mamá</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Papa.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Papá</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Hijo.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Hijo</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Nieto.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Nieto</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Abuela.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Abuela</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Tio.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
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
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Que paso.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">¿Que pasó?</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Para que.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">¿Para qué?</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Cual.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">¿Cual?</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Donde.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">¿Dónde?</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Que es eso.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
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
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Enero.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Enero</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Febrero.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Febrero</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Marzo.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Marzo</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Abril.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Abril</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Mayo.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Mayo</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Junio.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Junio</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Julio.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Julio</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Agosto.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Agosto</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Septiembre.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Septiembre</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Octubre.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Octubre</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Noviembre.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Noviembre</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Diciembre.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
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
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Lunes.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Lunes</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Martes.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Martes</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Miercoles.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Miercoles</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Jueves.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Jueves</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Viernes.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Viernes</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Sabado.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Sabado</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Domingo.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
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
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video 
                            src="{{ asset('frontend/img/pagina/palabras/Buenos dias.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;"muted loop>
                        </video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Buenos dias</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Buenas tardes.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Buenas tardes</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Buenas noches.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Buenas noches</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Hombre.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Hombre</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Mujer.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Mujer</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Amigos.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Amigos</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video 
                            src="{{ asset('frontend/img/pagina/palabras/Novios.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;"muted loop>
                        </video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Novios</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Fonoaudiologo.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Fonoaudiólogo</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Oyente.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Oyente</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-6 my-2">
                <div class="service-box-10 h-100">
                    <div class="card border-0">
                        <video src="{{ asset('frontend/img/pagina/palabras/Sordo.mp4') }}" class="card-img-top img-fluid hover-video" style="border-radius: 12px !important;Z"  loop muted></video>
                        <div class="card-body">
                            <h6 class="card-title text-center mb-0">Sordo</h6>
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
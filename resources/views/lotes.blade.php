@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/mapplic.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <nav class="navbar navbar-white fixed-top navbar-expand-lg">
        <!-- <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="/">
                    <div class="logo-image">
                        <img src="{{ asset('img/logo/logo-amaia.png') }} " class="img-fluid">
                    </div>
                </a>
                <button type="button" class="ml-auto navbar-toggler" data-toggle="collapse" data-target="#navigation-example2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navigation-example2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('landing') }}" class="nav-link">
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#amenidades" class="nav-link">
                            Amenidades
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#contactanos" class="nav-link">
                            Contáctanos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://landrada.mx/cotizador/" target="_blank" class="nav-link">
                            Cotizar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://landrada.mx/central-de-pagos?v=1" class="nav-link">
                            Pago en línea
                        </a>
                    </li>
                    <li class="button-container nav-item iframe-extern">
                        <a href="{{ route('lotes') }}" class="btn  btn-primary   btn-round btn-block">Ver Lotes
                        </a>
                    </li>
                </ul>
            </div>
        </div> -->
        @if (Config::get('languages')[App::getLocale()]['display'] == 'English')
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-translate">
                    <a class="navbar-brand p-0" href="/">
                        <div class="logo-image">
                            <img src="{{ asset('img/logo-regina.png') }} " class="img-fluid ms-auto"
                                style="height: 52px">
                        </div>
                    </a>
                    <button type="button" class="ml-auto navbar-toggler" data-toggle="collapse"
                        data-target="#navigation-example2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navigation-example2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ route('landing') }}" class="nav-link">
                                {{ __('messages.inicio') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#amenidades" class="nav-link">
                                {{ __('messages.amenidades') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#contactanos" class="nav-link">
                                {{ __('messages.contactanos') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://cotizador.landrada.mx/" target="_blank" class="nav-link">
                                {{ __('messages.cotizar') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://landrada.mx/pagos" class="nav-link">
                                {{ __('messages.pago') }}
                            </a>
                        </li>
                        <li class="button-container nav-item iframe-extern">
                            <a href="{{ route('lotes') }}"
                                class="btn  btn-primary   btn-round btn-block">{{ __('messages.verlotes') }}
                            </a>
                        </li>

                        <li class="nav-item dropdown ms-2">
                            <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('img/') }}/{{ Config::get('languages')[App::getLocale()]['img'] }}"
                                    alt="">

                            </a>
                            <div class="dropdown-menu mt-3" aria-labelledby="navbarDropdownMenuLink" style="right: 0!important;">

                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <a class="dropdown-item mr-1" href="{{ route('lang.switch', $lang) }}">
                                            <img class="ml-2" src="{{ asset('img/') }}/{{ $language['img'] }}"
                                                alt="Idioma">
                                            <span class="mr-2"></span>
                                            {{ __('messages.es') }}
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        @else
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-translate">
                    <a class="navbar-brand p-0" href="/">
                        <div class="logo-image">
                            <img src="{{ asset('img/logo-regina.png') }} " class="img-fluid" style="height: 52px">
                        </div>
                    </a>
                    <button type="button" class="ml-auto navbar-toggler" data-toggle="collapse"
                        data-target="#navigation-example2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navigation-example2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ route('landing') }}" class="nav-link">
                                {{ __('messages.inicio') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#amenidades" class="nav-link">
                                {{ __('messages.amenidades') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#contactanos" class="nav-link">
                                {{ __('messages.contactanos') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://cotizador.landrada.mx/" target="_blank" class="nav-link">
                                {{ __('messages.cotizar') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://landrada.mx/pagos" class="nav-link">
                                {{ __('messages.pago') }}
                            </a>
                        </li>
                        <li class="button-container nav-item iframe-extern">
                            <a href="{{ route('lotes') }}"
                                class="btn  btn-primary   btn-round btn-block">{{ __('messages.verlotes') }}
                            </a>
                        </li>

                        <li class="nav-item dropdown ms-2">
                            <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('img/') }}/{{ Config::get('languages')[App::getLocale()]['img'] }}"
                                    alt="">
                            </a>
                            <div class="dropdown-menu mt-3" aria-labelledby="navbarDropdownMenuLink">

                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <a class="dropdown-item mr-1" href="{{ route('lang.switch', $lang) }}">

                                            <img src="{{ asset('img/') }}/{{ $language['img'] }}" alt="Idioma">
                                            <span class="mr-2"></span>
                                            {{ __('messages.en') }}
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        @endif
    </nav>
    <div class="cd-section pt-5" style="margin-top: 3rem;">
        <div class="feat">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">{{ __('messages.aparta') }}</h2>
                        <h5 class="description">{{ __('messages.descripcion') }}</h5>
                    </div>
                </div>
                <div id="main-wrapper wrap">
                    <!-- Site content -->
                    <div id="content">
                        <section id="map-section" class="inner over">
                            <div class="map-container">
                                <div id="mapplic"></div> <!-- Map -->
                            </div>
                        </section>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="cd-section">
        <div class="features-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">{{ __('messages.areas') }}</h2>
                        <h5 class="description">{{ __('messages.descripcion') }}</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('img/places/cenotes.jpg') }}"
                                        alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('img/places/destinos-turisticos.jpg') }}"
                                        alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('img/places/proyecto-federal.jpg') }}"
                                        alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('img/places/pueblo-magico.jpg') }}"
                                        alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('img/places/reserva-tres-lagunas.jpg') }}"
                                        alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('img/places/zonas-arqueologicas.jpg') }}"
                                        alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="my-10 py-5 bg-gradient-white position-relative" style="">
        <span class="mask bg-gradient-dark opacity-8"></span>
        <div class="container position-relative z-index-2">
            <div class="row justify-content-between">
                <div class="col-12 col-md-9 m-auto">
                    <h3 class="text-black mb-lg-0 mb-5">
                        {{ __('messages.labusqueda') }}
                    </h3>
                </div>
                <div class="col-12 col-md-3 m-auto d-flex justify-content-center">
                    <div class="row text-center">
                        <div class="ps-sm-0 ms-auto">
                            <a href="https://api.whatsapp.com/send?phone=5219984011444&text=Quiero conocer más sobre las oportunidades de inversión en Yucatan 🌱"
                                class="btn btn-secondary btn-round mb-0 ms-lg-3 ms-sm-2 mb-sm-0 mb-2 me-auto w-100 d-block">{{ __('messages.contasesor') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mousewheel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/csvparser.js') }}"></script> <!-- Required for CSV Support -->
    <script type="text/javascript" src="{{ asset('js/magnific-popup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mapplic.js') }}"></script>
    @if (Config::get('languages')[App::getLocale()]['display'] == 'English')
        <script type="text/javascript">
        
            $(document).ready(function() {
                var map = $('#mapplic').mapplic({
                    source: 'data/lotes_usd.json',
                    sidebar: true,
                    height: '100%',
                    minimao: false,
                    maxheight: 9500,
                    fullscreen: false,
                    maxscale: 1.8,
                    lightbox: true,
                    developer: false,
                    mapfill: true
                });
            });
        </script>
    @else 
    <script type="text/javascript">
        
        $(document).ready(function() {
            var map = $('#mapplic').mapplic({
                source: 'data/lotes.json',
                sidebar: true,
                height: '100%',
                minimao: false,
                maxheight: 9500,
                fullscreen: false,
                maxscale: 1.8,
                lightbox: true,
                developer: false,
                mapfill: true
            });
        });
    </script>
    @endif
@endpush

<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/logo-regina-favicon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/logo-regina-favicon.png  ')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta name="googlebot" content="index">
    <meta name="robots" content="follow">

    <link rel="canonical" href="https://reginaestilodevida.mx/" />
    <link rel="alternate" href="https://reginaestilodevida.mx/" hreflang="en-us" />

    <!-- Primary Meta Tags -->
    <title>Regina - Nivel de vida a tu altura</title>
    <meta name="title" content="Un estilo de vida inigualable y en conexión con la naturaleza">
    <meta name="description" content="Tu hogar está en el municipio de Lázaro Cárdenas, cerca de la estación del Tren Maya, Nuevo Xcan, y de majestuosas lagunas. Vive en un lugar exclusivo y en armonía con la naturaleza">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://reginaestilodevida.mx/">
    <meta property="og:title" content="Un estilo de vida inigualable y en conexión con la naturaleza">
    <meta property="og:description" content="Tu hogar está en el municipio de Lázaro Cárdenas, cerca de la estación del Tren Maya, Nuevo Xcan, y de majestuosas lagunas. Vive en un lugar exclusivo y en armonía con la naturaleza">
    <meta property="og:image" content="{{asset('/img/places/cenotes.jpg')}}">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://reginaestilodevida.mx/">
    <meta property="twitter:title" content="Un estilo de vida inigualable y en conexión con la naturaleza">
    <meta property="twitter:description" content="Tu hogar está en el municipio de Lázaro Cárdenas, cerca de la estación del Tren Maya, Nuevo Xcan, y de majestuosas lagunas. Vive en un lugar exclusivo y en armonía con la naturaleza">
    <meta property="twitter:image" content="{{asset('/img/palces/cenotes.jpg')}}">


    <meta property="og:type" content="website" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- CSS Files -->
    <link href="{{asset('css/material-kit.css?v=2.1.1')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/custom-styles.css')}}">

    @stack('styles')

</head>

<body class="sections-page sidebar-collapse">

    <div class="main">

        @yield('content')
        <!-- -------- START FOOTER 1 w/ COMPANY DESCRIPTION AND 4 COLS ------- -->
        <footer class="footer py-9 mt-4">
            <div class="container">
                <div class="row text-center text-md-start">
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <a class="navbar-brand" href="/">
                            <div class="logo-image">
                                <img src="{{asset('img/logo-regina.png')}} " class="img-fluid" style="height: 80px">
                            </div>
                        </a>
                        {{-- <h6 class="text-uppercase mb-2">Regina Lotes Semiurbanizados</h6> --}}
                        <p class="mb-4 pb-2">
                            {{__('messages.footerdesc')}}
                        </p>
                    </div>
                    <div class="col-md-3 col-12 ms-lg-auto mb-md-0 mb-4">
                        <h6 class="text-sm">Explora</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a href="{{route('landing')}}" class="nav-link text-secondary">
                                    {{__('messages.inicio')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="/#amenidades">
                                    {{__('messages.amenidades')}}
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="/#contactanos">
                                    {{__('messages.contactanos')}}
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="https://cotizador.landrada.mx/">
                                    {{__('messages.cotizar')}}
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="https://landrada.mx/pagos">
                                    {{__('messages.pago')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="{{ route('lotes') }}">
                                    {{__('messages.verlotes')}}
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-12 mb-md-0 mb-4">
                        <h6 class="text-sm">{{__('messages.avisos')}}</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="https://www.landrada.mx/politica-de-privacidad" target="_blank">
                                    {{__('messages.privacidad')}}
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="https://www.landrada.mx/politica-de-compra" target="_blank">
                                    {{__('messages.compra')}}
                                </a>
                            </li>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset('img/') }}/{{Config::get('languages')[App::getLocale()]['img']}}" alt="">

                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="right: 0!important;">

                                    @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                    <a class="dropdown-item mr-1" href="{{ route('lang.switch', $lang) }}">
                                        <img class="ml-2" src="{{ asset('img/') }}/{{$language['img']}}" alt="Idioma">
                                        <span class="mr-2"></span>
                                        @if(Config::get('languages')[App::getLocale()]['display'] == "English")
                                        {{__('messages.es')}}
                                        @else
                                        {{__('messages.en')}}
                                        @endif
                                    </a>
                                    @endif
                                    @endforeach

                                </div>
                            </li> --}}

                        </ul>
                    </div>

                    <div class="col-md-3 col-12 mb-md-0 mb-4">
                        <h6 class="text-sm">{{__('messages.contactanos')}}</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item text-secondary">
                                SM15 M2 L8 Farallon, Av. Tulum Y Acanceh,
                                {{__('messages.zip')}} 77505, Cancún,
                                Quintana Roo , México.
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="mailto:info@landrada.mx" target="_blank">
                                    info@landrada.mx
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="" target="_blank">
                                    +52 1 998 401 1444
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="horizontal dark mt-lg-5 mt-4 mb-sm-4 mb-1">

                <ul class="social-buttons">
                    <li>
                        <a href="https://www.facebook.com/LandradaDesarrollos/" class="btn btn-just-icon btn-link btn-facebook">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/landradadesarrollos/" target="_blank" class="btn btn-just-icon btn-link btn-instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/landradadesarrollos" target="_blank" class="btn btn-just-icon btn-link btn-linkedin">
                            <i class="fa fa-linkedin-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCARO4RsYrAZ1R7nPqd-_-Lg" target="_blank" class="btn btn-just-icon btn-link btn-youtube">
                            <i class="fa fa-youtube-play"></i>
                        </a>
                    </li>
                </ul>
                <div class="copyright pull-center">
                    {{ __('Copyright ©') }}
                    <script>
                        document.write(new Date().getFullYear())
                    </script><a href="https://www.landrada.mx" target="_blank">{{ __(' Landrada Desarrollos') }}</a>{{__('messages.todosderechos')}}
                </div>

            </div>
        </footer>
        <!-- -------- END FOOTER 1 w/ COMPANY DESCRIPTION AND 4 COLS ------- -->
    </div>

    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-login" role="document">
            <div class="modal-content">
                <div class="card card-signup card-plain">
                    <div class="modal-header">
                        <div class="card-header card-header-primary text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="material-icons">clear</i>
                            </button>
                            <h4 class="card-title">{{__('messages.contactanos')}}</h4>
                            <div class="social-line">
                                <a href="#pablo" class="btn btn-just-icon btn-link">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#pablo" class="btn btn-just-icon btn-link">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#pablo" class="btn btn-just-icon btn-link">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form method="post" role="form" action="{{ route('leadtel') }}">
                            @csrf
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating is-empty">
                                            <label class="bmd-label-floating">{{__('messages.nombre')}}</label>
                                            <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror">
                                            <span class="material-input"></span>
                                            @error('name')
                                            <span class="alert alert-danger alert-dismissible fade show invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating is-empty">
                                            <label class="bmd-label-floating">{{__('messages.apellido')}}</label>
                                            <input type="text" name="lastname" value="{{old('lastname')}}" class="form-control @error('lastname') is-invalid @enderror">
                                            <span class="material-input"></span>
                                            @error('lastname')
                                            <span class="alert alert-danger alert-dismissible fade show invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group label-floating is-empty">
                                    <label class="bmd-label-floating">{{__('messages.correo')}}</label>
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror">
                                    <span class="material-input"></span>
                                    @error('email')
                                    <span class="alert alert-danger alert-dismissible fade show invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group label-floating is-empty">
                                    <label for="exampleMessage1" class="bmd-label-floating">{{__('messages.phone')}}</label>
                                    <input type="tel" name="phone" value="{{old('phone')}}" class="form-control @error('phone') is-invalid @enderror">
                                    <span class="material-input"></span>
                                    @error('phone')
                                    <span class="alert alert-danger alert-dismissible fade show invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer justify-content-center">

                                <input type="submit" class="btn btn-primary pull-right" value="{{__('messages.contactar')}}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->

    <!--   Core JS Files   -->
    <script src="{{asset('js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/moment.min.js')}}"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>


    <!-- Control Center for Lugar alrededor: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('js/material-kit.js?v=2.1.1')}}" type="text/javascript"></script>
    {{-- <script>
        var cantScroll = 0;
        $(window).scroll(function() {
            // calculate the percentage the user has scrolled down the page
            var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());
            $('.bar-long').css('width', scrollPercent + "%");

            if (cantScroll == 0 && scrollPercent > 20) {
                $('#loginModal').modal('show');
                cantScroll++;
            }
        });
    </script> --}}
    <script>
        $(function() {

            $(document).scroll(function() {

                var $nav = $(".navbar-fixed-top");

                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());

            });

            $(document).ready(function() {

                $('input[name="locationProperty"]').ready(function() {

                    var location = $('input[name="locationProperty"]:checked');

                    var percent = $('#percentageControlRange').val();

                    let months = $('input[name="type-pay"]:checked');

                    let monthsToPay = months.val();

                    var priceValue = location.val();

                    const options = {
                        minimumFractionDigits: 2,

                        maximumFractionDigits: 2
                    };

                    let hitch = (priceValue * percent) / 100;

                    let remaining = priceValue - hitch;

                    let monthlypayments = remaining / monthsToPay;

                    let formatedNumberMonths = Number(monthlypayments).toLocaleString('en', options);

                    let formatedNumber = Number(hitch).toLocaleString('en', options);

                    $('#priceEngageTitle').text(' $' + humanizeNumber(formatedNumber) + 'MXN');

                    $('#price').html(' $' + humanizeNumber(priceValue) + ' MXN <span style="font-size: 12px;"></span>');

                    $('#total-price').val(location.val());

                    $('#valuepercentTitle').val(hitch);

                    $('#monthlyPay').text(' $' + formatedNumberMonths + ' MXN');

                    $('#valuemonthlyPay').val(monthlypayments.toFixed(2));

                });

                $('#percentageControlRange').change(function() {

                    let percent = $('#percentageControlRange').val();

                    let months = $('input[name="type-pay"]:checked');

                    let monthsToPay = months.val();

                    const options = {

                        minimumFractionDigits: 2,

                        maximumFractionDigits: 2
                    };

                    $('#percentTitle').text(' ' + percent + ' %');
                    let location = $('input[name="locationProperty"]:checked').val();

                    let hitch = (location * percent) / 100;

                    let remaining = location - hitch;

                    let monthlypayments = remaining / monthsToPay;

                    var formatedNumber = Number(hitch).toLocaleString('en', options);

                    let formatedNumberMonths = Number(monthlypayments).toLocaleString('en', options);

                    $('#priceEngageTitle').text(' $' + humanizeNumber(formatedNumber) + ' MXN');

                    $('#valuepercentTitle').val(hitch);

                    $('#monthlyPay').text(' $' + formatedNumberMonths + ' MXN');

                    $('#valuemonthlyPay').val(monthlypayments.toFixed(2));
                });

                $('input[name="locationProperty"]').change(function() {

                    var location = $('input[name="locationProperty"]:checked');

                    var percent = $('#percentageControlRange').val();

                    let months = $('input[name="type-pay"]:checked');

                    let monthsToPay = months.val();

                    var priceValue = location.val();
                    const options = {

                        minimumFractionDigits: 2,

                        maximumFractionDigits: 2

                    };
                    let hitch = (priceValue * percent) / 100;

                    let remaining = priceValue - hitch;

                    let monthlypayments = remaining / monthsToPay;

                    let formatedNumberMonths = Number(monthlypayments).toLocaleString('en', options);

                    let formatedNumber = Number(hitch).toLocaleString('en', options);

                    $('#priceEngageTitle').text(' $' + humanizeNumber(formatedNumber) + ' MXN');

                    /*if( $('#locationProperty1').prop('checked') ) {
                        $('#apartedTitle').text('$ 12,900.00');
                     }

                     if( $('#locationProperty2').prop('checked') ) {
                        $('#apartedTitle').text('$ 12,900.00');
                     }*/

                    $('#price').html(' $' + humanizeNumber(priceValue) + ' MXN <span style="font-size: 12px;"></span>');

                    $('#total-price').val(location.val());

                    $('#valuepercentTitle').val(hitch);

                    $('#monthlyPay').text(' $' + formatedNumberMonths + ' MXN');

                    $('#valuemonthlyPay').val(monthlypayments.toFixed(2));

                });

                $('input[name="type-pay"]').change(function() {

                    let months = $('input[name="type-pay"]:checked');

                    let location = $('input[name="locationProperty"]:checked');

                    let percent = $('#percentageControlRange').val();

                    let priceValue = location.val();

                    let monthsToPay = months.val();

                    const options = {

                        minimumFractionDigits: 2,

                        maximumFractionDigits: 2

                    };

                    let hitch = (priceValue * percent) / 100;

                    let remaining = priceValue - hitch;

                    let monthlypayments = remaining / monthsToPay;
                    let formatedNumber = Number(monthlypayments).toLocaleString('en', options);
                    $('#monthlyPay').text(' $' + formatedNumber);
                    $('#valuemonthlyPay').val(monthlypayments.toFixed(2));

                });

                $('input[name="loan-type"]').change(function() {

                    var location = $('input[name="locationProperty"]:checked').val();

                    let monthspayments = $('input[name="type-pay"]:checked').val();

                    let monthsTotalPay = parseFloat($('#valuemonthlyPay').val());

                    let totalEngage = parseFloat($('#valuepercentTitle').val());

                    let aparted = 8900;

                    let finaltype = $('input[name="loan-type"]:checked').val();

                    const options = {

                        minimumFractionDigits: 2,

                        maximumFractionDigits: 2

                    };
                    console.log(finaltype);

                    let initialPay = totalEngage + aparted;

                    if (finaltype == 'total') {

                        var totalContado = parseInt(location) + parseInt(aparted);

                        $('#initialPay').text(' $' + Number(location).toLocaleString('en', options) + ' MXN *');

                        $('#numberOFmonths').css('display', 'none');

                        $('#totalMonthlyBill').css('display', 'none');

                        $('#pricesCard').css('display', 'block');
                        $('#pricesCard').css('position', 'absolute');
                        $('#pricesCard').css('bottom', '-480px');

                        $('#totalTitle').text(' $' + Number(totalContado).toLocaleString('en', options) + ' MXN *');

                        $('#billElement').css('display', 'block');

                        $('#numberOFmonths').css('display', 'none');

                        $('#totalMonthlyBill').css('display', 'none');

                    }

                    if (finaltype == 'months') {

                        $('#initialPay').text(' $' + Number(totalEngage).toLocaleString('en', options) + ' MXN *');

                        $('#numberOFmonths').text(monthspayments + ' mensualidades de ');

                        $('#totalMonthlyBill').text(' $' + Number(monthsTotalPay).toLocaleString('en', options) + ' MXN *');

                        $('#pricesCard').css('display', 'block');

                        $('#totalTitle').text(' $' + Number(initialPay).toLocaleString('en', options) + ' MXN *');

                        $('#billElement').css('display', 'block');

                        $('#numberOFmonths').css('display', 'block');

                        $('#totalMonthlyBill').css('display', 'block');
                    }

                });

                $('#buttonClose').click(function() {
                    $('#pricesCard').css('display', 'none');
                })

                $('#buttonToInterest').click(function() {

                    var location = $('#priceEngageTitle').text();

                    var total = $('#totalTitle').text();

                    $('#secondCardCtizador').css('display', 'block');

                    $('#firstCardCtizador').css('display', 'none');
                });

                $('#btnSubmitData').click(function() {

                    event.preventDefault()

                    $('#lastCardCtizador').css('display', 'block');

                    $('#secondCardCtizador').css('display', 'none');

                });

                $('#btn-submitContact').click(function() {

                    event.preventDefault();



                    var name = $('#visitor_name').val();

                    var email = $('#visitor_email').val();

                    var phone = $('#visitor_phone').val();



                    var objectToRequest = {

                        name: name,

                        email: email,

                        phone: phone

                    }

                    $.ajax({

                        type: 'POST',

                        url: 'contacto.php',

                        data: objectToRequest,

                        success: function(data) {

                            if (data == false) {

                                Swal.fire({

                                    icon: 'error',

                                    title: 'Oops... 403',

                                    text: 'Algo ha salido mal , intentelo de nuevo mas tarde.',

                                })

                            }

                            if (data == 'Sin Exito') {

                                Swal.fire({

                                    icon: 'error',

                                    title: 'Oops... 505',

                                    text: 'Algo ha salido mal , intentelo de nuevo mas tarde.',

                                })

                            }

                            Swal.fire({

                                icon: 'success',

                                title: 'Enviado',

                                text: 'Gracias ' + data + ', en menos de 24 horas recibirás respuesta de un asesor, mientras puedes seguir navegando en Costa Flamingo.',

                            })

                        }

                    });

                });

                $('#btnRoadLocation').click(function() {

                    $('#locationProperty2').prop('checked', false);

                    $('#locationProperty1').prop('checked', true);

                    var location = $('input[name="locationProperty"]:checked');

                    var percent = $('#percentageControlRange').val();

                    let months = $('input[name="type-pay"]:checked');

                    let monthsToPay = months.val();

                    var priceValue = location.val();

                    const options = {

                        minimumFractionDigits: 2,

                        maximumFractionDigits: 2

                    };

                    let hitch = (priceValue * percent) / 100;

                    let remaining = priceValue - hitch;

                    let monthlypayments = remaining / monthsToPay;

                    let formatedNumberMonths = Number(monthlypayments).toLocaleString('en', options);

                    let formatedNumber = Number(hitch).toLocaleString('en', options);

                    $('#priceEngageTitle').text(' $' + humanizeNumber(formatedNumber) + ' MXN');

                    //$('#apartedTitle').text('$ 12,900.00');

                    $('#price').html(' $' + humanizeNumber(priceValue) + ' MXN <span style="font-size: 12px;"></span>');

                    $('#total-price').val(location.val());

                    $('#valuepercentTitle').val(hitch);

                    $('#monthlyPay').text(' $' + formatedNumberMonths + ' MXN');

                    $('#valuemonthlyPay').val(monthlypayments.toFixed(2));
                });

                $('#btnBeachLocation').click(function() {

                    $('#locationProperty2').prop('checked', true);

                    $('#locationProperty1').prop('checked', false);
                    var location = $('input[name="locationProperty"]:checked');

                    var percent = $('#percentageControlRange').val();

                    let months = $('input[name="type-pay"]:checked');

                    let monthsToPay = months.val();

                    var priceValue = location.val();
                    const options = {

                        minimumFractionDigits: 2,

                        maximumFractionDigits: 2

                    };
                    let hitch = (priceValue * percent) / 100;

                    let remaining = priceValue - hitch;

                    let monthlypayments = remaining / monthsToPay;

                    let formatedNumberMonths = Number(monthlypayments).toLocaleString('en', options);

                    let formatedNumber = Number(hitch).toLocaleString('en', options);

                    $('#priceEngageTitle').text(' $' + humanizeNumber(formatedNumber) + 'MXN');

                    //$('#apartedTitle').text('$ 12,900.00');

                    $('#price').html(' $' + humanizeNumber(priceValue) + ' MXN <span style="font-size: 12px;"></span>');

                    $('#total-price').val(location.val());

                    $('#valuepercentTitle').val(hitch);

                    $('#monthlyPay').text(' $' + formatedNumberMonths + ' MXN');

                    $('#valuemonthlyPay').val(monthlypayments.toFixed(2));
                });
            });
        });

        function humanizeNumber(n) {
            n = n.toString()
            while (true) {
                var n2 = n.replace(/(\d)(\d{3})($|,|\.)/g, '$1,$2$3')
                if (n == n2) break
                n = n2
            }
            return n
        }
    </script>

    @stack('scripts')

    <script>
        let mapZoom = document.querySelector('.mapplic-map')
        console.log('ZOoom: ',mapZoom);
    </script>
</body>

</html>
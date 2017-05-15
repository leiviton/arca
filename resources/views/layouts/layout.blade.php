<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>{{$titulo}}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="{{ URL::asset('theme/img/logo/arca2.png') }}">
    <!-- Bootstrap Css -->
    <link href="{{ URL::asset('theme/bootstrap-assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style -->
    <link href="{{ URL::asset('theme/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('theme/plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('theme/plugins/owl-carousel/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('theme/plugins/Lightbox/dist/css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('theme/plugins/Icons/et-line-font/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('theme/plugins/animate.css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('theme/css/main.css') }}" rel="stylesheet">
    <!-- Icons Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="layout">
        <!-- Preloader
        ============================================= -->
        <div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
        <!-- Header
        ============================================= -->

            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ URL::asset('theme/img/logo/arca.png') }}" class="arca" height="80" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                        <div class="col-md-8 col-xs-12 nav-wrap">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ url('/') }}" class="page-scroll">Home</a></li>
                                <li><a href="{{ url('/galery') }}" class="page-scroll">Galeria</a></li>
                                <li><a href="#portfolio" class="page-scroll">Eventos</a></li>
                                <li><a href="#team" class="page-scroll">Videos</a></li>
                                <li><a href="#contact" class="page-scroll">Contato</a></li>
                            </ul>
                        </div>
                        <div class="social-media hidden-sm hidden-xs">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/ComunidadeCristaArca" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCgCH1O7cvOXea_xmcWwZFqA" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            @yield('content')
        <!-- Footer
        ============================================= -->
        <footer>
            <div class="container">
                <h1>ARCA</h1>
                <div class="social">
                    <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                    <a href="#"><i class="fa fa-dribbble fa-2x"></i></a>
                </div>
                <h6>&copy; {{$year}} Arca WebSite.Development By Leiviton</h6>
            </div>
        </footer>
    </div>
    <div class="container-loading">
        <img class="img-loading" src="~/Images/loader.gif" />
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('theme/bootstrap-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('theme/js/custom.js') }}"></script>
    <!-- JS PLUGINS -->
    <script src="{{ URL::asset('theme/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('theme/js/jquery.easing.min.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/countTo/jquery.countTo.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/inview/jquery.inview.min.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/Lightbox/dist/js/lightbox.min.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/WOW/dist/wow.min.js') }}"></script>
    
        <!-- GOOGLE MAP -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    </body>

</html>
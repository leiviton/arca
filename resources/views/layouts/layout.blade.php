<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" ng-app="arca">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>{{$titulo}}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Comunidade Cristã Arca - Seu lugar de encontro com Deus">
    <meta name="keywords" content="Arca, Guaxupé, Jesus, Evangelicos, Jovem, Cristão">
    <meta name="author" content="Leiviton Sistemas - leivitonpj@gmail.com">

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
	<link href="{{ URL::asset('theme/css/bootstrap-player.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript">
        diretorio = "/theme/img/sound/";
        musicas = ["02","03","04","05","06","07","08","09","10","2"];
        musicaAtual = 0;
        $(document).ready(function() {
            carregaMusica();
            $("#btnNext").click(function() {
                musicaAtual++;
                carregaMusica();
            });                
        });    

        carregaMusica = function() {
            $("#player-source").attr("src", diretorio+musicas[musicaAtual]+".mp3");
            $("#player").load();                
        }
        $(document).ready(function() {
            carregaMusica1();
            $("#btnNext1").click(function() {
                musicaAtual++;
                carregaMusica();
            });                
        });    

        carregaMusica1 = function() {
            $("#player-source1").attr("src", diretorio+musicas[musicaAtual]+".mp3");
            $("#player1").load();                
        }
    </script>

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
                        <a class="navbar-brand hidden-sm hidden-xs" href="{{ url('/') }}"><img src="{{ URL::asset('theme/img/logo/arca.png') }}" class="arca" height="80" alt="logo"></a>
                        <a class="navbar-brand hidden-lg hidden-md" href="{{ url('/') }}"><img src="{{ URL::asset('theme/img/logo/arcasm2.png') }}" class="arca" height="80" alt="logo" style="margin-top:1px; margin-left:30px;"></a>
                    </div>
                    <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                        <div class="col-md-8 col-xs-12 nav-wrap">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/galery') }}">Galeria</a></li>
                                <li><a href="#">Eventos</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="{{ url('/contact') }}">Contato</a></li>
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
             <!-- Google Map  digital CODEANYWHERE-ebb100dd
        ============================================= -->
        <div id="map"></div>
        <div class="col-md-2 play-home hidden-sm hidden-xs">
        <audio id="player" controls>
            <source id="player-source" type="audio/mpeg"/>    
        </audio>
        <button id="btnNext" class="btn btn-sm btn-primary" style="background: rgba(55,50, 190, 1); border: none; margin-top: -95px; margin-left: 190px; color:#000;padding:6px;"><i class="fa fa-forward"></i></button>
        </div>
        <!-- Footer
        ============================================= -->
        <footer>
            <div class="col-sm-12 play-home-sm hidden-md hidden-lg">
                <audio id="player1" controls>
                    <source id="player-source1" type="audio/mpeg"/>    
                </audio>
                <button id="btnNext1" class="btn btn-sm btn-primary" style="background: rgba(55,50, 190, 1); border: none; margin-top: -95px; margin-left: 190px; color:#000;padding:6px;"><i class="fa fa-forward"></i></button>
            </div>
            <div class="container">
                <h1>ARCA</h1>
                <div class="social">
                   <a href="https://www.facebook.com/ComunidadeCristaArca" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                   <a href="https://www.youtube.com/channel/UCgCH1O7cvOXea_xmcWwZFqA" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
                            
                </div>
                <h6>&copy; {{$year}} Arca WebSite. Development By Leiviton</h6>
            </div>
        </footer>
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
    <script src="{{ URL::asset('theme/js/bootstrap-player.js') }}"></script>
    
        <!-- GOOGLE MAP -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYDjbhFPGaDVW5PJrgZ76SHJ0pWCtYbN0"></script>
    </body>

</html>
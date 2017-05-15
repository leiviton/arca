@extends('layouts.layout')

@section('content')

<section class="main-header">
            <div id="owl-hero" class="owl-carousel owl-theme">
                <div class="item img-responsive" style="background-image: url({{ URL::asset('theme/img/sliders/1.png') }})">
                    <!--div class="caption">
                        <h6>Branding / Design / Creativty</h6>
                        <h1>We Are <span>Rise</span></h1>
                        <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
                    </div-->
                </div>
                <div class="item img-responsive" style="background-image: url({{ URL::asset('theme/img/sliders/5.png') }})">
                    <!--div class="caption">
                        <h6>Branding / Design / Creativty</h6>
                        <h1>Creative <span>Design</span></h1>
                        <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
                    </div-->
                </div>
                <div class="item img-responsive" style="background-image: url({{ URL::asset('theme/img/sliders/6.png') }})">
                    <!--div class="caption">
                        <h6>Branding / Design / Creativty</h6>
                        <h1>Clean <span>Code</span></h1>
                        <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
                    </div-->
                </div>
            </div>
        </section>

        <!-- Welcome
        ============================================= -->
        <section id="welcome">
            <div class="container">
                <h2>Seja impactado pelo amor de <span>Jesus</span></h2>
                <hr class="sep">
                <p>Lugar de adoração e de encontro com Jesus</p>
                <img class="img-responsive center-block" data-wow-delay=".3s" src="{{ URL::asset('theme/img/welcome/logo.png') }}" alt="logo">
            </div>
        </section>

@endsection
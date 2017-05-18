@extends('layouts.layout')

@section('content')
<div class="container">
    <!-- Indicators -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ URL::asset('theme/img/sliders/1.png') }}">
            </div>
            <div class="item">
                <img src="{{ URL::asset('theme/img/sliders/3.png') }}" alt="Chania">
            </div>
            <div class="item">
                <img src="{{ URL::asset('theme/img/sliders/5.png') }}" alt="Flower">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-double-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-double-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    </div>
</div>

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
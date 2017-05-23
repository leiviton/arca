@extends('layouts.layout')

@section('content')      
        <!-- Portfolio
        ============================================= -->
        <section id="portfolio" style="margin-top: 50px;">
            <div class="container-fluid">
                <h2>Fotos</h2>
                <hr class="sep">
                <p>Eventos e cultos</p>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <a class="portfolio-box" href="{{ URL::asset('theme/img/portfolio/1.jpg') }}" data-lightbox="image-1" data-title="Your caption">
                            <img src="{{ URL::asset('theme/img/portfolio/1.jpg') }}" class="img-responsive" alt="1">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <a href="{{ URL::asset('theme/img/portfolio/2.jpg') }}" class="portfolio-box" data-lightbox="image-2" data-title="Your caption">
                            <img src="{{ URL::asset('theme/img/portfolio/2.jpg') }}" class="img-responsive" alt="2">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <a href="{{ URL::asset('theme/img/portfolio/3.jpg') }}" class="portfolio-box" data-lightbox="image-3" data-title="Your caption">
                            <img src="{{ URL::asset('theme/img/portfolio/3.jpg') }}" class="img-responsive" alt="3">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <a href="{{ URL::asset('theme/img/portfolio/4.jpg') }}" class="portfolio-box" data-lightbox="image-4" data-title="Your caption">
                            <img src="{{ URL::asset('theme/img/portfolio/4.jpg') }}" class="img-responsive" alt="4">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <a href="{{ URL::asset('theme/img/portfolio/5.jpg') }}" class="portfolio-box" data-lightbox="image-5" data-title="Your caption">
                            <img src="{{ URL::asset('theme/img/portfolio/5.jpg') }}" class="img-responsive" alt="5">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <a href="{{ URL::asset('theme/img/portfolio/6.jpg') }}" class="portfolio-box" data-lightbox="image-6" data-title="Your caption">
                            <img src="{{ URL::asset('theme/img/portfolio/6.jpg') }}" class="img-responsive" alt="6">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
@endsection
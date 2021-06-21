@extends('user.layouts.master')
@section('title', 'Home')

@section('portfolio')

        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <div class="container">
                    <div class="row flex-center">
                        <div class="col-md-8 col-lg-5 text-center">
                            <h2>Portofolio</h2>
                            <p>Ini adalah kisah pelanggan kami yang telah bergabung dengan kami dengan senang hati saat menggunakan jasa kami.
                            </p>
                        </div>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                            </ul>
                        </div>
                    </div>

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{asset('/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>ONNE </h4>
                                    <p>Label kemasan </p>
                                    <div class="portfolio-links">
                                        <a href="portfolio-details.html" title="More Details"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="{{asset('/img/portfolio/portfolio-1.jpg')}}"  class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Zugucase.com</h4>
                                    <p>Web</p>
                                    <div class="portfolio-links">
                                        <a href="portfolio-details.html" title="More Details"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

        </section>

      
    @endsection
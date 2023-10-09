@extends('layouts.app')
@section('content')
    <!--Main Slider Start-->
    <section class="main-slider" id="home">
        @include('pages.slider_home')
    </section>
    <section class="about-one" id="about">
        <div class="container">
            <div class="row">
                @include('pages.about')
            </div>
        </div>
    </section>
    <section class="service-three" id="services">
        <div class="service-three__bg" style="background-image: url(assets/images/shapes/service-bg-1.jpg);"></div>
        <div class="container">
            @include('pages.services')
        </div>
    </section>
    <div class="client-carousel pt-5 mt-5" id="products">
        <div class="container">
            @include('pages.product')
        </div><!-- /.container -->
    </div><!-- /.client-carousel -->
    <!-- Call To Action Start -->
    <section class="cta-one jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" id="mission">
        <div class="cta-one__bg jarallax-img" style="background-image: url(assets/images/backgrounds/cta-bg-1.jpg);"></div>
        @include('pages.missions')
    </section>
    <!-- Feature Start -->
    @include('pages.feature')

    <!-- Feature End -->
    <!-- Portfolio Start -->
    <section class="portfolio-one" id="projects">
        <div class="container-fluid">
            <div class="row">
                @include('pages.projects')
            </div>
    </section>
    <div class="client-carousel" id="clients">
        <div class="container">
            @include('pages.client')


        </div><!-- /.container -->
    </div><!-- /.client-carousel -->
    <!-- Choose Start -->
    <section class="choose-one" id="vision">
        <div class="choose-one__bg wow slideInLeft" data-wow-delay="200ms">
            <div class="choose-one__bg__one"></div>
            <div class="choose-one__bg__two"></div>
        </div>
        @include('pages.vision')
    </section>
    <!-- Call To Action Start -->
    <section class="fact-one">
        <div class="fact-one__bg" style="background-image: url(assets/images/shapes/funfact-bg-1.png);"></div>
        @include('pages.vision_section2')
    </section>
    <!-- Contact Start -->
    <section class="contact-one" id="contact">
        <div class="contact-one__bg" style="background-image: url(assets/images/shapes/contact-bg-1.png);"></div>
        <div class="container">
            @include('pages.contact')
        </div>
    </section>
    <!-- Contact End -->
    <!--Google Map Start-->
    <section class="google-map">
        <iframe src="{{ app('contact')->map }}" class="google-map__one" allowfullscreen></iframe>
    </section>
    <!--Google Map End-->
@endsection

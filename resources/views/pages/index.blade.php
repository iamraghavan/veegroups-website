@extends('layouts.app')
@section('content')


<div class="hero-video-area">
    <div class="hero-video-wrapper">
        <video autoplay loop muted playsinline preload="auto">
            <source src="https://cdn.pixabay.com/video/2017/10/21/12543-239934681_large.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-video-overlay"></div>
    </div>
</div>

<div class="banner-image-three-area bg-img" data-bg="{{ asset('assets/img/patterns/6.png') }}" style="background-image: url('{{ asset('assets/img/patterns/6.png') }}');">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 border-left border-right">
                <div class="banner-image-three__left">
                    <div class="banner-image-three__content">
                        <h4 class="subtitle">OUR STORY</h4>
                        <h3 class="title">Delivering Excellence <span class="highlight">Since 1995</span></h3>
                        <p class="subtitle-big">Welcome to JAY VEE GROUP, your premier destination for innovative and sustainable PEB structure, warehouse, and factory solutions.</p>
                        <p class="text">
                            Since 1995, we have been committed to excellence in design and functionality, meeting the diverse needs of our clients across India. Join us in our journey of building the future, one project at a time.
                        </p>
                        <a href="{{ url('about') }}" class="see-more-link see-more-link--dark see-more-link--dark--style2 see-more-link--dark--style2--alt">READ MORE <i class="ion-arrow-right-c"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 border-right">
                <div class="banner-image-three__right">
                    <div class="banner-image-three__image">
                        <div class="banner-image">
                            <img src="{{ asset('assets/img/banner/banner11.jpg') }}" class="img-fluid" alt="JAY VEE Banner">
                            {{-- <div class="banner-sign">
                                <img src="{{ asset('assets/img/icons/sign.png') }}" class="img-fluid" alt="Signature">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="industry-grid-area">
    <div class="row g-0">
        <div class="col-lg-12">
            <div class="single-industry-grid-two-wrapper">

                <!-- JAY VEE STRUCTURALS ENGINEERING PVT. LTD. -->
                <div class="single-industry-grid-two">
                    <div class="single-industry-grid-two__image bg-img" data-bg="{{ asset('assets/img/jve/bg/steel-fabrication.webp') }}" style="background-image: url('{{ asset('assets/img/industry/1-960x430.jpg') }}');"></div>
                    <div class="single-industry-grid-two__content">
                        <div class="content-wrapper">
                            <h2 class="title"><a href="#">Jay Vee <span class="highlight">Structurals</span></a></h2>
                            <p class="text">
                                Specializing in structural design and planning, we offer high-quality steel fabrication solutions for modern industrial demands.
                            </p>
                        </div>
                        <a href="{{ url('service-details') }}" class="post-readmore-btn"><span>READ MORE</span> <i class="ion-android-arrow-forward"></i></a>
                    </div>
                </div>

                <!-- JAY VEE ENGINEERING -->
                <div class="single-industry-grid-two">
                    <div class="single-industry-grid-two__image bg-img" data-bg="{{ asset('assets/img/jve/bg/peb-structure-1000x1000.webp') }}" style="background-image: url('{{ asset('assets/img/industry/2-960x430.jpg') }}');"></div>
                    <div class="single-industry-grid-two__content">
                        <div class="content-wrapper">
                            <h2 class="title"><a href="#">Jay Vee <span class="highlight">Engineering</span></a></h2>
                            <p class="text">
                                We deliver robust pre-engineered buildings, crane girders, and mezzanine floors tailored to meet industrial requirements.
                            </p>
                        </div>
                        <a href="{{ url('service-details') }}" class="post-readmore-btn"><span>READ MORE</span> <i class="ion-android-arrow-forward"></i></a>
                    </div>
                </div>

                <!-- JAKUVA BUILD TECH -->
                <div class="single-industry-grid-two">
                    <div class="single-industry-grid-two__image bg-img" data-bg="{{ asset('assets/img/jve/bg/construction.webp') }}" style="background-image: url('{{ asset('assets/img/industry/3-960x430.jpg') }}');"></div>
                    <div class="single-industry-grid-two__content">
                        <div class="content-wrapper">
                            <h2 class="title"><a href="#">Jakuva <span class="highlight">Build Tech</span></a></h2>
                            <p class="text">
                                Experts in industrial construction, we build high-performance facilities with specialized flooring and turnkey civil works.
                            </p>
                        </div>
                        <a href="{{ url('service-details') }}" class="post-readmore-btn"><span>READ MORE</span> <i class="ion-android-arrow-forward"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<livewire:client-logo-slider />






@php

$projects = [
    [
        'icon' => 'assets/img/icons/tree.png',
        'count' => 2000,
        'title' => 'Power Plants',
        'subtext' => "With a countrywide network of power plants, we're doing our best to power our community."
    ],
    [
        'icon' => 'assets/img/icons/home.png',
        'count' => 3000,
        'title' => 'Industrial Projects',
        'subtext' => "We have always been proud of what we have accomplished influential changes."
    ]
];

@endphp


<div class="project-counter-area">
    <div class="row g-0">
        <div class="col-lg-12">
            <div class="project-counter-wrapper">
                <!-- project counter-bg -->
                <div class="project-counter-bg bg-img" 
                     data-bg="{{ asset('assets/img/jve/bg/civil-engineering-background-yslw7d3oel5m2qfp.webp') }}" 
                     style="background-image: url('{{ asset('assets/img/jve/bg/civil-engineering-background-yslw7d3oel5m2qfp.webp') }}');">
                </div>

                <!-- project counter content -->
                <div class="project-counter-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="project-counter-single-content-wrapper">
                                <div class="row">
                                    @foreach($projects as $project)
                                        <div class="col-md-6">
                                            <!-- project counter single content -->
                                            <div class="project-counter-single-content">
                                                <div class="project-counter-single-content__image">
                                                    <img src="{{ asset($project['icon']) }}" class="img-fluid" alt="">
                                                </div>
                                                <div class="project-counter-single-content__content">
                                                    <span class="project-counter-single-content__project-count counter">
                                                        {{ $project['count'] }}
                                                    </span>
                                                    <h5 class="project-counter-single-content__project-title">
                                                        {{ $project['title'] }}
                                                    </h5>
                                                    <p class="project-counter-single-content__subtext">
                                                        {{ $project['subtext'] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /project counter content -->

            </div>
        </div>
    </div>
</div>

<livewire:testimonials-slider />
<livewire:what-we-do />

<div class="support-footer__area">
   <div class="row g-0">
     
      <div class="col-md-6">
         <div class="support-footer__single bg-img" data-bg="assets/img/icons/message.png" style="background-image: url(&quot;assets/img/icons/message.png&quot;);">
            Email: jayveesepl@gmail.com
         </div>
      </div>
      <div class="col-md-6">
         <div class="support-footer__single support-footer__single--dark bg-img" data-bg="assets/img/icons/support.png" style="background-image: url(&quot;assets/img/icons/support.png&quot;);">
            Support: 044 – 26550079
         </div>
      </div>
   </div>
</div>


@endsection

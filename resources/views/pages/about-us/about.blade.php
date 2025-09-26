@extends('layouts.app')
@section('content')

{{-- content --}}
<livewire:breadcrumbs
    title="About Us"
    :background="asset('assets/img/jve/bg/19.webp')"
    :items="[
        ['label' => 'Home', 'route' => 'index'], 
        ['label' => 'About Us'],
        ['label' => 'About Us']                 
    ]"
/>


<div class="page-content-wrapper">
        
    <!--====================  about text content ====================-->
    <div class="about-text-area section-space--inner--top--100">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-text-wrapper">
                        <p>Jay Vee Engineering was established in 1995 under the dynamic leadership and visionary endeavor of Mr. Udayakumar, a veteran in the field of fabrication and erection of structures. The company aims to provide a complete package, from designing to execution services in the construction industry.</p>
                        <p class="mb-3 mb-md-0">With over three decades of experience, Jay Vee Engineering has created a niche in the market, earning a reputation with reputed customers and repeat projects. Our dedication to understanding diverse customer requirements has helped us deliver projects on time, ensuring customer satisfaction and efficient service at every stage.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-text-wrapper">
                        <p>We strive to meet and adapt to the evolving needs of our customers, while maintaining a strong focus on protecting our natural resources and the environment. Our vision is to provide an excellent experience with superior quality at an affordable cost.</p>
                        <a href="#" class="see-more-link see-more-link--dark see-more-link--dark--style2">Learn More <i class="ion-arrow-right-c"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of about text content  ====================-->
    
    <!--====================  project counter area ====================-->
    <div class="project-counter-area section-space--inner--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-counter-single-content-wrapper">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <!-- project counter single content -->
                                <div class="project-counter-single-content project-counter-single-content--style2">
                                   
                                    <div class="project-counter-single-content__content">
                                        <span class="project-counter-single-content__project-count counter">500</span>
                                        <h5 class="project-counter-single-content__project-title">Warehouses</h5>
                                        <p class="project-counter-single-content__subtext">Jay Vee Engineering has completed over 500 warehouses, delivering exceptional quality and timely completion.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <!-- project counter single content -->
                                <div class="project-counter-single-content project-counter-single-content--style2">
                                   
                                    <div class="project-counter-single-content__content">
                                        <span class="project-counter-single-content__project-count counter">150</span>
                                        <h5 class="project-counter-single-content__project-title">Industries</h5>
                                        <p class="project-counter-single-content__subtext">We have completed over 150 industry projects, meeting the diverse needs of our clients across various sectors.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <!-- project counter single content -->
                                <div class="project-counter-single-content project-counter-single-content--style2">
                                    
                                    <div class="project-counter-single-content__content">
                                        <span class="project-counter-single-content__project-count counter">1000</span>
                                        <h5 class="project-counter-single-content__project-title">Clients</h5>
                                        <p class="project-counter-single-content__subtext">Jay Vee Engineering has successfully served over 1000 clients, earning their trust and repeat business.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of project counter area  ====================-->
    
   
    
    <!--====================  cta area ====================-->
    <div class="cta-area section-space--inner--60 default-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <!-- cta text -->
                    <h2 class="cta-text text-center text-lg-left">Looking for a reliable &amp; stable partner?</h2>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <a href="{{ route('contact.show') }}" class="ht-btn ht-btn--transparent ht-btn--transparent--alt-dark">GET A QUOTE</a>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of cta area  ====================-->
</div>


<livewire:testimonials-slider />
@endsection
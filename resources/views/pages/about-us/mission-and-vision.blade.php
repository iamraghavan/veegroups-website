@extends('layouts.app')
@section('content')

{{-- content --}}
<livewire:breadcrumbs
    title="Mission & Vision"
    :background="asset('assets/img/jve/bg/19.webp')"
    :items="[
        ['label' => 'Home', 'route' => 'index'], 
        ['label' => 'About Us'],
        ['label' => 'Mission & Vision']                 
    ]"
/>

<div class="page-content-wrapper section-space--inner--120">
    <!--====================  page content area ====================-->
    <div class="page-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  page wrapper  =======-->
                    <div class="page-wrapper">
                        <div class="page-content-wrapper">
                            <div class="row">
                                <!-- Tab Menu Start -->
                                <div class="col-lg-3 col-12">
                                    <div class="myaccount-tab-menu nav" role="tablist" aria-orientation="vertical">
                                        <a href="#mission" class="active" data-bs-toggle="tab" aria-selected="true" role="tab">
                                            <i class="fa fa-flag"></i> Mission
                                        </a>
                                        <a href="#vision" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                            <i class="fa fa-lightbulb-o"></i> Vision
                                        </a>
                                        <a href="#quality" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                            <i class="fa fa-check-circle"></i> Quality
                                        </a>
                                    </div>
                                </div>
                                <!-- Tab Menu End -->

                                <!-- Tab Content Start -->
                                <div class="col-lg-9 col-12">
                                    <div class="tab-content" id="companyContent">
                                        <!-- Mission -->
                                        <div class="tab-pane fade show active" id="mission" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Mission</h3>
                                                <p class="mb-0">
                                                    Jay Vee Group’s mission is to be a manufacturer and supplier of
                                                    prefabricated buildings—delivering high-quality, quick, and affordable
                                                    solutions for businesses. Our goal is to provide timely, high-quality
                                                    customer service together with innovative, sustainable solutions that
                                                    adapt to our clients’ evolving demands.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Vision -->
                                        <div class="tab-pane fade" id="vision" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Vision</h3>
                                                <p class="mb-0">
                                                    Our vision is to become the most acknowledged solution provider in the
                                                    manufacturing industry while contributing to the creation of a contemporary
                                                    society. We also operate in the service sector with the same commitment to
                                                    excellence—offering cost-effective turnkey solutions to our customers.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Quality -->
                                        <div class="tab-pane fade" id="quality" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Quality</h3>
                                                <p class="mb-0">
                                                    We are committed to providing products and services that meet or exceed
                                                    customer expectations through continuous improvement and strict adherence
                                                    to quality management systems.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab Content End -->
                            </div>
                        </div>
                    </div>
                    <!--=======  End of page wrapper  =======-->
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of page content area  ====================-->
</div>




<livewire:testimonials-slider />
@endsection
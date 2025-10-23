@extends('layouts.app')
@section('content')

{{-- content --}}
<livewire:breadcrumbs
    title="Leadership"
    :background="asset('assets/img/jve/bg/19.webp')"
    :items="[
        ['label' => 'Home', 'route' => 'index'], 
        ['label' => 'About Us'],
        ['label' => 'Leadership']                 
    ]"
/>

<div class="page-content-wrapper section-space--inner--120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-page-content">
                    <div class="leadership__wrapper">
                        
                        <!-- Director -->
                        <div class="leadership__single">
                            <div class="image">
                                <img src="{{ asset('assets/img/jve/leadership/udayakumar.webp') }}" class="img-fluid" alt="Mr. UDAYAKUMAR">
                            </div>
                            <div class="content">
                                <div class="identity-wrapper has-border-left">
                                    <h3 class="name">Mr. UDAYAKUMAR</h3>
                                    <span class="designation">Director</span>
                                </div>
                                <p class="brief-desc">
                                    Jay Vee Groups is a leading force in engineering, structural design, and construction technology, with a focus on innovation and excellence. Their companies—Jay Vee Engineering, Jay Vee Structural Engineering Pvt Ltd, and Jakuva Build Tech—deliver reliable, cutting-edge solutions across various industries.
                                </p>
                            </div>
                        </div>

                        <!-- Managing Director -->
                        <div class="leadership__single">
                            <div class="image">
                                <img src="{{ asset('assets/img/jve/leadership/VASIKARAN.webp') }}" class="img-fluid" alt="Mr. VASIKARAN">
                            </div>
                            <div class="content">
                                <div class="identity-wrapper has-border-left">  
                                    <h3 class="name">Mr. VASIKARAN</h3>
                                    <span class="designation">Managing Director</span>
                                </div>
                                <p class="brief-desc">
                                    Jay Vee Groups, is dedicated to driving innovation, quality, and sustainable growth in every project. With a vision to lead the industry through expertise and cutting-edge technology, he ensures that each company under the Jay Vee umbrella—Jay Vee Engineering, Jay Vee Structural Engineering Pvt Ltd, and Jakuva Build Tech—delivers exceptional results and continues to set new benchmarks in engineering and construction.
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<livewire:testimonials-slider />
@endsection

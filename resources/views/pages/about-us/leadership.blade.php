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
                                <img src="https://avatar.iran.liara.run/public" class="img-fluid" alt="Mr. UDAYAKUMAR">
                            </div>
                            <div class="content">
                                <div class="identity-wrapper has-border-left">
                                    <h3 class="name">Mr. UDAYAKUMAR</h3>
                                    <span class="designation">Director</span>
                                </div>
                                <p class="brief-desc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                        </div>

                        <!-- Managing Director -->
                        <div class="leadership__single">
                            <div class="image">
                                <img src="https://avatar.iran.liara.run/public" class="img-fluid" alt="Mr. VASIKARAN">
                            </div>
                            <div class="content">
                                <div class="identity-wrapper has-border-left">
                                    <h3 class="name">Mr. VASIKARAN</h3>
                                    <span class="designation">Managing Director</span>
                                </div>
                                <p class="brief-desc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
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

<div>
   <div class="brand-logo-slider-area section-space--inner--50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- brand logo slider -->
                <div class="brand-logo-slider__container-area">
                    <div class="swiper-container brand-logo-slider__container">
                        <div class="swiper-wrapper brand-logo-slider__wrapper">
                            @foreach ($logos as $logo)
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <img src="{{ asset($logo) }}" class="img-fluid" alt="Client Logo">
                                    </div>
                                      <div class="image-hover">
                                        <img src="{{ asset($logo) }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add pagination/navigation if needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

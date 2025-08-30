<div>
    
    <div class="industry-six-slider__area">
    <div class="row g-0">
        
        <div class="col-lg-12">
           
            <div class="industry-six-slider__container-area">
                <div class="swiper-container industry-six-slider__container">
                    <div class="swiper-wrapper industry-six-slider__wrapper">
                        @foreach($services as $service)
                            <div class="swiper-slide">
                                <div class="industry-six-slider__single-slide">
                                    <div class="industry-six-slider__content">
                                        <p class="slider-no">{{ $service['no'] }}</p>
                                        <h3 class="slider-title">
                                            <a href="{{ $service['link'] }}">{{ $service['title'] }}</a>
                                        </h3>
                                        <p class="slider-excerpt">{{ $service['excerpt'] }}</p>
                                        <a href="{{ $service['link'] }}" class="see-more-link">
                                            VIEW PROJECT <i class="ion-arrow-right-c"></i>
                                        </a>
                                    </div>
                                    <div class="industry-six-slider__background bg-img"
     data-bg="{{ $service['image'] }}"
     style="background-image: url('{{ $service['image'] }}');">
</div>


                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination swiper-pagination-8"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
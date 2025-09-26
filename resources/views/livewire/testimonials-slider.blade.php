<div>
    <div class="testimonial-brand-slider-area section-space--inner--120 grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="testimonial-slider__body-wrapper section-space--bottom--60">
                    <div class="testimonial-slider__title-wrapper section-space--bottom--60 d-flex align-items-center justify-content-between">
                        <h2 class="testimonial-slider__title">
                            <i class="icon icomoon-chat-1"></i> Happy Customers Said
                        </h2>
                        <div class="testimonial-slider__nav-container">
                            <button class="ht-swiper-button-prev ht-swiper-button-prev-3 ht-swiper-button-nav" type="button" aria-label="Previous slide">
                                <i class="ion-chevron-left"></i>
                            </button>
                            <button class="ht-swiper-button-next ht-swiper-button-next-3 ht-swiper-button-nav" type="button" aria-label="Next slide">
                                <i class="ion-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <div class="testimonial-slider__content-area">
                        <div class="swiper-container testimonial-slider__container">
                            <div class="swiper-wrapper testimonial-slider__wrapper">
                                @foreach($items as $item)
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider__single-item">
                                           
                                            <div class="testimonial-slider__single-item__content">
                                                <h4 class="testimonial-name">
                                                    {{ $item['name'] }}
                                                    @if(!empty($item['designation']))
                                                        <span class="designation">{{ $item['designation'] }}</span>
                                                    @endif
                                                </h4>

                                                <div class="rating" aria-label="Rating: {{ $item['rating'] ?? 0 }} out of 5">
                                                    @php
                                                        $stars = (int)($item['rating'] ?? 0);
                                                        $stars = max(0, min(5, $stars));
                                                    @endphp
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= $stars)
                                                            <i class="ion-ios-star"></i>
                                                        @else
                                                            <i class="ion-ios-star-outline"></i>
                                                        @endif
                                                    @endfor
                                                </div>

                                                <p class="text">{{ $item['text'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="swiper-pagination swiper-pagination-3"></div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

</div>

<div>

    <div class="project-grid-post__area section-space--inner--120">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-4">
                    <!-- section title -->
                    <div class="section-title-area section-space--bottom--80">
                        <h2 class="title title--style4 section-space--bottom--50">Dedicated &amp; Reliable <span class="highlight"> Engineering Units.</span></h2>
                        <a href="#" class="ht-btn ht-btn--default ht-btn--default--style2">OUR UNITS</a>
                    </div>
                </div>
                <div class="col-xl-8 offset-xl-1 col-md-8">
                    <!-- project grid post wrapper -->
                    <div class="project-grid-post__wrapper">
                        <div class="row">
                             @foreach($units as $unit)
                            <div class="col-md-6">
                                <div class="project-grid-post__single">
                                    <div class="project-grid-post__image">
                                        <img src="{{ $unit['img'] }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="project-grid-post__content">
                                        <h3 class="project-grid-post__title">{{ $unit['title'] }} - {{ $unit['name'] }}</h3>
                                        <p class="project-grid-post__text">{{ $unit['address'] }}</p>
                                        <a href="{{ $unit['map'] }}" class="see-more-link">Google Map Link <i class="ion-arrow-right-c"></i></a>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
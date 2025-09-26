@extends('layouts.app')

@section('content')

<livewire:breadcrumbs
    title="{{ $project->title }}"
    :background="asset('assets/img/jve/bg/19.webp')"
    :items="[
        ['label' => 'Home', 'route' => 'index'],
        ['label' => 'Projects', 'route' => 'projects.index'],
        ['label' => $project->title]
    ]"
/>


<div class="page-content-wrapper section-space--inner--120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="case-study__page-content-wrapper">
                    <h3 class="case-study__page-content-title">Essential Information</h3>
                    <p>{{ $project->description }}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="case-study-table">
                    {{-- <div class="case-study-table__row">
                        <div class="case-study-table__icon">
                            <i class="ion-calendar"></i>
                        </div>
                        <div class="case-study-table__details"> <span class="highlight">Construction date:</span> {{ $project->created_at ? $project->created_at->format('F Y') : 'N/A' }}</div>
                    </div> --}}
                    <div class="case-study-table__row">
                        <div class="case-study-table__icon">
                            <i class="ion-link"></i>
                        </div>
                        <div class="case-study-table__details"> <span class="highlight">Company:</span> {{ $project->company }}</div>
                    </div>
                    <div class="case-study-table__row">
                        <div class="case-study-table__icon">
                            <i class="ion-ios-location"></i>
                        </div>
                        <div class="case-study-table__details"> <span class="highlight">Location:</span> {{ $project->location }}</div>
                    </div>
                    {{-- Omit value if not available --}}
                    {{-- <div class="case-study-table__row">
                        <div class="case-study-table__icon">
                            <i class="ion-cash"></i>
                        </div>
                        <div class="case-study-table__details"> <span class="highlight">Value:</span> $1.299.525,00</div>
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="image-gallery-slider-big__container-area section-space--bottom--30 section-space--top--80">
                    <div class="swiper-container image-gallery-slider-big__container">
                        <div class="swiper-wrapper image-gallery-slider-big__wrapper">
                            @if (!empty($project->images) && is_array($project->images))
                                @foreach ($project->images as $index => $image)
                                    <div class="swiper-slide {{ $index == 0 ? 'swiper-slide-active' : '' }}" data-swiper-slide-index="{{ $index }}" style="width: 1170px; margin-right: 30px;">
                                        <div class="image-gallery-slider-big__single-slide">
                                            <img src="{{ Storage::url($image) }}" class="img-fluid" alt="{{ $project->title }} Image {{ $index + 1 }}">
                                        </div>
                                    </div>
                                @endforeach
                                {{-- Duplicates for looping if needed, but Swiper handles it --}}
                            @else
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 1170px; margin-right: 30px;">
                                    <div class="image-gallery-slider-big__single-slide">
                                        <img src="https://via.placeholder.com/1170x680" class="img-fluid" alt="No Image">
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="ht-swiper-button-prev ht-swiper-button-prev-12 ht-swiper-button-nav"><i class="ion-ios-arrow-left"></i></div>
                    <div class="ht-swiper-button-next ht-swiper-button-next-12 ht-swiper-button-nav"><i class="ion-ios-arrow-forward"></i></div>
                </div>
                <div class="image-gallery-slider-small__container-area">
                    <div class="swiper-container image-gallery-slider-small__container">
                        <div class="swiper-wrapper image-gallery-slider-small__wrapper">
                            @if (!empty($project->images) && is_array($project->images))
                                @foreach ($project->images as $index => $image)
                                    <div class="swiper-slide {{ $index == 0 ? 'swiper-slide-active' : '' }}" data-swiper-slide-index="{{ $index }}" style="width: 170px; margin-right: 30px;">
                                        <div class="image-gallery-slider-small__single-slide">
                                            <img src="{{ Storage::url($image) }}" class="img-fluid" alt="{{ $project->title }} Thumbnail {{ $index + 1 }}" style="width: 170px; height: 100px; object-fit: cover;">
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 170px; margin-right: 30px;">
                                    <div class="image-gallery-slider-small__single-slide">
                                        <img src="https://via.placeholder.com/170x100" class="img-fluid" alt="No Thumbnail">
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
    </div>
</div>

@endsection
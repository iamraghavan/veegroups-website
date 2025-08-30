<div>
    <div class="page-sidebar">
    {{-- main links --}}
    <div class="single-sidebar-widget">
        <div class="sidebar-other-page__wrapper">
            @foreach($this->resolvedLinks as $item)
                <a href="{{ $item['href'] }}"
                   class="sidebar-other-page__single {{ $item['active'] ? 'active' : '' }}">
                    @if(!empty($item['icon']))
                        <div class="icon">
                            <i class="{{ $item['icon'] }}"></i>
                        </div>
                    @endif
                    <h3 class="page-title">{{ $item['label'] }}</h3>
                </a>
            @endforeach
        </div>
    </div>

    {{-- optional case studies --}}
    @if(!empty($caseStudies))
        <div class="single-sidebar-widget">
            <h2 class="widget-title">Case Studies</h2>
            <div class="sidebar-case-study-list">
                @foreach($caseStudies as $cs)
                    <div class="single-sidebar-case-study">
                        <div class="single-sidebar-case-study__image">
                            <a href="{{ $cs['url'] ?? '#' }}">
                                <img src="{{ $cs['image'] ?? asset('assets/img/placeholder-75x64.jpg') }}"
                                     class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="single-sidebar-case-study__content">
                            <h3 class="title">
                                <a href="{{ $cs['url'] ?? '#' }}">{{ $cs['title'] ?? 'Untitled' }}</a>
                            </h3>
                            @if(!empty($cs['category']))
                                <p class="category"><a href="#">{{ $cs['category'] }}</a></p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>

</div>

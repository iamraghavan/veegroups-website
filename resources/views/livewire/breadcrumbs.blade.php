<div>
    @php
    // Inline style with black overlay + image
    $bgStyle = $background
        ? "background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{$background}') center center / cover no-repeat;"
        : '';
@endphp

<!--====================  breadcrumb area ====================-->
<div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img"
     @if($background) data-bg="{{ $background }}" @endif
     style="{{ $bgStyle }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="breadcrumb-page-title">{{ $title }}</h2>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb-page-list {{ $uppercase ? 'text-uppercase' : '' }}">
                    @foreach($this->resolvedItems as $item)
                        @php $liClass = !$item['is_current'] ? 'has-children' : ''; @endphp
                        <li class="{{ $liClass }}">
                            @if(!$item['is_current'] && $item['href'])
                                <a href="{{ $item['href'] }}">{{ $item['label'] }}</a>
                                @if($item['has_children'])
                                    <ul class="breadcrumb-children">
                                        @foreach($item['children'] as $child)
                                            <li><a href="{{ $child['href'] }}">{{ $child['label'] }}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                {{ $item['label'] }}
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<!--====================  End of breadcrumb area  ====================-->

</div>
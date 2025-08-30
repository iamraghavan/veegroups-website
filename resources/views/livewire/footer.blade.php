<div>
    <div class="footer-area section-space--inner--top--120 dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-content-wrapper">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <!-- footer intro wrapper -->
                            <div class="footer-intro-wrapper">
                                <div class="footer-logo">
                                    <a href="{{ route('index') }}">
                                        <img src="{{ asset('assets/img/jve/logo/jvee_logo.webp') }}" class="img-fluid" style="max-width: 70px !important;" alt="Logo">
                                    </a>
                                </div>
                                <div class="footer-desc">
                                    {{ config('app.name') }} — Excellence in Engineering, Projects & Services.
                                </div>
                                <div class="social-links">
                                    <ul>
                                        @foreach($socialLinks as $link)
                                            <li>
                                                <a href="{{ $link['url'] }}" target="_blank" data-tippy="{{ $link['label'] }}" 
                                                   data-tippy-inertia="false" data-tippy-animation="shift-away" 
                                                   data-tippy-delay="50" data-tippy-arrow="true" 
                                                   data-tippy-theme="sharpborder__black" data-tippy-placement="top">
                                                    <i class="{{ $link['icon'] }}"></i>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        @foreach($footerMenus as $menu)
                            <div class="col-lg-2 col-md-4">
                                <!-- footer widget -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget__title">{{ $menu['title'] }}</h4>
                                    <ul class="footer-widget__navigation">
                                        @foreach($menu['links'] as $link)
                                            <li><a href="{{ $link['route'] }}">{{ $link['label'] }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copyright-wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright-left">
                                © {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-copyright-right">
                                <ul class="footer-copyright-right__navigation">
                                    @foreach($legalMenus as $link)
                                        <li><a href="{{ $link['route'] }}">{{ $link['label'] }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
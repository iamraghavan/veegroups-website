<div>
    <div class="header-area header-sticky">
        <div class="header-area__desktop">
            <!--=======  header navigation area  =======-->
            <div class="header-navigation-area position-relative border-bottom">
                <div class="container-fluid container-fluid--cp-60">
                    <div class="row">
                        <div class="col-lg-12 position-static">
                            <div class="header-navigation-wrapper header-navigation-wrapper--style5">
                                <!-- logo -->
                                <div class="logo">
                                    <a href="{{ route('index') }}">
                                        <img src="{{ asset('assets/img/jve/logo/jvee_logo.webp') }}" style='max-width: 75px !important;' class="img-fluid" alt="">
                                    </a>
                                </div>

                                <!-- header navigation -->
                                <div class="header-navigation">
                                    <div class="header-navigation__nav position-static">
                                        <nav>
                                            <ul>
                                                @foreach ($menus as $menu)
                                                    <li @if (isset($menu['children'])) class="has-children has-children--multilevel-submenu" @endif>
                                                        <a href="{{ $menu['route'] ?? '#' }}">{{ $menu['label'] }}</a>
                                                        @if (isset($menu['children']))
                                                            @if ($menu['label'] === 'Companies')
                                                                <!-- Megamenu for Companies -->
                                                                <ul class="megamenu megamenu--tab">
                                                                    <li class="megamenu--tab__menu bg-img bg-img--menu" data-bg="assets/img/banner/decor.jpg" style="background-image: url(&quot;assets/img/banner/decor.jpg&quot;);">
                                                                        <nav>
                                                                            <div class="nav nav-tabs flex-column" id="nav-tab" role="tablist">
                                                                                <a class="nav-item nav-link active" id="item1-tab" data-bs-toggle="tab" href="#item1" role="tab" aria-selected="true">Company Profiles</a>
                                                                                <a class="nav-item nav-link" id="item2-tab" data-bs-toggle="tab" href="#item2" role="tab" aria-selected="false" tabindex="-1">Our Services</a>
                                                                            </div>
                                                                        </nav>
                                                                    </li>
                                                                    <li class="megamenu--tab__content tab-content">
                                                                        <div class="tab-pane show active" id="item1" role="tabpanel" aria-labelledby="item1-tab">
                                                                            <ul class="megamenu-tab-wrapper">
                                                                                <li>
                                                                                    <h2 class="page-list-title">Our Companies</h2>
                                                                                    <ul>
                                                                                        @foreach ($menu['children'] as $child)
                                                                                            <li><a href="{{ $child['route'] ?? '#' }}">{{ $child['label'] }}</a></li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="menu-widget">
                                                                                        <div class="menu-widget__image">
                                                                                            <img src="assets/img/banner/about-500x286.jpg" class="img-fluid" alt="">
                                                                                        </div>
                                                                                        <div class="menu-widget__content">
                                                                                            <h2 class="menu-widget__title">About Our Companies</h2>
                                                                                            <p class="menu-widget__short-desc">Our expertise in engineering and construction drives innovation and excellence across industries.</p>
                                                                                            <a href="page-about.html" class="menu-widget__link">SEE MORE <i class="ion-arrow-right-c"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="tab-pane" id="item2" role="tabpanel" aria-labelledby="item2-tab">
                                                                            <ul class="menu-item-list-desc">
                                                                                <li class="menu-item-list-desc__single">
                                                                                    <h6 class="title"><a href="#">Engineering Solutions</a></h6>
                                                                                    <p class="desc">Comprehensive engineering services for industrial and structural projects.</p>
                                                                                </li>
                                                                                <li class="menu-item-list-desc__single">
                                                                                    <h6 class="title"><a href="#">Construction Management</a></h6>
                                                                                    <p class="desc">Expert management for seamless project execution.</p>
                                                                                </li>
                                                                                <li class="menu-item-list-desc__single">
                                                                                    <h6 class="title"><a href="#">Build Tech Innovations</a></h6>
                                                                                    <p class="desc">Cutting-edge solutions for modern construction challenges.</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            @else
                                                                <!-- Regular submenu for other menu items -->
                                                                <ul class="submenu">
                                                                    @foreach ($menu['children'] as $child)
                                                                        <li>
                                                                            <a href="{{ $child['route'] ?? '#' }}">{{ $child['label'] }}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                                <!-- header right -->
                                <div class="header-right">
                                    <div class="language-change-wrapper language-change-wrapper--style2">
                                        <a href="javascript:void(0)" class="language-change-trigger">
                                            <div class="language-flag">
                                                <img src="https://flagcdn.com/in.svg" class="img-fluid" alt="Indian Flag">
                                            </div>
                                            <span class="selected-lang">IND</span>
                                        </a>
                                       
                                    </div>

                                    <div class="button-wrap">
                                        <a href="#" class="ht-btn ht-btn--default ht-btn--default--style4 header9-btn">GET A FREE QUOTE</a>
                                    </div>

                                    <div class="social-links social-links--style4">
                                        <ul>
                                            <li><a href="//facebook.com" data-tippy="Facebook" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="bottom"><i class="ion-social-facebook"></i></a></li>
                                            <li><a href="//twitter.com" data-tippy="Twitter" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="bottom"><i class="ion-social-twitter"></i></a></li>
                                            <li>
  <a href="//instagram.com" 
     data-tippy="Instagram" 
     data-tippy-inertia="false" 
     data-tippy-animation="shift-away" 
     data-tippy-delay="50" 
     data-tippy-arrow="true" 
     data-tippy-theme="sharpborder__yellow" 
     data-tippy-placement="bottom">
    <i class="ion-social-instagram"></i>
  </a>
</li>
                                            <li><a href="//linkedin.com" data-tippy="Linkedin" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="bottom"><i class="ion-social-linkedin"></i></a></li>
                                           <li>
  <a href="//whatsapp.com" 
     data-tippy="WhatsApp" 
     data-tippy-inertia="false" 
     data-tippy-animation="shift-away" 
     data-tippy-delay="50" 
     data-tippy-arrow="true" 
     data-tippy-theme="sharpborder__yellow" 
     data-tippy-placement="bottom">
    <i class="ion-social-whatsapp"></i>
  </a>
</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=======  End of header navigation area =======-->

            <!--=======  header bottom bar  =======-->
            <div class="header-bottom-bar-area">
                <div class="container-fluid container-fluid--cp-60">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-bottom-bar">
                                <div class="header-bottom-bar__left">
                                    <ul class="topbar-info topbar-info--style4">
                                        <li><a href="tel:18009777880"><i class="ion-ios-telephone"></i> Call Us: (+91) 9942 502 245</a></li>
                                        <li><a href="mailto:hello@megan.com"><i class="ion-android-map"></i> Email: sample@sample.com</a></li>
                                        <li><i class="ion-clock"></i> Mon - Fri: 9:00 - 19:00</li>
                                    </ul>
                                </div>
                                <div class="header-bottom-bar__right">
                                    <div class="header-search--style5">
                                        <form action="#">
                                            <input type="text" placeholder="Keyword search..." spellcheck="false" data-ms-editor="true">
                                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                        </form>
                                    </div>
                                    
                                    <div class="call-now-wrapper">
                                        GSTIN : <a href="#"> 33AAYPU5860L1ZN </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=======  End of header bottom bar  =======-->
        </div>
        
    
<div class="header-area__mobile">
            <!--=======  mobile menu  =======-->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4 col-sm-6 col-9">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index-9.html">
                                    <img src="{{ asset('assets/img/jve/logo/jvee_logo.webp') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-3">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content">
                                <div class="social-links">
                                    <ul>
                                        <li><a href="//facebook.com" data-tippy="Facebook" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="//twitter.com" data-tippy="Twitter" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-twitter"></i></a></li>
                                        <li>
  <a href="//instagram.com" 
     data-tippy="Instagram" 
     data-tippy-inertia="false" 
     data-tippy-animation="shift-away" 
     data-tippy-delay="50" 
     data-tippy-arrow="true" 
     data-tippy-theme="sharpborder__yellow" 
     data-tippy-placement="bottom">
    <i class="ion-social-instagram"></i>
  </a>
</li>

                                        <li><a href="//linkedin.com" data-tippy="Linkedin" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__yellow" data-tippy-placement="bottom"><i class="ion-social-linkedin"></i></a></li>
                                        <li>
  <a href="//whatsapp.com" 
     data-tippy="WhatsApp" 
     data-tippy-inertia="false" 
     data-tippy-animation="shift-away" 
     data-tippy-delay="50" 
     data-tippy-arrow="true" 
     data-tippy-theme="sharpborder__yellow" 
     data-tippy-placement="bottom">
    <i class="ion-social-whatsapp"></i>
  </a>
</li>

                                    </ul>
                                </div>
                                <div class="mobile-navigation-icon" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=======  End of mobile menu  =======-->
        </div>
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid--cp-60">
                <div class="row align-items-center">
                    <div class="col-md-4 col-sm-6 col-9">
                        <!-- logo -->
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ asset('assets/img/jve/logo/jvee_logo.webp') }}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6 col-3">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content">
                            <a class="mobile-navigation-close-icon" id="mobile-menu-close-trigger" href="javascript:void(0)">
                                <i class="ion-ios-close-empty"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    @foreach ($menus as $menu)
                    <li @if (isset($menu['children'])) class="has-children" @endif>
                        @if (isset($menu['children']))
                            <span class="menu-expand"><i></i></span>
                        @endif
                        <a href="{{ $menu['route'] ?? '#' }}">{{ $menu['label'] }}</a>
                        @if (isset($menu['children']))
                            <ul class="sub-menu" style="display: none;">
                                @foreach ($menu['children'] as $child)
                                    <li @if (isset($child['children'])) class="has-children" @endif>
                                        @if (isset($child['children']))
                                            <span class="menu-expand"><i></i></span>
                                        @endif
                                        <a href="{{ $child['route'] ?? '#' }}">{{ $child['label'] }}</a>
                                        @if (isset($child['children']))
                                            <ul class="sub-menu" style="display: none;">
                                                @foreach ($child['children'] as $grandchild)
                                                    <li><a href="{{ $grandchild['route'] ?? '#' }}">{{ $grandchild['label'] }}</a></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
                </ul>
            </nav>
        </div>
    </div>

      
        
    </div>
</div>

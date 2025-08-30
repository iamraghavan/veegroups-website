<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet" />

    @livewireStyles
    <!-- CSS Files -->
    @stack('styles')
    <!-- Bootstrap CSS (loaded first) -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <!-- Other CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/flaticon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/icomoon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/tractor-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/revolution/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/revolution/custom-setting.css') }}">
    <!-- Main Style CSS (loaded with async-like behavior via preload) -->
    <link rel="preload" href="{{ asset('assets/css/style.css') }}" as="style" onload="this.rel='stylesheet'">

    <style>
       .hero-video-wrapper{position:relative;width:100%;padding-top:56.25%}@media (max-width:768px){.hero-video-wrapper{padding-top:100%}}@media (min-width:1200px){.hero-video-wrapper{padding-top:0;height:800px}}.hero-video-area video,.hero-video-overlay{position:absolute;top:0;left:0;width:100%;height:100%}.hero-video-area video{object-fit:cover}.hero-video-overlay{background:rgba(0,0,0,.4);z-index:1}
    </style>

</head>

<body>

@livewire('header')
    
@yield('content')

@livewire('footer')

@livewireScripts
    <!-- JavaScript Files -->
    @stack('scripts')
    <script async defer src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>

     
    <script async defer src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script async defer src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script async defer src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script async defer src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
    <script async defer src="{{ asset('assets/js/plugins/tippy.min.js') }}"></script>
    <script async defer src="{{ asset('assets/js/plugins/lightgallery.min.js') }}"></script>
    <script async defer src="{{ asset('assets/js/plugins/lg-video.min.js') }}"></script>
    <script async defer src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
    <script async defer src="{{ asset('assets/js/plugins/counterup.min.js') }}"></script>
    <script async defer src="{{ asset('assets/js/plugins/isotope.min.js') }}"></script>
    <script async defer src="{{ asset('assets/js/plugins/appear.min.js') }}"></script>
    <script async defer src="{{ asset('assets/js/plugins/gmap3.min.js') }}"></script>
    <script async defer src="{{ asset('assets/js/plugins/mailchimp-ajax-submit.min.js') }}"></script>


    <script async defer src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script async defer src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script async defer src="{{ asset('assets/revolution/revolution-active.js') }}"></script>


    <script async defer src="{{ asset('assets/js/main.js') }}"></script>

     

    <script async defer src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script async defer src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script async defer src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script async defer src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script async defer src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script async defer src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>

   

</body>

</html>

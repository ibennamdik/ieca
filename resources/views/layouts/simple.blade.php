<!doctype html>
<html lang="{{ config('app.locale') }}" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Welcome to IECA | INTERNATIONAL ECONOMIC CITY ABUJA</title>

        <meta name="description" content="IECA">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Icons -->
        <link rel="shortcut icon" href="{{isset($settings->logo) ? Storage::url($settings->logo) : asset('/media/frontend_imgs/logo.png') }}">
        <link rel="icon" sizes="192x192" type="image/png" href="{{isset($settings->logo) ? Storage::url($settings->logo) : asset('/media/frontend_imgs/logo.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{isset($settings->logo) ? Storage::url($settings->logo) : asset('/media/frontend_imgs/logo.png') }}">

        <!-- Fonts and Styles -->
        @yield('css_before')
        <!-- All css files are included here. -->
        <!-- Bootstrap fremwork main css -->
        <link rel="stylesheet" href="{{ asset('/css/frontend_css/bootstrap.min.css') }}">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" href="{{ asset('/lib/frontend_lib/css/nivo-slider.css') }}">
        <!-- This core.css file contents all plugings css file. -->
        <link rel="stylesheet" href="{{ asset('/css/frontend_css/core.css') }}">
        <!-- Theme shortcodes/elements style -->
        <link rel="stylesheet" href="{{ asset('/css/frontend_css/shortcode/shortcodes.css') }}">
        <!-- Theme main style -->
        <link rel="stylesheet" href="{{ asset('/css/frontend_css/style.css') }}">
        <!-- Responsive css -->
        <link rel="stylesheet" href="{{ asset('/css/frontend_css/responsive.css') }}">
        <!-- User style -->
        <link rel="stylesheet" href="{{ asset('/css/frontend_css/custom.css') }}">

        <!-- Style customizer (Remove these two lines please) -->
        <link rel="stylesheet" href="{{ asset('/css/frontend_css/style-customizer.css') }}">
  

        <!-- Modernizr JS -->
        <script src="{{ asset('/js/frontend_js/vendor/modernizr-2.8.3.min.js') }}"></script>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        @yield('css_after')

        <!-- Scripts -->
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

            <!-- Body main wrapper start -->
            <div class="wrapper">
            @include('../header_footer/header')
            
            @yield('content')
            
            @include('../header_footer/footer')
            <!-- Body main wrapper end -->
            </div>
            <!-- Placed js at the end of the document so the pages load faster -->

            <!-- jquery latest version -->
            <script src="{{ asset('js/frontend_js/vendor/jquery-3.1.1.min.js') }}"></script>
            <!-- Bootstrap framework js -->
            <script src="{{ asset('js/frontend_js/bootstrap.min.js') }}"></script>
            <!-- Nivo slider js -->
            <script src="{{ asset('lib/frontend_lib/js/jquery.nivo.slider.js') }}"></script>
            <!-- ajax-mail js -->
            <script src="{{ asset('js/frontend_js/ajax-mail.js') }}"></script>
            <!-- All js plugins included in this file. -->
            <script src="{{ asset('js/frontend_js/plugins.js') }}"></script>
            <!-- Main js file that contents all jQuery plugins activation. -->
            <script src="{{ asset('js/frontend_js/main.js') }}"></script>

            <!-- Google Map js -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeeHDCOXmUMja1CFg96RbtyKgx381yoBU"></script>
            <script src="{{ asset('js/frontend_js/google-map.js') }}"></script>
            @yield('js_after')
    </body>
</html>
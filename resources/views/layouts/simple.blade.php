<!doctype html>
<html lang="{{ config('app.locale') }}" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>IECA</title>

        <meta name="description" content="IECA">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Icons -->
        <link rel="shortcut icon" href="{{isset($settings->logo) ? Storage::url($settings->logo) : asset('media/frontend_imgs/logo.png') }}">
        <link rel="icon" sizes="192x192" type="image/png" href="{{isset($settings->logo) ? Storage::url($settings->logo) : asset('media/frontend_imgs/logo.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{isset($settings->logo) ? Storage::url($settings->logo) : asset('media/frontend_imgs/logo.png') }}">

        <!-- Fonts and Styles -->
        @yield('css_before')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        {{-- <link rel="stylesheet" id="css-main" href="{{ mix('/css/codebase.css') }}"> --}}

        <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="{{ mix('/css/themes/corporate.css') }}"> -->
        <link rel="stylesheet"  href="{{ asset('/css/frontend_css/jquery-ui.css') }}">

        <link rel="stylesheet"  href="{{ asset('/css/frontend_css/boostrap/bootstrap.min.css') }}">

        <link rel="stylesheet"  href="{{ asset('/css/frontend_css/font-awesome.min.css') }}">

        <link rel="stylesheet"  href="{{ asset('/css/frontend_css/magnific-popup/magnific-popup.css') }}">

        <link rel="stylesheet"  href="{{ asset('/css/frontend_css/owl-coursel/owl.carousel.css') }}">

        <link rel="stylesheet"  href="{{ asset('/css/frontend_css/owl-coursel/owl.theme.css') }}">

        <link rel="stylesheet"  href="{{ asset('/css/frontend_css/style.css') }}">

        <link rel="stylesheet"  href="{{ asset('/css/frontend_css/padd-mr.css') }}">

        <link rel="stylesheet"  href="{{ asset('/css/frontend_css/dark-version.css') }}">

        

        @yield('css_after')

        <!-- Scripts -->
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>

        <script type="text/javascript"> //<![CDATA[ 
            var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
            document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
            //]]>
        </script>
    </head>
    <body class="bg-1">

        <div class="preloader"><p></p></div>
        
        <div id="wrap" class="color1-inher">
            @include('../header_footer/header')
            <!-- Main Container -->
            
            <main id="main-container">
                @yield('content')
            </main>

            @include('../header_footer/footer')
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        {{-- <script src="{{ mix('js/codebase.app.js') }}"></script> --}}

        <script src="{{ asset('js/frontend_js/jquery/jquery-2.2.4.min.js') }}"></script>

        <script src="{{ asset('js/frontend_js/jquery/jquery-ui.js') }}"></script>

        <script src="{{ asset('js/frontend_js/bootstrap/bootstrap.min.js') }}"></script>

        <script src="{{ asset('js/frontend_js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

        <script src="{{ asset('js/frontend_js/jquery.counterup/waypoints.min.js') }}"></script>

        <script src="{{ asset('js/frontend_js/jquery.counterup/jquery.counterup.min.js') }}"></script>

        <script src="{{ asset('js/frontend_js/owl-coursel/owl.carousel.js') }}"></script>

        <script src="{{ asset('js/frontend_js/script.js') }}"></script>

        

        @yield('js_after')
        <script language="JavaScript" type="text/javascript">
            TrustLogo("https://www.IECA.com/media/positivessl_trust_seal_sm_124x32.png", "CL1", "none");
        </script>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-style-mode" content="1">
    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'AlphaTec Surgical LLP provides premium surgical drapes, disposable surgery packs, sterile gowns, and medical textiles for hospitals and healthcare providers across Pakistan.')">
    <meta name="keywords" content="surgical drapes, surgery packs, sterile gowns, medical textiles, surgical supplies Pakistan, healthcare distributor, AlphaTec Surgical LLP">
    <meta name="author" content="AlphaTec Surgical LLP">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="AlphaTec Surgical LLP" />
    <meta property="og:description" content="Premium-quality surgical drapes, gowns, and medical textile solutions across Pakistan." />
    <meta property="og:image" content="https://www.alphatecsurgicalllp.com/og-image.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="https://www.alphatecsurgicalllp.com/" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="lUBj7BBCSiS97w_vmmgg-gj2qjuAZAtJ2deOCv87yzY" />

    <link rel="icon" type="image/png" href="{{ asset('web-assets/images/favicon/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('web-assets/images/favicon/favicon.png') }}">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="{{ asset('web-assets/css/libraries.css') }}">
    <link rel="stylesheet" href="{{ asset('web-assets/css/style.css') }}">
    
    <!-- Title -->
    <title>@yield('title', 'AlphaTec Surgical LLP | Surgical Drapes & Medical Textiles in Pakistan')</title>
    <!-- Canonical -->
    <link rel="canonical" href="{{ request()->url() }}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>
    <div class="wrapper">
        <div class="preloader">
        <div class="loading"><span></span><span></span><span></span><span></span></div>
        </div><!-- /.preloader -->
        {{-- Header --}}
        @include('partials.site.header')

        @yield('content')

        {{-- Footer --}}
        @include('partials.site.footer')
        <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
    </div><!-- /.wrapper -->


    <script src="{{ asset('web-assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('web-assets/js/plugins.js') }}"></script>
    <script src="{{ asset('web-assets/js/main.js') }}"></script>

    @yield('scripts')

</body>
</html>
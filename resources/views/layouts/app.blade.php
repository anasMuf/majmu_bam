<!DOCTYPE html>
<html lang="en">

<head>
    <!--pwa-->
    {{-- <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> --}}
    <meta name="description" content="Aplikasi Majmu' BAM dari Juruladen untuk Keluarga BAM">
    <meta name="keywords" content="majmu bam">
    <meta name="author" content="juruladen bam">
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="../" type="image/x-icon">
    <title>Majmu' BAM</title>
    {{-- <link rel="manifest" href="../manifest.json"> --}}
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <meta name="theme-color" content="#ff8d2f">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="majmu bam">
    <meta name="msapplication-TileImage" content="{{ asset('logo.png') }}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Google font css link  -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Loader Normalize css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/normalize.min.css') }}">

    <!-- Bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">

    <!-- Remix Icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/remixicon.css') }}">

    <!-- Style css -->
    <link id="change-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <!-- Majmu css -->
    <link id="change-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/loading.css') }}">

    <link
    rel="stylesheet"
    href="{{ asset('assets/css/vendors/swiper/swiper-bundle.min.css') }}"
    />

    <style>
        body{
            font-family: 'Poppins', sans-serif !important;
        }
        .arabic{
            font-family: 'Amiri', serif;
        }
        .header-style-6 {
            justify-content: center;
        }
        .mobile-style-8 ul {
            justify-content: space-around;
        }
        .collection-product-list {
            margin-bottom: 120px;
        }
    </style>
    @stack('css')
    {{-- <livewire:styles/>
    <livewire:scripts/> --}}
</head>

<body class="">
    {{-- <!-- Loader Box Start -->
    <div class="min-loader-wrapper">
        <img src="{{ asset('assets/images/loader/blog.gif') }}" class="img-fluid loader" alt="">
        <div class="loader-section blog-color section-left"></div>
        <div class="loader-section blog-color section-right"></div>
    </div>
    <!-- Loader Box End --> --}}

    @yield('content')

    <!-- javascript -->
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}

    <!-- pwa -->
    <script src="{{ asset('/sw.js') }}"></script>
    @if(config('app.env') == 'production')
    <script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/public/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
    </script>
    @else
    <script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
    </script>
    @endif
    <!-- Theme Option Setting Box End -->

    <script src="{{ asset('assets/js/vendors/jquery/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- Loader js -->
    {{-- <script src="{{ asset('assets/js/loader.js') }}"></script> --}}
    <!-- Range slider js -->
    <script src="{{ asset('assets/js/range-slider.js') }}"></script>

    <!-- Theme js-->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- Theme Setting js-->
    {{-- <script src="{{ asset('assets/js/theme-setting.js') }}"></script> --}}
    <script src="{{ asset('assets/js/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('js')
</body>

</html>

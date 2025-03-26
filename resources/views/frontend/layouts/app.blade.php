<!DOCTYPE html>
<!-- saved from url=(0034)https://bookstorex-tnc.webflow.io/ -->
<html data-wf-domain="bookstorex-tnc.webflow.io" data-wf-page="66ab8282560ac2178fdcc6cc"
    data-wf-site="66ab8282560ac2178fdcc6c8" lang="en" data-wf-locale="en"
    class="w-mod-js w-mod-ix wf-lato-n1-active wf-lato-i1-active wf-lato-n3-active wf-lato-i3-active wf-lato-n4-active wf-lato-i4-active wf-lato-n7-active wf-lato-i7-active wf-lato-n9-active wf-lato-i9-active wf-materialicons-n4-active wf-materialiconsoutlined-n4-active wf-manrope-n3-active wf-manrope-n4-active wf-manrope-n5-active wf-manrope-n6-active wf-manrope-n7-active wf-manrope-n8-active wf-philosopher-n4-active wf-philosopher-n7-active wf-anton-n4-active wf-barlowcondensed-n2-active wf-barlowcondensed-n3-active wf-barlowcondensed-n4-active wf-barlowcondensed-n5-active wf-barlowcondensed-n6-active wf-barlowcondensed-n7-active wf-barlowcondensed-n8-active wf-barlowcondensed-n9-active wf-barlowsemicondensed-n3-active wf-barlowsemicondensed-n4-active wf-barlowsemicondensed-n5-active wf-barlowsemicondensed-n6-active wf-barlowsemicondensed-n7-active wf-barlowsemicondensed-n8-active wf-active">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .wf-force-outline-none[tabindex="-1"]:focus {
            outline: none;
        }
    </style>
    <title>BookShops TNC - Webflow Ecommerce website template</title>
    <meta
        content="Embark on a journey with us, shaping a future of vision, unity, and progressive change for a brighter and equitable society."
        name="description" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="{{ asset('frontend/assets') }}/css/bookstorex-tnc.webflow.dfd306a8f.css" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/style.css" media="all" />


    <link
        href="https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6c8/66ed5ea60f7d07ff07fe30b5_book_3278735%202.png"
        rel="shortcut icon" type="image/x-icon" />
    <link href="https://cdn.prod.website-files.com/66ab8282560ac2178fdcc6c8/66ed5e9f279f14e4aaf25b7b_Webclip.png"
        rel="apple-touch-icon" />
</head>

<body>
    <div data-animation="default" class="navbar w-nav" data-easing2="ease" data-easing="ease" data-collapse="medium"
        data-w-id="6999f335-005a-f68f-bf29-0723f291d072" role="banner" data-duration="400" id="navbar">
        @include('frontend.partials.navbar')
        <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
    </div>





    <div class="page-wrapper">


        @yield('content')


        @include('frontend.partials.footer')


    </div>
    {{-- <script src="{{ asset('frontend/assets') }}/js/jquery-3.6.4.min.js"
        integrity="sha256-oP51vYbF/ByU6uV8X0JplFV3Z2kw1iKroGgsn0D8q9o=" crossorigin="anonymous"></script> --}}


    <script src="{{ asset('frontend/assets') }}/js/jquery-3.5.1.min.js" type="text/javascript"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/assets') }}/js/webflow.js" type="text/javascript"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="AfriChild Center Makerere">
    {!! SEO::generate() !!}
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <title>AfriChild</title>
    <link href="{{ asset('assets/css/themify-icons.css ') }} " rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css ') }} " rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css ') }} " rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css ') }} " rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.css ') }} " rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.css ') }} " rel="stylesheet">
    <link href="{{ asset('assets/css/slick.css ') }} " rel="stylesheet">
    <link href="{{ asset('assets/css/slick-theme.css ') }} " rel="stylesheet">
    <link href="{{ asset('assets/css/swiper.min.css ') }} " rel="stylesheet">
    <link href="{{ asset('assets/css/owl.transitions.css ') }} " rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.css ') }} " rel="stylesheet">
    <link href="{{ asset('assets/css/odometer-theme-default.css ') }} " rel="stylesheet">
    <link href="{{ asset('assets/css/style.css ') }} " rel="stylesheet">

    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #51c4ca;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #51c4ca;
        }

        .mycolor {

            color: #de0b81 !important;

        }

        .section-padding {
            padding-top: 16px !important;
            padding-bottom: 16px !important;

        }

        .hide-scrollbar::-webkit-scrollbar {
            width: 0.2em !important;
            background-color: #F5F5F5 !important;
        }

        .hide-scrollbar::-webkit-scrollbar-thumb {
            border-radius: 8px !important;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3) !important;
            background-color: #555 !important;
        }

            /* .custom-btn-sm {
            width: 80px !important;
            height: 30px !important;
            font-size: 12px !important;
        */

        @media only screen and (max-width: 600px) {
  .myDiv {
    display: block;
  }
}

@media only screen and (min-width: 600px) {
  .myDiv {
    display: none;
  }
}

    </style>
    {{-- @isset($Photo)
        <link type="text/css" rel="stylesheet"
            href="{{ asset('assets/css/lightgallery-bundle.css') }}" />
    @endisset --}}
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        {{-- <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="{{ asset('assets/images/preloader.png') }}"
        alt="">
    </div>
    </div>
    </div> --}}

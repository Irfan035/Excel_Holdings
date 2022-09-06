<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/png" />

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">


        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('img/logo.png')}}" class="img-fluid" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('projects')}}">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('gallery')}}">Gallery</a>
                        </li>
                     <!--    <li class="nav-item">
                            <a class="nav-link" href="{{ url('news')}}">News</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact')}}">Contact</a>
                        </li>
                    </ul>
                    <a class="btn bgRed ml-md-3 px-4 py-2" href="tel:+">LET'S TALK</a>
                </div>
            </div>

        </nav>

        <main class="py-0">
            @yield('content')
        </main>
        <footer class="pt-3">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-md-3">
                        <img src="{{asset('img/footerLogo.png')}}" class="img-fluid mb-3" alt="white logo">
                        <p class="text-justify">is an evolving name in the field of Real Estate. It's a one-stop solution to all your marketing, investment, management, and construction needs.</p>
                        <ul class="list-unstyled py-2">
                            <li>
                                <a href="https://www.facebook.com/excelholding/?ref=page_internal&_rdc=2&_rdr" target="_blank"><i class="fab fa-facebook bg-dark text-white p-2 rounded-circle "></i></a>
                                <a href="https://www.linkedin.com/company/excelholdings/?viewAsMember=true" target="_blank"><i class="fab fa-linkedin bgRed p-2 rounded-circle"></i></a>
                                <a href="https://www.instagram.com/excelholdings.pk/" target="_blank"><i class="fab fa-instagram bg-dark text-white p-2 rounded-circle "></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5 class="text-white">PRIVACY POLICY</h5>
                        <p class="text-justify">In order to provide you with a personalized browsing experience, Excel Holdings may collect personal information.In addition, we may require you to complete a registration form or request some information from you. </p>
                    </div>
                    <div class="col-md-3 text-white">
                        <h5 class="">TERMS & CONDITIONS</h5>
                        <ul class="nav">
                            <li>
                                <a class="nav-link text-light" href="#">Plans & Pricing</a>
                                <a class="nav-link text-light" href="{{ url('privacyPolicy') }}">Privacy Policy</a>
                                <a class="nav-link text-light" href="{{ url('terms&conditions') }}">Terms & Conditions</a>
                                <a class="nav-link text-light" href="{{ url('faq') }}">FAQs</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-white">
                        <h5 class="">ADVERTISE WITH US</h5>
                        <ul class="nav">
                            <li>
                                <a class="nav-link text-light" href="{{ url('about') }}">About Us</a>
                                <a class="nav-link text-light" href="{{ url('contact')}}">Contact Us</a>
                                <a class="nav-link text-light" href="{{ url('projects')}}">Projects</a>
                                <a class="nav-link text-light" href="{{ url('gallery')}}">Gallery</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center text-white bg-gradient-dark py-2 mt-4 border-top">
                <small> © Excel Holding 2022 | Designed & Developed by <a href="https://www.aikanar.com/" class="eRed" target="_blank">AikAnar</a></small>
            </div>
        </footer>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded bgRed" href="#app">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>
</body>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

<script src="{{ asset('js/app.js') }}"></script>

</html>
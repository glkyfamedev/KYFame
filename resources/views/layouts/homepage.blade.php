<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KYFAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('bootstrap5/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Scripts -->

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/utility.js') }}"></script>
    <script src="{{ asset('bootstrap5/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>



</head>

<body class="font-text m-0">
    <div class="min-h-screen">

        @include('layouts.homeNavigation')


        <!-- Page Content -->

        <main>
            {{ $slot }}
        </main>
    </div>

    <footer class="bg-light-grey p-3">
        <div class="main p-4 mx-auto" style="visibility: visible; animation-name: fadeInUp;">
            <div class="row">
                <div class="col-md-2 text-center mt-lg-5">
                    <ul class="list-group list-group-flush bg-light-grey">

                        <li class="list-group-item bg-light-grey">
                            <a href="https://jefferson.kctcs.edu/education-training/program-finder/kyfame.aspx">JCTC
                                FAME</a>
                        </li>
                        <li class="list-group-item bg-light-grey">
                            <a href="https://students.kctcs.edu/psc/stdsaprd/EMPLOYEE/SA/c/COMMUNITY_ACCESS.K_OLA_LANDING_FL.GBL?&Campus=JFC&">Apply
                                to JCTC</a>
                        </li>
                        <li class="list-group-item bg-light-grey"> <a href="https://fame-usa.com/">USA FAME</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mt-lg-5 text-center">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-light-grey"><a href="students">For Students</a></li>
                        <li class="list-group-item bg-light-grey"><a href="sponsers">For Sponsers</a></li>
                        <li class="list-group-item bg-light-grey"><a href="employers">For Employers</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 offset-lg-1">
                    <h2> <span class="pink fw-bold">Get In</span> Touch</h2>
                    <form method="post">
                        <input type="hidden" id="contactFormToken" name="_token" value="{{ Session::token() }}">

                        <div class="row">
                            <div class="m-1">
                                <input type="text" id="contactName" class="form-control" placeholder="Name">
                            </div>
                            <div class="m-1">
                                <input type="email" id="contactEmail" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="m-1">
                                <textarea class="form-control" id="contactMessage" rows="4" id="comment" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Left -->
                <div class="col-lg-3">
                    <div class="right float-right mt-5">
                        <address>
                            <div class=" d-flex align-items-center m-1">
                                <i class="bi bi-geo-alt-fill m-1 blue"></i>
                                6661 Dixie Hwy Box 194 , <br>
                                Louisville, KY 40258<br>
                            </div>

                            <div class=" d-flex align-items-center m-1">
                                <i class="bi bi-telephone-outbound-fill m-1 blue"></i>
                                (502)552-3755<br>
                            </div>

                            <div class=" d-flex align-items-center m-1">
                                <i class="bi bi-envelope-open-fill m-1 blue"></i>
                                glfame@outlook.com
                            </div>

                            <a class="m-1" href="https://www.facebook.com/kyfame">
                                <i class="bi bi-facebook fs-3 dark"></i>

                            </a>
                            <a class="m-1" href="https://twitter.com/kyfameamt?lang=en">
                                <i class="bi bi-twitter fs-3 dark"></i>
                            </a>
                        </address>

                        <button class="btn btn-block btn-pink" id="contactFormBtn" type="btn">Send Now!</button>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="p-2 bg-dark">
        <p class="text-white text-center">&copy; Copyright 2021 GLKYFAME</p>
    </div>

</body>

</html>

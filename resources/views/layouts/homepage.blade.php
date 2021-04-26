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
        <script src="{{ asset('bootstrap5/js/bootstrap.js')}}"></script>
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

        <footer class="bg-light-grey p-3" >
            <div class="container-fluid navy">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3">
                          <div class="col">
                       <div class="row">

                            <div class="col">
                                <h4>Contact Us</h4>
                                <address>
                                    6661 Dixie Hwy Box 194 <br>

                                    Louisville, KY 40258<br>

                                    502.552.3755<br>
                                    <br>

                                </address>
                            </div>
                               <div class="col">
                                  {{-- <img src="assets/gearguy200.png"></img> --}}
                            </div>

                          </div>

                     </div>
                    <div class="col-md-2 text-center">

                        <ul class="list-group list-group-flush bg-light-grey">

                            <li class="list-group-item bg-light-grey">
                                 <a href="https://jefferson.kctcs.edu/education-training/program-finder/kyfame.aspx">JCTC FAME</a>
                            </li>
                            <li class="list-group-item bg-light-grey">
                                <a href="https://students.kctcs.edu/psc/stdsaprd/EMPLOYEE/SA/c/COMMUNITY_ACCESS.K_OLA_LANDING_FL.GBL?&Campus=JFC&">Apply
                                    to JCTC</a>
                                </li>
                            <li class="list-group-item bg-light-grey"> <a href="https://fame-usa.com/">USA FAME</a></li>

                        </ul>
                    </div>

                    <div class="col-md-2 text-center">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-light-grey"><a href="students">For Students</a></li>
                            <li class="list-group-item bg-light-grey"><a href="sponsers">For Sponsers</a></li>
                            <li class="list-group-item bg-light-grey"><a href="employers">For Employers</a></li>
                        </ul>
                    </div>



            </div>

            <div class="p-2 bg-dark">
                <p class="text-white text-center">&copy; Copyright 2021 GLKYFAME</p>
            </div>
            </div>

        </footer>

    </body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'KYFAME') }}</title>

        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <!-- Styles -->
 

            <link rel="stylesheet" href="{{ asset('bootstrap5/css/bootstrap.css') }}"> 
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">

            <!-- Scripts -->
            <script src="{{ asset('js/jquery.js') }}"></script>
            <script src="{{ asset('bootstrap5/js/bootstrap.min.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg==" crossorigin="anonymous"></script>

            <script src="{{ asset('js/app.js') }}" defer></script>
         
           
    </head>

    <body class="font-text m-0">
        <div class="min-h-screen">
            @include('layouts.navigation')

          
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>


        <footer class=" bg-light-grey" ;>
            <div class="container p-4 navy">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4">
                     
                    <div class="col text-center">
                        <h4>External Links</h4>
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

                    <div class="col text-center">
                        <h4>Site Links</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-light-grey"><a href="students">For Students</a></li>
                            <li class="list-group-item bg-light-grey"><a href="sponsers">For Sponsers</a></li>
                            <li class="list-group-item bg-light-grey"><a href="employers">For Employers</a></li>
                        </ul>
                    </div>
                    
                   <div class="col-4">
                        <h4>Contact Us</h4>
                        <address>
                            123 street</br>
                            city, state, zip</br>
                            Phone<br>
                            <br>
                            contact name<br>
                        </address>
                    </div>
                </div>

            </div>
            <div class="p-2 bg-dark">
                <p class="text-white text-center">&copy; Copyright 2021 GLKYFAME</p>
            </div>
        </footer>

    </body>
</html>
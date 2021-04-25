<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KYFAME') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"> </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  
</head>


<body class="font-sans antialiased m-0">
   <div class="min-h-screen">
         @include('layouts.dashboardNavigation')


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

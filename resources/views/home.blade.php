<x-homePage-layout>
    {{-- @php
    phpinfo()
    @endphp  --}}
    <style>
        .logoSmall {
            max-height: 70px;

        }

        .logo {
            boarder: none !important;
            max-height: 60px;
        }

        .carousel {
            height: 150px;
        }

    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('home') }}
        </h2>
    </x-slot>

    <div class="container-fliud p-lg-3 mb-lg-4">
        <div id="logoCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#logoCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

                <button type="button" data-bs-target="#logoCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>

                <button type="button" data-bs-target="#logoCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>

                <button type="button" data-bs-target="#logoCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>

            </div>

            <div class="carousel-inner p-1">
                <div class="carousel-item active">
                    <div class="row mb-3 p-1 carouselLogos linear-grid ">

                        <div class="col-md-3">
                            <img class=" logo img-fluid" src=" assets/Partner Logos/Macro-Plastics-logo-w-IPL-small.png" class="d-block w-100 " />

                        </div>

                        <div class="col-md-3">
                            <img class=" logo img-fluid" src="assets/Partner Logos/Alliant Technologies.png" class=" d-block w-100 " />

                        </div>

                        <div class="col-md-3">
                            <img class=" logo img-fluid" src="assets/Partner Logos/Clariant Logo Clear.jpg" class=" d-block w-100 " />

                        </div>

                        <div class="col-md-3">
                            <img class=" logo img-fluid" src="assets/Partner Logos/DDW.png" class=" d-block w-100 " />

                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row mb-3 p-1 carouselLogos">

                        <div class="col-md-3">
                            <img class="logoSmall img-fluid" src="assets/Partner Logos/GE.png" class=" d-block w-100 " />
                        </div>
                        <div class=" col-md-3">
                            <img class="logoSmall img-fluid" src="assets/Partner Logos/Jones Plastics.jpg" class="d-block w-100  " />

                        </div>
                        <div class="col-md-3">
                            <img class=" logoSmall img-fluid" src="assets/Partner Logos/ONeal.jpg" class=" d-block w-100 " />

                        </div>
                        <div class="col-md-3">
                            <img class="logoSmall img-fluid" src="assets/Partner Logos/Paradise Tomato.jpg" class=" d-block w-100 " />

                        </div>
                    </div>

                </div>

                <div class="carousel-item">
                    <div class="row mb-3 p-1 carouselLogos">

                        <div class="col-md-3">
                            <img class="logo img-fluid" src="assets/Partner Logos/Lantech PMS287.jpg" class="d-block w-100 " />

                        </div>
                        <div class="col-md-3">
                            <img class="logo img-fluid" src="assets/Partner Logos/Linak.png" class="d-block w-100 " />
                        </div>
                        <div class="col-md-4">
                            <img class="logo img-fluid" src="assets/Partner Logos/Nucor.png" class="d-block w-100 " />
                        </div>
                        <div class="col-md-2">
                            <img class="logo img-fluid" src="assets/Partner Logos/Kentuky Kingdom.png" class="d-block w-100 " />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container border-bottom p-4">
        <div class="row justify-content-center ">
            <div class=" col-sm">
                <div class="card-body">
                    <h3 class="card-title navy"> Students</h3>
                    <p class="card-text">
                        KY FAME’s Greater Louisville AMT program leads to an Associate’s degree as an Advanced
                        Manufacturing Technician through
                        Jefferson Community & Technical College..</p>
                    <p>
                        <a href="students" class="pink font-bold"> More <i class="bi bi-chevron-double-right"></i></a>

                    </p>
                </div>
            </div>

            <div class="col-sm">
                <div class="card-body">
                    <h3 class="card-title navy">Sponsors</h3>
                    <p class="card-text">
                        Over the course of the program, company sponsors commit to providing
                        valuable work experience, including competitive pay, hands-on instruction
                        and a flexible schedule..</p>
                    <p>
                        <a href="sponsors" class="pink font-bold"> More <i class="bi bi-chevron-double-right"></i></a>
                    </p>
                </div>
            </div>

            <div class="col-sm">
                <div class="card-body">
                    <h3 class="card-title navy">Employers</h3>
                    <p class="card-text">
                        We're always looking for additional sponsers for the program. Companies who are interested
                        and
                        would like to learn more
                        about becoming a sponser for the FAME program....? </p>
                    <p>
                        <a href="employers" class="pink font-bold"> More <i class="bi bi-chevron-double-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>



    <div class="container border-bottom">
        <div class=" mt-4">

            <div class="row">
                <div class="col">
                    <img alt="" src="assets/twpPeople.png">
                    <p class=" p-lg-1">Greater Louisville is one chapter of thirteen chapters in Kentucky.
                        FAME originated in Kentucky but now has chapters in twelve states.
                    </p>

                </div>
                <div class="col-lg-6">
                    <h1 class="navy">FAME</h1>

                    <p class="p-lg-1">The <span class="pink">Federation for Advanced Manufacturing Education</span> provides
                        global-best workforce development through strong technical training,
                        integration of manufacturing core competencies, intensive
                        professional practices and intentional hands-on experience to build
                        the future of the modern manufacturing industry.
                    </p>
                    <p class="p-lg-1">
                        <span class="mint">KYFAME</span> is a unique two-year program that combines
                        college education with paid training. KY FAME’s
                        Greater Louisville The AMT program leads to an Associate’s degree as an
                        Advanced Manufacturing Technician through Jefferson
                        Community & Technical College.</p>

                    <p class="p-lg-1">In 2015, a group of employers came together in Louisville because
                        they all saw the need to train employees for the<span class="pink"> future </span>
                        due to upcoming retirements and the growth of manufacturing in our city.</p>

                    <div class="m-2 col-2">
                        <x-nav-link :href=" route('register')" class=" d-inline-block btn btn-pink btn-sm">
                            {{ __('Apply') }}
                        </x-nav-link>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 border-bottom">
        <div class="row">
            <div class="col-lg-6 mt-lg-5">
                <div class="row">
                    <h5 class="mt-lg-2"><span class="mint fw-bold">Dream</span> Bigger</h5>
                    <p class="p-lg-2">Aspire to work for some of the biggest and best employers in the country</p>
                </div>
                <div class="row">
                    <h5 class="mt-lg-2">Driving the<span class="mint fw-bold">Future</span> </h5>
                    <p class="p-lg-2">FAME is driving the future of the manufacturing industry
                        by building cohesive cooperatives of manufacturers to implement this proven model of skilled training..</p>
                </div>
                <div class="row">
                    <h5 class="mt-lg-2"><span class="mint fw-bold">Change</span> Your Life With FAME</h5>
                    <p class="p-lg-2">Ready for a well-paying career with attractive benefits right now?
                        FAME is a paid experience training program that prepares you for the manufacturing
                        careers of tomorrow, today</p>
                </div>
            </div>
            <div class="col">
                <img src="assets/fame.png" class="h-100 float-end " />
            </div>
        </div>
    </div>

    <section class=" testimonials" id="gobottom">
        <div class="container p-4">
            <div class="row justfy-content-center bg-light-grey p-lg-5">
                <div class="col-md-4 mb-3 wow bounceInUp">
                    <div class="ratio ratio-4x3">
                        {{-- width="400px" height="300px" --}}

                        <iframe src="https://www.youtube.com/embed/Lq4JOcJQUbg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="inner-section wow fadeInUp">
                        <h3>In the FAME <span class="bg-main">Headlines</span></h3>
                        <br>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-main" role="tabpanel" aria-labelledby="nav-main-tab">
                                <p class="text-justify">Sam Corbett gets a look inside Jefferson Community and Technical College's new AMIT center for advanced manufacturing and IT education.</p>
                            </div>

                            <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <p class="text-justify">KAM article</p>
                            </div>

                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <p class="text-justify">Students Sign with leading manufacturing companies after finfishing the porgram. </p>
                            </div>

                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <p class="text-justif"> JCTC to be the Leading manufacturing field contributer.</p>
                            </div>
                        </div>

                        <div class="linear-grid">
                            <div class="row">
                                <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                                    <div class="col-sm-6 col-md-3 mb-2">
                                        <a class="nav-item nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                            <li role="presentation"> <img src="/assets/KAM.png" class="img-thumbnail"></li>
                                        </a>
                                    </div>

                                    <div class="col-sm-6 col-md-3 mb-2">
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                            <li role="presentation"> <img src="assets/studentSigning.png" class="img-thumbnail"></li>
                                        </a>
                                    </div>

                                    <div class="col-sm-6 col-md-3 mb-2">
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                            <li role="presentation"> <img src="assets/jctcPrimaryinManufacturing.png" class="img-thumbnail"></li>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="what-we-do">
        <div class="container">
            <h3 class="section-title mb-2 h1 navy">Training Offered </h3>

            <p class="text-center text-muted">
                The Fame program offers many training oppurtunities for participants,
                You'll engage in Manufacturing Core Exercises like Safety Culture, Visual Workplace Organization, Lean
                Manufacturing, Problem Solving and Machine Reliability, as well as Professional Behaviors.
            </p>

            <div class="row mt-5">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="card-block block-1">
                            <h4 class="card-title">
                                Electricity
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="card-block block-2">
                            <h4 class="card-title">
                                Robotics
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="card-block block-3">
                            <h4 class="card-title">
                                Fluid Power

                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class=" card">
                        <div class="card-block block-4">
                            <h4 class="card-title">
                                Mechanics

                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="card-block block-5">
                            <h4 class="card-title">
                                Hydraulics
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="card-block block-6">
                            <h4 class="card-title">
                                Fabrication
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="card-block block-7">
                            <h4 class="card-title">
                                Pneumatics
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class=" card">
                        <div class="card-block block-8">
                            <h4 class="card-title">
                                Welding
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    {{-- <div class="container px-lg-5">
        <div class="mx-lg-n5 p-5 row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <img src="assets/educationalexcellence.png" class="card-img-top" alt="...">

                    </div>
                    <div class="card-body p-3" style="min-height: 225px" ;>
                        <p class="card-text">
                            Mastering a multiskilled technical skill set,
                            including electricity, robotics,
                            fluid power, mechanics, fabrication (welding and machining),
                            industrial troubleshooting, and more.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <img src="assets/professionalTraining.png" class="card-img-top" alt="...">

                    </div>
                    <div class="card-body p-3" style=" min-height: 225px">

                        <p class=" card-text">
                            These exercises will prepare you to contribute to a safe and highly
                            efficient, cost effective workplace. These include Safety Culture,
                            Visual Workplace Organization, Lean Manufacturing, Problem Solving,
                            and Machine Reliability.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <img src="assets/industryandeducation.png" class="card-img-top" alt="...">

                    </div>
                    <div class="card-body p-3" style=" min-height: 225px">

                        <p class=" card-text">
                            Work Attendance, Initiative, Diligence, Interpersonal Relations,
                            Teamwork, and Verbal and Written Communication will provide you with
                            critical skills and capabilities to be a successful and accomplished employee.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



</x-homepage-layout>

<x-homePage-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('home') }}
        </h2>
    </x-slot>
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

    <div class="container mt-4 border-bottom p-4">
        <div class="row">
            <div class="col-lg col-sm-8">
                <h1 class="navy">FAME</h1>

                <p>KY FAME is a unique two-year program that combines college education with paid training. KY FAME’s
                    Greater Louisville
                    AMT program leads to an Associate’s degree as an Advanced Manufacturing Technician through Jefferson
                    Community & Technical College.</p>

                <p>In 2015, a group of employers came together in Louisville because they all saw the need to train
                    employees for the
                    future due to upcoming retirements and the growth of manufacturing in our city.</p>

                <p>Greater Louisville is one chapter of thirteen chapters in Kentucky. FAME originated in Kentucky but
                    now has chapters in twelve states.

                </p>
                <div class="m-2 col-2">
                    <x-nav-link :href=" route('register')"
                        class="btn btn-pink btn-sm">
                        {{ __('Apply') }}
                    </x-nav-link>
                    </div>

            </div>

            <div class="col p-2">
             <img alt="" src="https://via.placeholder.com/400.png">




            </div>
        </div>
    </div>


    <div class="container p-4">
        <div class="row">
            <div class="col-sm m-3">
                <h1 class="mint text-center">Training Offered </h1>
            </div>
            <div class="row text-center">

                <div class="col-md-3 text-center mb-2 ">
                        <ul class="navy list-group list-group-flush">
                            <li class="list-group-item "><i class="bi bi-tools mint"></i> Electricity</li>
                            <li class="list-group-item"><i class="bi bi-tools mint"></i> Robotics</li>
                            <li class="list-group-item"><i class="bi bi-tools mint"></i> Fluid Power</li>
                            <li class="list-group-item"><i class="bi bi-tools mint"></i> Mechanics</li>
                        </ul>
                </div>

                <div class="col-md-3 text-center mb-2">
                        <ul class="navy list-group list-group-flush">
                            <li class="list-group-item"><i class="bi bi-tools mint"></i> Fabrication</li>
                            <li class="list-group-item"><i class="bi bi-tools mint"></i> Welding</li>
                            <li class="list-group-item"><i class="bi bi-tools mint"></i> Hydraulics</li>
                            <li class="list-group-item"><i class="bi bi-tools mint"></i> Pneumatics</li>
                        </ul>
                </div>

                <div class="col-md mb-2">
                    <p class="mt-2">The Fame program offers many training oppurtunities for participants,
                    You'll engage in Manufacturing Core Exercises like Safety Culture, Visual Workplace Organization, Lean
                    Manufacturing, Problem Solving and Machine Reliability, as well as Professional Behaviors.

                    </p>


                </div>
            </div>
        </div>
    </div>


{{--    <section class="bg-white ">--}}
{{--        <div class="container p-3">--}}
{{--            --}}{{-- <div id="carouselSlidesOnly" class="carousel slide" data-bs-ride="carousel">--}}
{{--                  <div class="carousel-inner">--}}
{{--                    <div class="carousel-item active mx-auto">--}}
{{--                        <div class="d-inline-flex">--}}
{{--                                <img src=" assets/sponsor_logos/Macro-Plastics-logo-w-IPL-smaller.png" class="d-block w-100 "/>--}}
{{--                                <img src="assets/sponsor_logos/Alliant Technologiessmaller.png" class=" d-block w-100 "/>--}}
{{--                               <img src="assets/sponsor_logos/Clariant Logo Clearsmaller.jpg" class=" d-block w-100 "/>--}}
{{--                              <img src="assets/sponsor_logos/DDWsmaller.png" class=" d-block w-100 "/>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="carousel-item  mx-auto">--}}
{{--                            <div class="d-inline-flex ">--}}
{{--                                    <img src="assets/sponsor_logos/GE Appliances_Profile Photosmaller.jpg" class=" d-block w-100 "/>--}}
{{--                                <img src="assets/sponsor_logos/Jones Plasticssmaller.jpg" class="d-block w-100  "/>--}}
{{--                                <img src="assets/sponsor_logos/ONealsmaller.jpg" class=" d-block w-100 "/>--}}
{{--                                <img src="assets/sponsor_logos/paradiseTsmaller.png" class=" d-block w-100 "/>--}}
{{--                            </div>--}}
{{--                    </div>--}}
    {{--                    <div class="carousel-item mx-auto ">--}}
{{--                        <div class="d-inline-flex">--}}
{{--                            <img src="assets/sponsor_logos/Lantech PMS287smaller.new.jpg" class="d-block w-100 "/>--}}
{{--                            <img src="assets/sponsor_logos/Linaksmller.png" class="d-block w-100 "/>--}}
{{--                            <img src="assets/sponsor_logos/Nucorsmaller.png" class="d-block w-100 "/>--}}
{{--                            <img src="assets/sponsor_logos/Kentuky Kingdomsmaller.png" class="d-block w-100 "/>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    </div>--}}
{{--                </div> --}}
{{--           </div>--}}
{{--        </div>--}}
{{--    </section>--}}
</x-homepage-layout>

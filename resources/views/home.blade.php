<x-homePage-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('home') }}
        </h2>
    </x-slot>
    <p>
    The Federation for Advanced Manufacturing Education provides
                         global-best workforce development through strong technical training,
                          integration of manufacturing core competencies, intensive 
                          professional practices and intentional hands-on experience to build
                           the future of the modern manufacturing industry.
    </p>
     <section class="testimonials" id="gobottom">
        <div class="container p-4">
            <div class="row justfy-content-center">
                <div class="col-md-4 mb-3 wow bounceInUp">
                    <div class="big-img ratio ratio-4x3">
                        <iframe width="400px" height="300px" src="https://www.youtube.com/embed/Lq4JOcJQUbg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                <p class="text-justify">Students Sign with leading manufacturing companies after finfishing the porgram.   </p>
                            </div>

                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <p class="text-justif"> JCTC to be the Leading manufacturing field contributer.</p>
                            </div>
                        </div>

                        <div class="linear-grid">
                            <div class="row">                                      
                                <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                                    <div class="col-sm-6 col-md-3 mb-2" >
                                        <a class="nav-item nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                            <li role="presentation">  <img src="/assets/KAM.png" class="img-thumbnail"></li>
                                        </a>
                                    </div>

                                        <div class="col-sm-6 col-md-3 mb-2" >
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                            <li role="presentation"> <img src="assets/studentSigning.png" class="img-thumbnail"></li>
                                        </a>
                                    </div>

                                    <div class="col-sm-6 col-md-3 mb-2">
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                            <li role="presentation">   <img src="assets/jctcPrimaryinManufacturing.png" class="img-thumbnail"></li>
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

        <div class="container px-lg-5">
        <div class="mx-lg-n5 p-5 row row-cols-1 row-cols-md-3 g-4">
             <div class="col">             
                    <div class="card">
                        <div class="card-header">
                            <img src="assets/educationalexcellence.png" class="card-img-top" alt="...">
                          
                        </div>    
                        <div class="card-body p-3" style="min-height: 158px";>
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
                        <div class="card-body p-3">
                            <p class="card-text">         
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
                        <div class="card-body p-3">
                            <p class="card-text">      
                            Work Attendance, Initiative, Diligence, Interpersonal Relations,
                            Teamwork, and Verbal and Written Communication will provide you with 
                            critical skills and capabilities to be a successful and accomplished employee.
                            </p>
                        </div>
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

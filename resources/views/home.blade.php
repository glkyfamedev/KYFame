<x-homePage-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('home') }}
        </h2>
    </x-slot>
    <div class="container border-b p-4">
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-9">
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
                    <x-nav-link :href=" route('register')"
                        class="btn ml-3 whitespace-nowrap inline-flex items-center justify-center border border-transparent rounded-md shadow-sm text-base font-bold text-white bg-pink hover:bg-mint hover:text-white">
                        {{ __('Apply') }}
                    </x-nav-link>
                </p>
            </div>
            <div class="col">
                <img src="assets/gearguy200.png" style="height: 300px" ;></img>
            </div>
        </div>
    </div>

    <section class="bg-light-grey p-5 mt-5">
        <div class="container">
            <div class="row ">
                <div class="col">
                    <h1 style="text-align: center" class="navy" ;>Training Offered</h1>
                </div>
                <div class="col yellow">
                    <h4> Along with core subjects the program also includes:
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm text-center ">
                    <div class="d-inline-flex p-3">
                        <ul class=" navy">
                            <li class="mb-1"><i class="bi bi-tools mint"></i> Electricity</li>
                            <li class="mb-1"><i class="bi bi-tools mint"></i> Robotics</li>
                            <li class="mb-1"><i class="bi bi-tools mint"></i> Fluid Power</li>
                            <li class="mb-1"><i class="bi bi-tools mint"></i> Mechanics</li>
                        </ul>
                    </div>

                    <div class="d-inline-flex p-3">
                        <ul class="navy">
                            <li class="mb-1"><i class="bi bi-tools mint"></i> Fabrication</li>
                            <li class="mb-1"><i class="bi bi-tools mint"></i> Welding</li>
                            <li class="mb-1"><i class="bi bi-tools mint"></i> Hydraulics</li>
                            <li class="mb-1"><i class="bi bi-tools mint"></i> Pneumatics</li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm navy">
                    <ul>
                        <li class="mb-1">
                            <i class="bi bi-cone-striped yellow"></i> Safety
                        </li>
                        <li class="mb-1">
                            <i class="bi bi-cone-striped yellow"></i> Visual workplace organization
                        </li>
                        <li class="mb-1">
                            <i class="bi bi-cone-striped yellow"></i> Lean Manufacturing
                        </li>
                        <li class="mb-1">
                            <i class="bi bi-cone-striped yellow"></i> Problem Solving
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white  border-b-2 border-dark">
        <div class="container p-3">
            {{-- <p><a href="sponsers" class="font-bold mt-2">Our Sponsers:</a></p> --}}
            <div id="carouselSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active mx-auto">
                        <div class="p-3 d-inline-flex ">

                            <a href=""> <img src=" assets/sponsor_logos/Macro-Plastics-logo-w-IPL-smaller.png"
                                    class="mr-5 d-block w-100"></a>


                            <a href=""> <img src="assets/sponsor_logos/Alliant Technologiessmaller.png"
                                    class="mr-5 d-block w-100"></a>

                            <a href=""> <img src="assets/sponsor_logos/Clariant Logo Clearsmaller.jpg" class="mr-5"></a>

                            <a href=""> <img src="assets/sponsor_logos/DDWsmaller.png" class="mr-5" style="height: 50px"
                                    ;></a>

                            <a href=""> <img src="assets/sponsor_logos/GE Appliances_Profile Photosmaller.jpg"
                                    class="mr-5"></a>

                            <a href=""> <img src="assets/sponsor_logos/Jones Plasticssmaller.jpg" class="mr-5"></a>

                            <a href=""> <img src="assets/sponsor_logos/Kentuky Kingdomsmaller.png" class="mr-5"></a>
                            <!-- slider animation to show sponser logos -->
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="p-3 d-inline-flex">
                            <a href=""> <img src="assets/sponsor_logos/Lantech PMS287smaller.jpg"
                                    class="mr-3 d-block w-100"></a>

                            <a href=""> <img src="assets/sponsor_logos/Linaksmller.png" class="mr-5 d-block w-100"></a>

                            <a href=""> <img src="assets/sponsor_logos/Nucorsmaller.png" class="mr-5 d-block w-100"></a>

                            <a href=""> <img src="assets/sponsor_logos/ONealsmaller.jpg" class="mr-5 d-block w-100"></a>

                            <a href=""> <img src="assets/sponsor_logos/paradiseTsmaller.png"
                                    class="mr-3 d-block w-100"></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-homepage-layout>
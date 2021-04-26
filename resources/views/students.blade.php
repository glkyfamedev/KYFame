<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <header class="masthead text-white mb-4">
        <div class="overlay" style="background: rgb(20 15 15);"></div>
            <div class="container slider-top-text">
                <div class="row">
                    <div class="col-md-12 text-center" >
                        <h2 class="mint fs-1 fw-bold">A CAREER YOU CAN BUILD ON.</h2>
                        <h4 class=" text-center fs-5 mb-3">The Advanced Manufacturing Technician program at KY FAME, Greater Louisville chapter</h4>
                        <p class="text-white fw-bold text-center">Your Degree   |   DEBT FREE </p>
                        <a href="{{ URL('register') }}" class="btn btn-pink"><b>Get Started!</b> </a>

                    </div>
                    <div class="col-md-12 text-center mt-5">
                    </div>
                </div>
            </div>
    </header>   
   
    <div class="container testimonials px-lg-5" id="">       
            <div class="row mx-lg-n5">
                <div class="col-md py-3 px-lg-5">
                    <img src="assets/2.png" style="width=85%" class="ratio ratio-4x3 img-thumbnail" alt=""/>
                </div>
                <div class="col py-3 px-lg-5">
                    <h3 class="robo mint fw-bold">A PROGRAM DESIGNED BY MANUFACTURERS</h3>
                    <h4 class="subheading">The <b>Advanced Manufacturing Technician program (AMT)</b></h4>
                    <p class="text-muted">                                                            
                       is a two-year, work-and-learn program that connects manufacturers
                        with high-achieving recent high school graduates.
                        Manufacturers provide the hands-on training,
                        while Jefferson Community & Technical College provides relevant coursework 
                        chosen by employers. The combination of on-site technical training and in-class
                        curriculum designed to fit industry needs produces skilled workers ready
                        for today’s advanced manufacturing. After two years, each student earns
                        an applied associate degree in Advanced Manufacturing Technology, 
                        70 to 80 college credit hours and gains two years’ work experience,
                        incurring little to no education debt in the process.</p>
                </div>
            </div>
      
            <div class="row mx-lg-n5">
                <div class="col-md py-3 px-lg-5">
                    <h3 class="robo mint fw-bold">HOW DO I GET  <span class="bg-main">INVOLVED?</span></h3>
                        <h4 class="subheading">Companies and GL KYFAME recruit </h4>
                        <p class="text-muted">high achieving
                            high school graduates with STEM backgrounds. Candidates submit an application
                            and complete an interview process for acceptance into the program.
                        </p>              

                        <p class="text-muted">Click <a class="pink" href="{{ URL('register') }}"><b>Sign Up</b> </a>
                            to create an account, once you've registered verified your email address 
                            you can log into your account and begin the application.
                         </p>
                    
                        <p class="text-muted">
                            Applicants will need to submit highschool transcripts within 14 days of applying. 
                            College transcripts are also accepted and suggested if applicable; in some cases 
                            college transcripts can help an applicant be accepted in cases of less than 
                            perfect highschool records.                    
                        </p>                        
                         <p class="text-center">
                            To qualify for the FAME program Applicants need to be considered<span class="bg-main fw-bold"> college 
                            ready</span> according to ACT/SAT/KYOTE scores or successful completion of pre-college courses.<br>  
                        </p>
                </div>

                <div class="col py-3 px-lg-5">
                    <img src="assets/3.png" style="width=85%" class="img-fluid ratio ratio-4x3 img-thumbnail" alt=""/>
                </div>
            </div>

            <div class="row mx-lg-n5">
                <div class="col-md py-3 px-lg-5">
                        <img src="assets/4.png" style="width=85%" class="ratio ratio-4x3  img-thumbnail" alt=""/>
                </div>
                <div class="col-md py-3 px-lg-5">
                    <h3 class="robo mint fw-bold">Benefits of the FAME program</h3>
                    <h5 class="subheading">Students earn a minimum of<span class="bg-main"> $12 per hour</span>
                            to offset the cost of tuition</h5>
                        <p class="text-muted">Over the course of the program, 
                            company sponsors commit to providing valuable work experience, 
                            including competitive pay, hands-on instruction and a
                            flexible schedule.</p>                      
                        <ul class="text-sm">
                            <li class="text-sm">An Associate degree (2-year college degree)</li>
                            <li class="text-sm">At least 60 credit hours</li>
                            <li class="text-sm">Approximately 2 calendar years/1,800 hours of on-the-job training and work experience</li>
                            <li class="text-sm">Potentially zero student-loan debt so that you can graduate college debt free</li>
                            <li class="text-sm">Opportunity for full-time employment with a sponsoring employer</li>
                            <li class="text-sm">The opportunity to continue your education in an Advanced Manufacturing Business</li>
                            <li class="text-sm">Northwood University recognizes 60 credits to apply towards a bachelor of science in Lean Operations & Supply Chain Management, or in Applied Management</li>
                            <li class="text-sm">The opportunity to continue your education in an Advanced Manufacturing Engineer or Engineering Technician with a participating university</li>
                        </ul>                        
                </div>
            </div>
    </div>

    <div class="container p-md-4">       
        <div class="row mx-lg-n5 mx-auto">   
         <h2 class="text-center"><span class="bg-main">Additional</span> training</h2>    
            <div class="col-7 py-3 px-lg-5 text-center">               
                    <p>Along with our standard training programs,
                    KYFAME also ensures that each company 
                    spends time training each participant in workplace safety 
                    in a manufacturing and engeering enviroment.</p>
            </div>

            <div class="col py-3 px-lg-5 navy d-inline-flex">
                <ul class="list-group" style="list-style:none";>       
                    <li class="" style="list-style:none";><i class="bi bi-cone-striped yellow"></i> Safety</li>
                    <li class="" style="list-style:none";><i class="bi bi-cone-striped yellow"></i> Visual workplace organization</li>
                    <li class="" style="list-style:none";><i class="bi bi-cone-striped yellow"></i> Lean Manufacturing</li>
                    <li class="" style="list-style:none";><i class="bi bi-cone-striped yellow"></i> Problem Solving</li>
                </ul>
            </div>
        </div>                                   
    </div>        
   
                
                

   




    {{-- <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4 class="robo">Latest News</h4>
                <ul class="timeline">
                    <li>
                        <a target="_blank" href="https://www.totoprayogo.com/#">New Web Design</a>
                        <a href="#" class="float-right">21 March, 2014</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                    </li>
                    <li>
                        <a href="#">21 000 Job Seekers</a>
                        <a href="#" class="float-right">4 March, 2014</a>
                        <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                    </li>
                    <li>
                        <a href="#">Awesome Employers</a>
                        <a href="#" class="float-right">1 April, 2014</a>
                        <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}

</x-guest-layout>
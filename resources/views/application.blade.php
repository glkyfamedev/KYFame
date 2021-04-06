<x-app-layout>

    <x-slot name="header">
        <div class="row">
            <div class="col-md-7">
               <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Application') }}
               </h2>
            </div>

            <div class="col">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->first_name }}</div>
            </div>
        </div>
    </x-slot>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    @if(Session::has('message'))
    <div class="alert alert-info">
        {{Session::get('message')}}
    </div>
    @endif
<style>
    .btn-info, .btn-success{
      margin: 5px;
    }

    </style>
    <div class="row py-12 mx-auto align-content-center">
        <div class="col-7 p-7 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white border-gray-200">

                        <button type="button" class="btn" id="startBtn">Start new Application</button>
                        <div class="form-section toggle" id="section1" style="display:none;">
                            <h2>Contact Information</h2>

                            <div class="messages"></div>
                            <form class="contact-form row g-3" id="contact-Section" method="POST" action="{{ route('form.formSubmit') }}">

                                     <input type="hidden" id="token" name="_token" value="{{ Session::token() }}">
                                                                                   
                                    <div class="col-8">
                                        <label class="form-label" for="streetAddress">Street address</label>
                                        <input id="streetAddress" class="form-control" type="text" name="streetAddress"
                                          required autofocus />
                                    </div>
                                    
                                    <div class="col">
                                        <label class="form-label" for="address2">Apt or Suite number</label>
                                        <input id="address2" class="form-control" type="text" name="address2"
                                          required  autofocus />
                                    </div>

                                    <div class="col-md-6">
                                     <label class="form-label" for="city">City</label>
                                        <input id="city" class="form-control" type="text" name="city"
                                         required autofocus />
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label" for="state">State</label>
                                        <input id="state" class="form-control" type="text" name="state"
                                         required autofocus />
                                    </div>

                                    <div class="col-md-2">
                                        <label class="form-label" for="zip">Zip</label>
                                        <input id="zip" class="form-control" type="text" name="zip"
                                          required autofocus />
                                    </div>

                                    <div class="col">
                                        <label class="form-label" for="phone">Primary Phone</label>
                                        <input id="primaryPhone" class="form-control" type="text" name="primaryPhone"
                                          required autofocus />
                                    </div>
                                    <div class="col">
                                        <label class="form-label" for="altPhone">Alt Phone</label>
                                        <input id="altPhone" class="form-control" type="text" name="altPhone"
                                         autofocus />
                                    </div>                                                             
                                    <div class="form-nav">
                                      <button type="button" class="prevBtn btn btn-info float-left">Back</button>
                                      <button type="button" id="contactBtn" class="nextBtn btn btn-info float-right"data-section="1">Next</button>
                                  </div>
                                </form>
                        </div>




                        <!-- Status INFORMATION FORM -->
                        <!-- FORM ROW 1 -->
                        <div class="form-section toggle" id="section2" style="display:none;">
                         <h2>Legal status </h2>
                             <form class="Contact-form" method="POST" action="{{ route('form.formStatus') }}">
                                <input type="hidden" id="statusToken" name="_token" value="{{ Session::token() }}">                          
                                <h5 for="over18">Will you be 18 before June 1? </h5>
                                <div id="over18" class="m-3">
                                    <div class="form-check">
                                       <label class="form-check-label" for="legal">Yes</label>
                                       <input type="radio" class="section-data form-check-input" id="over18" name="under_18" value="1" checked>
                                    </div>
                                    <div class="form-check">
                                       <label class="form-check-label" for="over18">No</label>
                                       <input type="radio" class="section-data form-check-input" id="under18" name="under_18" value="0">
                                    </div>
                                </div>
                               
                                <h5 for="authorizedInUs">Are you authorized to work in the US?</h5>
                                <div class="m-3" id="authorizedInUs">
                                       <div class="form-check">
                                          <label class="form-check-label" for="authorizedInUsYes">Yes</label>
                                          <input id="authorizedInUsYes" class="section-data form-check-input" type="radio" name="authorizedInUS" value="1"
                                             required checked/>
                                       </div>

                                       <div class="form-check">
                                          <label class="form-check-label" for="authorizedInUsNo">No</label>
                                          <input id="authorizedInUsNo" class="section-data form-check-input" type="radio" name="authorizedInUS" value="0"
                                             required />
                                       </div>                                                                   
                                   </div>
                                                           
                                   <h5 for="levelOfEducation">What is your highest level of Education?</h5>
                                   <div class="m-3" id="levelOfEducation">
                                        <div class="form-check">
                                            <input type="radio" class="section-data form-check-input levelOfEducation" id="HsSenior" name="levelOfEducation" value="HS Senior" checked>
                                            <label class="form-check-label" for="HsSenior">HS Senior</label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="section-data form-check-input levelOfEducation" id="HsGraduate" name="levelOfEducation" value="HS Graduate">
                                            <label class="form-check-label" for="HsGraduate">HS Graduate</label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="section-data form-check-input levelOfEducation" id="GED" name="levelOfEducation" value="GED">
                                            <label class="form-check-label" for="GED">GED</label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="section-data form-check-input levelOfEducation" id="SomeCollege" name="levelOfEducation" value="SomeCollege">
                                            <label class="form-check-label" for="SomeCollege">Some College</label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="section-data form-check-input levelOfEducation" id="AscDegree" name="levelOfEducation" value="AssociatesDegree">
                                            <label class="form-check-label" for="AscDegree">Associates Degree</label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="section-data form-check-input levelOfEducation" id="BacDegree" name="levelOfEducation" value="BachelorsDegree">
                                            <label class="form-check-label" for="BacDegree">Bachelors Degree</label>
                                        </div>
                                   </div>                               
                             
                                   <h5 for="RelativesAtSponsors">Do you have an relatives working for sponsoring companies?</h5>
                                   <div class="m-3" id="RelativesAtSponsors">
                                    <div class="form-check">
                                        <label class="form-check-label" for="relativesYes">Yes</label>
                                        <input type="radio" class="section-data form-check-input" id="relativesYes" name="relativeSponsors" value="1">

                                        <label class="form-check-label" for="relativesNo">No</label>
                                        <input type="radio" class="section-data form-check-input" id="relativesNo" name="relativeSponsors" value="0" checked>
                                    </div>
                                  </div>

                                  <h5 for="employedWithSponsor">Do you work for a sponsoring company?</h5>
                                  <div class="m-3" id="employedWithSponsor">
                                    <div class="form-check">
                                        <label class="form-check-label" for="workForSponsor">Yes</label>
                                        <input type="radio" class="section-data form-check-input" id="workForSponsorYes" name="workForSponsor" value="1">
                                    </div>

                                    <div class="form-check">
                                         <label class="form-check-label" for="workForSponsorNo">No</label>
                                        <input type="radio" class="section-data form-check-input" id="workForSponsorNo" name="workForSponsor" value="0">
                                    </div>
                                </div>                               

                                 <div class="m-3" id="SponsorNames">
                                   <label for="sponsorNames">If you answered yes to the previous questions please enter those sponor names here.</label>
                                    <input id="sponsorNames" class="form-control" type="text" name="sponsor_names"
                                         autofocus />
                                 </div>

                                 <div class="form-nav m-3">
                                    <button type="button" class="prevBtn btn btn-info float-left">Back</button>
                                    <button type="button" id="statusBtn" class="nextBtn btn btn-info float-right" data-section="2">Next</button>                                    
                                 </div>                          
                            </form>
                         </div>
                    

                        <!-- Work INFORMATION FORM -->
                        <!-- <h2>Work History</h2> -->
                        <!-- FORM ROW 1 -->
                        <div class="form-section toggle" style="display:none;" id="section3">
                           <h2>Employment History</h2>
                       
                            <div id="employmentContainer">

                               
                            </div>
                            
                            <div class="col-md-2 mb-3" id="addButton">
                                <button class="btn btn-primary" type="button" style="width:140px;" id="addField">Add Field</button>
                            </div>

                            <div class="form-nav">
                                <button type="button" class="prevBtn btn btn-info float-left">Back</button>
                                <button type="button" id="employmentBtn" class="btn btn-info float-right" data-section="3">Next</button>
                            </div>
                        </div>

                        <!-- Assesments INFORMATION FORM -->
                        <!-- <h2>Assesment Information</h2> -->
                        <!-- FORM ROW 1 -->
                        <div class="form-section toggle" id="section4" style="display: none" ;>
                           <h2> Assesments</h2>                          
                               <form class="contact-form" method="post" action="{{ route('form.formAssesments') }}">
                                <input type="hidden" id="assesmentToken" name="_token" value="{{ Session::token() }}">
                                    <div class="m-3">
                                      <h5>Have you taken the ACT test?</h5>
                                       <div class="form-check">
                                            <label class="form-check-label" for="ACTyes">Yes</label>
                                            <input class="form-check-input" type="radio" id="ACTyes" name="ACT" value="1">
                                       </div>
                                       <div class="form-check">
                                            <label class="form-check-label" for="ACTno">no</label>
                                            <input class="form-check-input" type="radio" id="ACTno" name="ACT" value="0" checked>
                                        </div>
                                     </div>

                                    <div class="m-3">
                                        <h5 for="">ACT Scores</h5> 
                                        <div class="row">
                                            <div class="col">  
                                                <input type="text" class="form-control" id="ACTenglishScore" name="ACTenglishScore" placeholder="English"/>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" id="ACTreadingScore" name="ACTreadingScore" placeholder="Reading"/>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" id="ACTmathScore" name="ACTmathScore" placeholder="Math" />
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" id="ACTscienceScore" name="ACTscienceScore" placeholder="Science"/>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" id="ACTcompositeScore" name="ACTcompositeScore" placeholder="Composite"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="m-3">
                                        <h5>Have you taken the SAT test?</h5>
                                        <div class="form-check">
                                            <label for="SATyes" class="form-check-label">Yes</label>
                                            <input class="form-check-input" type="radio" id="SATyes" name="SAT" value="1">
                                        </div>

                                        <div class="form-check">
                                            <label for="SATno" class="form-check-label">No</label>
                                            <input type="radio" class="form-check-input" id="SATno" name="SAT" value="0"checked>
                                        </div>
                                    </div>

                                    <div class="m-3">
                                        <h5>SAT Scores</h5>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" id="SATmath" name="SATmath" placeholder="Math" />
                                            </div>
                                            <div class="col">                                  
                                                <input type="text" class="form-control" id="SATCriticalThinking" name="SATCriticalThinking" placeholder="Critical Thinking" />
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" id="SATwriting" name="SATwriting" placeholder="Writing" />
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" id="SATcomposite" name="SATcomposite" placeholder="Composite" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="m-3">
                                        <h5>Have you taken the KYOTE test?</h5>
                                        <div class="form-check">
                                            <label for="KYOTEyes" class="form-check-label">Yes</label>
                                            <input type="radio" class="form-check-input" id="KYOTEyes" name="KYOTE" value="1">
                                        </div>
                                        <div class="form-check">
                                            <label for="KYOTEno" class="form-check-label">No</label>
                                            <input type="radio" class="form-check-input" id="KYOTEno" name="KYOTE" value="0" checked>
                                        </div>
                                    </div>

                                    <div class="m-3">                            
                                        <h5>Select Area and enter score</h5>                                      
                                         <div class="input-group mb-3">
                                                <select id="KYOTEarea" name="KYOTEarea">
                                                    <option value="">Select a KYOTE area</option>
                                                    <option value="reading">reading</option>
                                                    <option value="writting">writting</option>
                                                    <option value="math">math</option>
                                                </select>
                                                <input type="text" class="form-control" id="KYOTEscore" name="KYOTEscore" placeholder="Area Score"/>
                                        </div>
                                    </div>

                                    <div class="m-3">
                                            <h5 for="">If You haven't taken the ACT, SAT or KYOTE, but have taken another assesment..</h5>
                                            <input type="text" class="form-control" id="otherAssesments" name="otherAssesments" placeholder="Other Assesments and scores">
                                    </div>

                                    <div class="m-3">
                                            <h5>Did you participate in Skills USA?</h5>
                                            <div class="form-check">
                                                <label for="skillsUSAyes" class="form-check-label">Yes</label>
                                                <input type="radio" class="form-check-input" id="skillsUSAyes" name="skillsUSA" value="1">
                                            </div>

                                            <div class="form-check">
                                                <label for="SkillsUSAno" class="form-check-label">No</label>
                                                <input type="radio" class="form-check-input" id="skillsUSAno" name="skillsUSA" value="0" checked>
                                            </div>
                                    </div>

                                    <div class="m-3">
                                            <h5>Did you participate in project lead the way?</h5>
                                            <div class="form-check">
                                                <label for="projectLeadTheWayYes" class="form-check-label">Yes</label>  
                                                <input type="radio" class="form-check-input"  id="projectLeadTheWayYes" name="projectLeadTheWay" value="1">
                                            </div>

                                            <div class="form-check">
                                                <label for="projectLeadTheWayNo" class="form-check-label">No</label>
                                                <input type="radio" class="form-check-input" id="projectLeadTheWayNo" name="projectLeadTheWay" value="0" checked>
                                            </div>
                                    </div>

                                    <div class="m-3">
                                            <label for="manufacturingAcedemics">Have you completed any Manufacturing Acedemics?</label>
                                            <input type="text" class="form-control" id="manufacturingAcedemics" name="manufacturingAcedemics" placeholder="List Manufacturing Acedemics">
                                        </div>

                                        <div class="m-3">
                                            <label for="awardsAndHonors">Awards and Honors</label>
                                            <input type="text" class="form-control" id="awardsAndHonors" name="awardsAndHonors" placeholder="">
                                        </div>

                                        <div class="m-3">
                                            <label for="highSchoolAttended">Name of highschool attended?</label>
                                            <input type="text" class="form-control" id="highSchoolAttended" name="highSchoolAttended" placeholder="">
                                        </div>

                                        <div class="m-3">
                                            <label for="GPA">Highschool GPA</label>
                                            <input type="text" class="form-control" id="GPA" name="GPA" placeholder="">
                                        </div>
                                        
                                        <div class="m-3">
                                            <label for="highSchoolActivities">List any highschool Activites</label>
                                            <input type="text" class="form-control" id="highSchoolActivities" name="highSchoolActivities" placeholder="">
                                        </div>

                                        <div class="m-3">
                                            <label for="technicalPrograms">List any other technical programs attended</label>
                                            <input type="text" class="form-control" id="technicalPrograms" name="technicalPrograms" placeholder="">
                                        </div>
                                        <div class="m-3">
                                            <label for="additionalComments">Additional Comments</label>
                                            <input type="text" class="form-control" id="additionalComments" name="additionalComments" placeholder="">
                                        </div>

                                        <div class="form-nav m-3">
                                            <button type="button" class="prevBtn btn btn-info float-left">Back</button>
                                            <button type="button" id="assesmentBtn" class=" btn btn-info float-right" data-section="4">Next</button>
                                        </div>
                                
                            </form>
                        </div>                             

                            <!-- Essay -->
                            <!-- FORM ROW 1 -->
                   
                        <div class="form-section toggle" id="section5" style="display:none" ;>
                            <h2> Essay </h2>
                            <form class="contact-form" method="post" action="{{ route('form.formEssay') }}"> 
                             <input type="hidden" id="essayToken" name="_token" value="{{ Session::token() }}">
                                <label for="essay" class="form-label">Example textarea</label>
                                <textarea class="form-control" id="essay" rows="3" name="essay"></textarea>

                                <div  class="form-nav">
                                    <button type="button" class="prevBtn btn btn-info float-left">Back</button>
                                    <button type="button" id="essayBtn" class="nextBtn btn btn-info float-right" data-section="5">Next</button>
                                </div>
                            </form>
                        </div>

                        <!-- Transcripts -->
                        <!-- FORM ROW 1 -->
                        <div class="form-section toggle" id="section6" style="display:none" ;>
                             <h2> Transcripts</h2>                              
                                <form class="contact-form" method="post" action="{{ route('form.formTranscript') }}">
                                    <input type="hidden" id="transcriptToken" name="_token" value="{{ Session::token() }}">
                                 <div class="p-3">
                                    <label class="form-label" for="transcripts">Upload transcripts</label>
                                         <div class="input-group m-3">
                                              <input type="file" class="form-control" placeholder="" name="transcript"/>
                                        </div>                           
                                </div>
                                 <div class="form-nav">
                                    <button type="button" class="prevBtn btn btn-info float-left">Back</button>
                                    <button type="button" id="transcriptBtn" class="nextBtn btn btn-info float-right" data-section="6">Next</button>
                                </div>
                            </form>
                        </div>
                                                             
                        <!-- Agreement and submit -->
                        <!-- FORM ROW 1 -->
                        <div class="form-section toggle" id="section7" style="display:none" ;>
                          <h2>Terms and Complete</h2>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  I have uploaded or email my transcript documents.
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                To be considered for the program, I must work at the company which selects me through the interview and draft process.
                                You understand you do not get to choose your sponsoring companies.*
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    To be considered at a sponsoring company, you will need to give your permission to share the information in your
                                    application as well as any other documents or media that you submit with sponsoring companies. You understand that by
                                    submitting your application and supporting items, you are waiving your rights of nondisclosure of these records under
                                    federal law to KY Fame, Greater Louisville Chapter, and company sponsors. This release does not permit the disclosure of
                                    these records to any other persons or entities without your written consent.*
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                   Participating in KY Fame, you recognize additional commitments outside of work or school may be required where you will
                                   be acting as a program ambassador or contributing to community service projects.*
                                </label>
                            </div>
                            <button class="finish btn btn-success" type="submit">Submit</button>
                        </div>
                    </div>
               </div>          
       
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group list-group-flush nav nav-tabs flex-column" id="appNav" role="tablist">
                        <li class="list-group-item nav-item" role="presentation">
                            <a href="#section1">Contact Info</a>
                        </li>
                        <li class="list-group-item nav-item nav-item" role="presentation">
                            <a href="#section2">Legal Status</a>
                        </li>
                        <li class="list-group-item nav-item nav-item" role="presentation">
                            <a href="#section3">Employment History</a>
                        </li>
                        <li class="list-group-item nav-item nav-item" role="presentation">
                            <a href="#section4">Assesments</a>
                        </li>
                        <li class="list-group-item nav-item nav-item" role="presentation">
                            <a href="#section5">Essay</a>
                        </li>
                        <li class="list-group-item nav-item nav-item" role="presentation">
                            <a href="#section6">Transcripts</a>
                        </li>
                        <li class="list-group-item nav-item nav-item" role="presentation">
                            <a href="#section7">Finish</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="employerTemplate" style="display: none;">
            <input type="hidden" id="employmentToken" name="_token" value="{{ Session::token() }}">
            employmentToken
            <div class="employer">
                <div class="row g-3 mt-3">
                    <div class="col">
                        <label class="form-label" for="employerName">Employer Name</label>
                        <input class="section-data form-control  employerName" type="text" name="employerName" />
                    </div>
                
                    <div class="col">
                        <label class="form-label" for="employerPhone">Employer Phone</label>
                        <input class="section-data form-control  employerPhone" type="text" name="employerPhone" />
                    </div>
                </div>

                <label class="form-label" for="workDuties">Duties performed</label>
                <input class="section-data form-control workDuties" type="text" name="workDuties" />
                
                <div class="row g-3 mt-3">
                    <div class="col-5">
                        <label class="form-label" for="employmentStart">Employment start date</label>
                        <input type="date" class=" employmentStart" name="employmentStart" />
                    </div>              
                    <div class="col-5">
                        <label class="form-label" for="employmentEnd">Employment end date</label>
                        <input type="date" class=" employmentEnd" name="employmentEnd" />
                    </div>
                </div>
                
                <div class="mt-3">
                    <label class="form-label" for="reasonForLeaving">Reason for leaving</label>
                    <input class="section-data form-control  reasonForLeaving" type="text" name="reasonForLeaving" />
                </div>
            </div>            
        </div>
    </div>


<script>
    var contactRouteUrl = "{{ route('form.formSubmit') }}";
    var statusRouteUrl = "{{ route('form.formStatus') }}";
    var employmentRoutetUrl = "{{ route('form.formEmployment') }}";
    var assesmenRoutetUrl = "{{ route('form.formAssesments') }}";
    var essayRouteUrl = "{{ route('form.formEssay') }}";
    var transcriptRouteUrl = "{{ route('form.formTranscript') }}";

</script>

<script src="{{ asset('js/application.js')}}" type="text/javascript"></script>



</x-app-layout>
<x-app-layout>

    {{-- <x-slot name="header">
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
    </x-slot> --}}
    <x-auth-session-status class="mb-4" :status="session('status')"/>
    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

    @if (Session::has('message'))
        <div class="alert alert-info">
            {{ Session::get('message') }}
        </div>
    @endif

    <style>
        .btn-info,
        .btn-success {
            margin: 5px;
        }

        .hide {
            display: none;
        }

        .required {
            color: red;
            font-size: x-small;
        }

        .errorBorder {
            border: solid 2px red !important;
        }

        .check {
            color: green;
            font-size: x-large;
            margin: 5px;
        }

    </style>

    <div class="row py-5 justify-content-center">


        <div class="col-7 p-7 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="bg-white border-gray-200">

                <div id="appDescription">

                    <p> In order to be considered for the FAME program, you will be expected to submit your highachool
                        transcripts within 14 days of completeing your application. </p>

                    <p>

                    </p>


                    <div>
                        @if ($application->start_date == null)
                            <button type="button" class="btn btn-pink fw-bolder" id="startBtn">Start Application
                            </button>
                        @elseif ($application->start_date != null && $application->completed_date == null)
                            <button type="button" class=" btn btn-navy" id="startBtn">Continue Application</button>
                        @else
                            <button type="button" class="btn btn-pink " id="startBtn">Edit/Update Application</button>
                        @endif
                    </div>


                </div>

                <div class="form-section toggle" id="section1" style="display:none;">
                    <h2>Contact Information</h2>

                    <div class="messages"></div>


                    <form class="contact-form row g-3" id="contact-Section">
                        <input type="hidden" id="token" name="_token" value="{{ Session::token() }}">

                        <div class="col-8 contact-required">
                            {{-- {{ contact_app->streetAddress }} --}}
                            <label class="form-label contact-label" for="streetAddress">Street address <i
                                    class="bi bi-asterisk required"></i></label>
                            <input id="streetAddress" class="form-control contact-input" type="text"
                                   name="streetAddress" required autofocus/>
                        </div>

                        <div class="col">
                            <label class="form-label contact-label" for="address2">Apt or Suite number </label>
                            <input id="address2" class="form-control" type="text" name="address2" autofocus/>
                        </div>

                        <div class="col-md-6 contact-required">
                            <label class="form-label contact-label" for="city">City <i
                                    class="bi bi-asterisk required"></i></label>
                            <input id="city" class="form-control contact-input" type="text" name="city" required
                                   autofocus/>
                        </div>

                        <div class="col-md-4 contact-required">
                            <label class="form-label contact-label" for="state">State <i
                                    class="bi bi-asterisk required"></i></label>
                            <input id="state" class="form-control contact-input" type="text" name="state" required
                                   autofocus/>
                        </div>

                        <div class="col-md-2 contact-required">
                            <label class="form-label contact-label" for="zip">Zip <i
                                    class="bi bi-asterisk required"></i></label>
                            <input id="zip" class="form-control contact-input" type="text" name="zip" required
                                   autofocus/>
                        </div>

                        <div class="col contact-required">
                            <label class="form-label contact-label" for="phone">Primary Phone <i
                                    class="bi bi-asterisk required"></i></label>
                            <input id="primaryPhone" class="form-control contact-input phone" type="text"
                                   name="primaryPhone" required autofocus/>
                        </div>
                        <div class="col">
                            <label class="form-label contact-label" for="altPhone">Alt Phone</label>
                            <input id="altPhone" class="form-control phone" type="text" name="altPhone" autofocus/>
                        </div>
                        <div class="form-nav">
                            <button type="submit" id="contactBtn" class="nextBtn btn btn-info float-right"
                                    data-section="1">Next
                            </button>
                        </div>
                    </form>
                </div>


                <!-- Status INFORMATION FORM -->
                <!-- FORM ROW 1 -->
                <div class="form-section toggle" id="section2" style="display:none;">
                    <h2>Legal status </h2>
                    <form class="Contact-form" method="POST" action="{{ route('form.formStatus') }}">
                        <input type="hidden" id="statusToken" name="_token" value="{{ Session::token() }}">

                        <h5 for="over18">Will you be 18 before June 1? <i class="bi bi-asterisk required"></i></h5>
                        <div id="over18" class="m-3">
                            <div class="form-check">
                                <label class="form-check-label" for="legal">Yes</label>
                                <input type="radio" class="section-data form-check-input" id="over18" name="under_18"
                                       value="1" checked>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="over18">No</label>
                                <input type="radio" class="section-data form-check-input" id="under18" name="under_18"
                                       value="0">
                            </div>
                        </div>

                        <h5 for="authorizedInUs">Are you authorized to work in the US? <i
                                class="bi bi-asterisk required"></i></h5>
                        <div class="m-3" id="authorizedInUs">
                            <div class="form-check">
                                <label class="form-check-label" for="authorizedInUsYes">Yes</label>
                                <input id="authorizedInUsYes" class="section-data form-check-input" type="radio"
                                       name="authorizedInUS" value="1" required checked/>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label" for="authorizedInUsNo">No</label>
                                <input id="authorizedInUsNo" class="section-data form-check-input" type="radio"
                                       name="authorizedInUS" value="0" required/>
                            </div>
                        </div>

                        <h5 for="levelOfEducation">What is your highest level of Education? <i
                                class="bi bi-asterisk required"></i></h5>
                        <div class="m-3" id="levelOfEducation">
                            <div class="form-check">
                                <input type="radio" class="section-data form-check-input levelOfEducation" id="HsSenior"
                                       name="levelOfEducation" value="HS Senior" checked>
                                <label class="form-check-label" for="HsSenior">HS Senior</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="section-data form-check-input levelOfEducation"
                                       id="HsGraduate" name="levelOfEducation" value="HS Graduate">
                                <label class="form-check-label" for="HsGraduate">HS Graduate</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="section-data form-check-input levelOfEducation" id="GED"
                                       name="levelOfEducation" value="GED">
                                <label class="form-check-label" for="GED">GED</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="section-data form-check-input levelOfEducation"
                                       id="SomeCollege" name="levelOfEducation" value="SomeCollege">
                                <label class="form-check-label" for="SomeCollege">Some College</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="section-data form-check-input levelOfEducation"
                                       id="AscDegree" name="levelOfEducation" value="AssociatesDegree">
                                <label class="form-check-label" for="AscDegree">Associates Degree</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="section-data form-check-input levelOfEducation"
                                       id="BacDegree" name="levelOfEducation" value="BachelorsDegree">
                                <label class="form-check-label" for="BacDegree">Bachelors Degree</label>
                            </div>
                        </div>


                        <h5 for="RelativesAtSponsors">Do you have an relatives working for sponsoring companies? <i
                                class="bi bi-asterisk required"></i></h5>
                        <div class="m-3 " id="relativesAtSponsors">
                            <div class="form-check">
                                <label class="form-check-label" for="relativesYes">Yes</label>
                                <input type="radio" class="section-data form-check-input" id="relativesYes"
                                       name="relativeSponsors" value="1">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="relativesNo">No</label>
                                <input type="radio" class="section-data form-check-input" id="relativesNo"
                                       name="relativeSponsors" value="0" checked>
                            </div>
                        </div>

                        <div class="m-3 hide status-required" id="relativeSponsorInput">
                            <label for="relativeSponsorNames" class="form-label status-label">If you answered yes to
                                the
                                previous question please enter that sponor name here.<i
                                    class="bi bi-asterisk required"></i> </label>
                            <input id="relativeSponsorNames" class="form-control" type="text" name="" autofocus/>
                        </div>


                        <h5 for="employedWithSponsor">Do you work for a sponsoring company? <i
                                class="bi bi-asterisk required"></i></h5>
                        <div class="m-3" id="employedWithSponsor">
                            <div class="form-check">
                                <label class="form-check-label" for="workForSponsor">Yes</label>
                                <input type="radio" class="section-data form-check-input" id="workForSponsorYes"
                                       name="workForSponsor" value="1">
                            </div>

                            <div class="form-check">
                                <label class="form-check-label" for="workForSponsorNo">No</label>
                                <input type="radio" class="section-data form-check-input" id="workForSponsorNo"
                                       name="workForSponsor" value="0" checked>
                            </div>
                        </div>

                        <div class="m-3 hide status-required" id="employedSponsorInput">
                            <label for="employedSponsorNames" class="form-label status-label">If you answered yes to
                                the
                                previous question please enter that sponor name here.<i
                                    class="bi bi-asterisk required"></i> </label>
                            <input id="employedSponsorNames" class="form-control" type="text" name="" autofocus/>
                        </div>

                        <div class="form-nav m-3">
                            <button type="submit" id="statusBtn" class="nextBtn btn btn-info float-right"
                                    data-section="2">Next
                            </button>
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

                    <div class="col-md-2 mb-3 mt-4" id="addButton">
                        <button class="btn btn-primary" type="button" style="width:140px;" id="addField">Add Employer
                        </button>
                    </div>

                    <div class="form-nav">
                        <button type="submit" id="employmentBtn" class="btn btn-info float-right"
                                data-section="3">Next
                        </button>
                    </div>
                </div>

                <!-- Assesments INFORMATION FORM -->
                <!-- <h2>Assesment Information</h2> -->
                <!-- FORM ROW 1 -->
                <div class="form-section toggle" id="section4" style="display: none" ;>
                    <h2> Assessments</h2>
                    <form class="contact-form" method="post" action="{{ route('form.formAssesments') }}">
                        <input type="hidden" id="assesmentToken" name="_token" value="{{ Session::token() }}">
                        <div class="m-3">
                            <h5>Have you taken the ACT test? <i class="bi bi-asterisk required"></i></h5>
                            <div class="form-check">
                                <label class="form-check-label" for="ACTyes">Yes</label>
                                <input class="form-check-input" type="radio" id="ACTyes" name="ACT" value="1">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="ACTno">No</label>
                                <input class="form-check-input" type="radio" id="ACTno" name="ACT" value="0" checked>
                            </div>
                        </div>

                        <div class="m-3">
                            <div id="ACTScoresContainer" class="hide">
                                <h5 for="ACTScores">ACT Scores <i>(required)</i></h5>
                                <div id="ACTScores" class="row score-required" style="display: inline-flex;">
                                    <div class="col">
                                        <label class="score-label" for="ACTenglishScore"></label>
                                        <input type="text" class="form-control ACT testScore" id="ACTenglishScore"
                                               name="ACTenglishScore" placeholder="English"/>
                                    </div>
                                    <div class="col">
                                        <label class="score-label" for="ACTreadingScore"></label>
                                        <input type="text" class="form-control testScore ACT" id="ACTreadingScore"
                                               name="ACTreadingScore" placeholder="Reading"/>
                                    </div>
                                    <div class="col">
                                        <label class="score-label" for="ACTmathScore"></label>
                                        <input type="text" class="form-control testScore ACT" id="ACTmathScore"
                                               name="ACTmathScore" placeholder="Math"/>
                                    </div>
                                    <div class="col">
                                        <label class="score-label" for="ACTscienceScore"></label>
                                        <input type="text" class="form-control testScore ACT" id="ACTscienceScore"
                                               name="ACTscienceScore" placeholder="Science"/>
                                    </div>
                                    <div class="col">
                                        <label class="score-label" for="ACTcompositeScore"></label>
                                        <input type="text" class="form-control testScore ACT" id="ACTcompositeScore"
                                               name="ACTcompositeScore" placeholder="Composite"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="m-3">
                            <h5>Have you taken the SAT test? <i class="bi bi-asterisk required"></i></h5>
                            <div class="form-check">
                                <label for="SATyes" class="form-check-label">Yes</label>
                                <input class="form-check-input" type="radio" id="SATyes" name="SAT" value="1">
                            </div>

                            <div class="form-check">
                                <label for="SATno" class="form-check-label">No</label>
                                <input type="radio" class="form-check-input" id="SATno" name="SAT" value="0" checked>
                            </div>
                        </div>

                        <div class="m-3">
                            <div id="SATScoresContainer" class="hide">
                                <h5 for="SATScores">SAT Scores <i>(required)</i></h5>
                                <div class="row score-required" id="SATScores" style="display: inline-flex;">
                                    <div class="col">
                                        <label class="score-label" for="SATmath"></label>
                                        <input type="text" class="form-control testScore SAT" id="SATmath"
                                               name="SATmath" placeholder="Math"/>
                                    </div>
                                    <div class="col">
                                        <label class="score-label" for="SATCriticalThinking"></label>
                                        <input type="text" class="form-control testScore SAT" id="SATCriticalThinking"
                                               name="SATCriticalThinking " placeholder="Critical Thinking"/>
                                    </div>
                                    <div class="col">
                                        <label class="score-label" for="SATwriting"></label>
                                        <input type="text" class="form-control testScore SAT" id="SATwriting"
                                               name="SATwriting" placeholder="Writing"/>
                                    </div>
                                    <div class="col">
                                        <label class="score-label" for="SATcomposite"></label>
                                        <input type="text" class="form-control testScore SAT" id="SATcomposite"
                                               name="SATcomposite" placeholder="Composite"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="m-3">
                            <h5>Have you taken the KYOTE test? <i class="bi bi-asterisk required"></i></h5>
                            <div class="form-check">
                                <label for="KYOTEyes" class="form-check-label">Yes</label>
                                <input type="radio" class="form-check-input" id="KYOTEyes" name="KYOTE" value="1">
                            </div>
                            <div class="form-check">
                                <label for="KYOTEno" class="form-check-label">No</label>
                                <input type="radio" class="form-check-input" id="KYOTEno" name="KYOTE" value="0"
                                       checked>
                            </div>
                        </div>

                        <div class="m-3" id="KYOTEscore">
                            <div id="KYOTEScoresContainer" class="hide">
                                <h5>Select Area and enter score</h5>
                                <div class="input-group mb-3">
                                    <select id="KYOTEarea" name="KYOTEarea">
                                        <option value="">Select a KYOTE area</option>
                                        <option value="reading">reading</option>
                                        <option value="writting">writting</option>
                                        <option value="math">math</option>
                                    </select>
                                    <input type="text" class="form-control testScore" id="KYOTEscore" name="KYOTEscore"
                                           placeholder="Area Score"/>
                                </div>
                            </div>
                        </div>

                        <div class="m-3">
                            <h5 for="">If You haven't taken the ACT, SAT or KYOTE, but have taken another
                                assesment..
                            </h5>
                            <input type="text" class="form-control" id="otherAssesments" name="otherAssesments"
                                   placeholder="Other Assessments and scores">
                        </div>

                        <div class="m-3">
                            <h5>Did you participate in Skills USA?</h5>
                            <div class="form-check">
                                <label for="skillsUSAyes" class="form-check-label">Yes</label>
                                <input type="radio" class="form-check-input" id="skillsUSAyes" name="skillsUSA"
                                       value="1">
                            </div>

                            <div class="form-check">
                                <label for="SkillsUSAno" class="form-check-label">No</label>
                                <input type="radio" class="form-check-input" id="skillsUSAno" name="skillsUSA" value="0"
                                       checked>
                            </div>
                        </div>

                        <div class="m-3">
                            <h5>Did you participate in project lead the way?</h5>
                            <div class="form-check">
                                <label for="projectLeadTheWayYes" class="form-check-label">Yes</label>
                                <input type="radio" class="form-check-input" id="projectLeadTheWayYes"
                                       name="projectLeadTheWay" value="1">
                            </div>

                            <div class="form-check">
                                <label for="projectLeadTheWayNo" class="form-check-label">No</label>
                                <input type="radio" class="form-check-input" id="projectLeadTheWayNo"
                                       name="projectLeadTheWay" value="0" checked>
                            </div>
                        </div>

                        <div class="m-3">
                            <label for="manufacturingAcedemics">Have you completed any Manufacturing
                                Acedemics?</label>
                            <input type="text" class="form-control" id="manufacturingAcedemics"
                                   name="manufacturingAcedemics" placeholder="List Manufacturing Acedemics">
                        </div>

                        <div class="m-3">
                            <label for="awardsAndHonors">Awards and Honors</label>
                            <input type="text" class="form-control" id="awardsAndHonors" name="awardsAndHonors"
                                   placeholder="">
                        </div>

                        <div class="m-3">
                            <label for="highSchoolAttended">Name of highschool attended? <i
                                    class="bi bi-asterisk required"></i></label>
                            <input type="text" class="form-control required-input" id="highSchoolAttended"
                                   name="highSchoolAttended" placeholder="">
                        </div>

                        <div class="m-3">
                            <label for="GPA">Highschool GPA <i class="bi bi-asterisk required"></i></label>
                            <input type="text" class="form-control required-input" id="GPA" name="GPA" placeholder="">
                        </div>

                        <div class="m-3">
                            <label for="highSchoolActivities">List any highschool Activites</label>
                            <input type="text" class="form-control" id="highSchoolActivities"
                                   name="highSchoolActivities" placeholder="">
                        </div>

                        <div class="m-3">
                            <label for="technicalPrograms">List any other technical programs attended</label>
                            <input type="text" class="form-control" id="technicalPrograms" name="technicalPrograms"
                                   placeholder="">
                        </div>

                        <div class="m-3">
                            <label for="additionalComments">Additional Comments</label>
                            <input type="text" class="form-control" id="additionalComments" name="additionalComments"
                                   placeholder="">
                        </div>

                        <div class="form-nav m-3">
                            <button type="submit" id="assesmentBtn" class=" btn btn-info float-right"
                                    data-section="4">Next
                            </button>
                        </div>

                    </form>
                </div>

                <!-- Essay -->
                <!-- FORM ROW 1 -->
                <div class="form-section toggle" id="section5" style="display:none" ;>
                    <h2> Essay </h2>
                    <form class="contact-form">
                        <input type="hidden" id="essayToken" name="_token" value="{{ Session::token() }}">
                        <div id="essay-required">
                            <label for="essay" class="form-label essay-label">Personal Essay <i
                                    class="bi bi-asterisk required"></i></label>

                            <textarea class="form-control essay-input" id="essay" rows="3" name=""></textarea>

                              
                            <div class="form-nav">
                                <button type="" id="essayBtn" class="nextBtn btn btn-info float-right"
                                        data-section="5">Next
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Transcripts -->
                <!-- FORM ROW 1 -->
                <div class="form-section toggle" id="section6" style="display:none" ;>
                    <h2> Transcripts</h2>
                    <form class="contact-form" method="post" action="{{ route('form.formTranscript') }}">
                        <input type="hidden" id="transcriptToken" name="_token" value="{{ Session::token() }}">
                        <p> Select a method for submiting your transcripts. <i>Transcripts must be submited within
                                14
                                days of completeing the application</i></p>

                        <div class="transctiptMethod">
                            <label class="transcriptLabel"></label>
                            <div class="p-3">
                                <div class="form-check">
                                    <label class="form-check-label" for="uploadTranscripts">Upload transcripts
                                        directly</label>
                                    <input class="form-check-input transcript" type="radio" id="uploadTranscripts"
                                           name="transcriptMethod" value="uploadTranscripts">
                                </div>

                                <div class="" id="transciptUpload">
                                    <div class="input-group m-3">
                                        <input type="file" id="transcriptFile" class="form-control" placeholder=""
                                               name="transcript"/>
                                    </div>
                                </div>

                            </div>

                            <div class="p-3">
                                <div class="form-check">
                                    <label class="form-check-label" for="sendEmail">Send transctipts through
                                        Email</label>
                                    <input class="form-check-input transcript" type="radio" id="sendEmail"
                                           name="transcriptMethod" value="SendEmail">
                                </div>
                            </div>

                            <div class="p-3">
                                <div class="form-check">
                                    <label class="form-check-label" for="sendLater">I will submit my transcripts within
                                        14 days of submiting my application </label>
                                    <input class="form-check-input transcript" type="radio" id="sendLater"
                                           name="transcriptMethod" value="SendLater">
                                </div>
                            </div>

                        </div>

                        <div class="form-nav">
                            <button type="submit" id="transcriptBtn" class="nextBtn btn btn-info float-right"
                                    data-section="6">Next
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Agreement and submit -->
                <!-- FORM ROW 1 -->
                <div class="form-section toggle termsCheck sectionContainer" id="section7" style="display:none" ;>
                    <h2>Terms and Complete</h2>
                    <form class="contact-form">
                        <input type="hidden" id="completeToken" name="_token" value="{{ Session::token() }}">

                        <div class="form-check">
                            <label for="term1" class="termLabel hide"> <i class="bi bi-asterisk required "></i></label>
                            <input class="form-check-input termCheck" type="checkbox" value="" id="term1">
                            <label class="form-check-label termLabel d-inline" for="term1">
                                I have uploaded or email my transcript documents.
                            </label>
                        </div>

                        <div class="form-check">
                            <label for="term2" class="termLabel form-check-label hide"><i
                                    class="bi bi-asterisk required "></i></label>
                            <input class="form-check-input termCheck" type="checkbox" value="" id="term2">
                            <label class="form-check-label termLabel d-inline" for="term2">
                                To be considered for the program, I must work at the company which selects me
                                through
                                the interview and draft process.
                                You understand you do not get to choose your sponsoring companies.
                            </label>
                        </div>

                        <div class="form-check">
                            <label for="term3" class="termLabel hide"><i class="bi bi-asterisk required "></i></label>
                            <input class="form-check-input termCheck" type="checkbox" value="" id="term3">
                            <label class="form-check-label termLabel d-inline" for="term3">
                                To be considered at a sponsoring company, you will need to give your permission to
                                share
                                the information in your
                                application as well as any other documents or media that you submit with sponsoring
                                companies. You understand that by
                                submitting your application and supporting items, you are waiving your rights of
                                nondisclosure of these records under
                                federal law to KY Fame, Greater Louisville Chapter, and company sponsors. This
                                release
                                does not permit the disclosure of
                                these records to any other persons or entities without your written consent.
                            </label>
                        </div>

                        <div class="form-check">
                            <label for="term4" class="termLabel hide"><i class="bi bi-asterisk required "></i></label>
                            <input class="form-check-input termCheck" type="checkbox" value="" id="term4">
                            <label class="form-check-label termLabel d-inline" for="term4">
                                Participating in KY Fame, you recognize additional commitments outside of work or
                                school
                                may be required where you will
                                be acting as a program ambassador or contributing to community service projects.
                            </label>
                        </div>

                        <button id="finishBtn" class="finish btn btn-success" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group list-group-flush nav nav-tabs flex-column" id="appNav" role="tablist">
                        <li class="list-group-item nav-item disabled" id="sectionNav1">
                            <a href="#section1">Contact Info</a><label class="hide" id="sectionCheck1"><i
                                    class="bi bi-check2 check"></i></label>
                        </li>

                        <li class="list-group-item nav-item nav-item disabled" id="sectionNav2">
                            <a href="#section2">Legal Status</a><label class="hide" id="sectionCheck2"><i
                                    class="bi bi-check2 check"></i></label>
                        </li>

                        <li class="list-group-item nav-item nav-item disabled" id="sectionNav3">
                            <a href="#section3">Employment History</a><label class="hide" id="sectionCheck3"><i
                                    class="bi bi-check2 check"></i></label>
                        </li>

                        <li class="list-group-item nav-item nav-item disabled" id="sectionNav4">
                            <a href="#section4">Assessments</a><label class="hide" id="sectionCheck4"><i
                                    class="bi bi-check2 check"></i></label>
                        </li>

                        <li class="list-group-item nav-item nav-item disabled" id="sectionNav5">
                            <a href="#section5">Essay</a><label class="hide" id="sectionCheck5"><i
                                    class="bi bi-check2 check"></i></label>
                        </li>

                        <li class="list-group-item nav-item nav-item disabled" id="sectionNav6">
                            <a href="#section6">Transcripts</a><label class="hide" id="sectionCheck6"><i
                                    class="bi bi-check2 check"></i></label>
                        </li>

                        <li class="list-group-item nav-item nav-item disabled" id="sectionNav7">
                            <a href="#section7">Finish</a><label class="hide" id="sectionCheck7"><i
                                    class="bi bi-check2 check"></i></label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div id="employerTemplate" style="display: none;">
        <input type="hidden" id="employmentToken" name="_token" value="{{ Session::token() }}">

        <div class="employer">
            <div class="row g-3 mt-3">
                <div class="col">
                    <label class="form-label" for="employerName">Employer Name</label>
                    <input class="section-data form-control  employerName" type="text" name="employerName"/>
                </div>

                <div class="col">
                    <label class="form-label" for="employerPhone">Employer Phone</label>
                    <input class="section-data form-control  employerPhone" type="text" name="employerPhone"/>
                </div>
            </div>

            <label class="form-label" for="workDuties">Duties performed</label>
            <input class="section-data form-control workDuties" type="text" name="workDuties"/>

            <div class="row g-3 mt-3">
                <div class="col-5">
                    <label class="form-label" for="employmentStart">Employment start date</label>
                    <input type="date" class=" employmentStart" name="employmentStart"/>
                </div>
                <div class="col-5">
                    <label class="form-label" for="employmentEnd">Employment end date</label>
                    <input type="date" class=" employmentEnd" name="employmentEnd"/>
                </div>
            </div>

            <div class="mt-3">
                <label class="form-label" for="reasonForLeaving">Reason for leaving</label>
                <input class="section-data form-control  reasonForLeaving" type="text" name="reasonForLeaving"/>
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
        var completeRouteUrl = "{{ route('form.complete') }}";
        var dashBoardRouteUrl = "{{ route('dashboard') }}";

    </script>


    <script>
        var application = $.parseJSON('@json($application)');

    </script>

    <script src="{{ asset('js/application.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-maskedinput.js') }}" type="text/javascript"></script>


</x-app-layout>

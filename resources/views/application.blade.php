<x-app-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

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
                    <p>
                        The application is divided into six sections sections, each section must be completed before moving on.
                        Once a section has been completed you will be able to go back to it at any time to make corrections or changes.
                    </p>

                    <p> In order to be considered for the FAME program, you will be expected to submit your highschool
                        transcripts within 14 days of completeing your application. </p>

                    <p>
                        During the Application, you will be required to submit a written essay explaining your
                        qualifications for the program as well as why you would like to join.
                    </p>

                    <p>
                        Please enter the phone number where you can be reached and make sure your prefered contact method
                        is a way we can contact you in response to your application.
                    </p>

                    <div>
                        @if ($application->start_date === null)
                        <button type="button" class="btn btn-pink fw-bolder" id="startBtn">Start Application
                        </button>
                        @elseif ($application->start_date !== null && $application->completed_date === null)
                        <button type="button" class=" btn btn-navy" id="startBtn">Continue Application</button>
                        @else
                        <button type="button" class="btn btn-pink " id="startBtn">Edit/Update Application</button>
                        @endif
                    </div>


                </div>

                <!-- Status INFORMATION FORM -->
                <!-- FORM ROW 1 -->
                <div class="form-section toggle" id="section1" style="display:none;">
                    <h2 class="blue border-bottom mb-4">Legal status </h2>
                    <form class="Contact-form" method="POST" action="{{ route('form.formStatus') }}">
                        <input type="hidden" id="statusToken" name="_token" value="{{ Session::token() }}">

                        <h5>Will you be 18 before June 1? <i class="bi bi-asterisk required"></i></h5>
                        <div id="over18" class="m-3">
                            <div class="form-check">
                                <label class="form-check-label" for="over18">Yes</label>
                                <input type="radio" class="section-data form-check-input" id="over18" name="under_18" value="1" checked>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="under18">No</label>
                                <input type="radio" class="section-data form-check-input" id="under18" name="under_18" value="0">
                            </div>
                        </div>

                        <h5>Are you authorized to work in the US? <i class="bi bi-asterisk required"></i></h5>
                        <div class="m-3" id="authorizedInUs">
                            <div class="form-check">
                                <label class="form-check-label" for="authorizedInUsYes">Yes</label>
                                <input id="authorizedInUsYes" class="section-data form-check-input" type="radio" name="authorizedInUS" value="1" required checked />
                            </div>

                            <div class="form-check">
                                <label class="form-check-label" for="authorizedInUsNo">No</label>
                                <input id="authorizedInUsNo" class="section-data form-check-input" type="radio" name="authorizedInUS" value="0" required />
                            </div>
                        </div>

                        <h5>What is your highest level of Education? <i class="bi bi-asterisk required"></i></h5>
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


                        <h5>Do you have an relatives working for sponsoring companies? <i class="bi bi-asterisk required"></i></h5>
                        <div class="m-3 " id="relativesAtSponsors">
                            <div class="form-check">
                                <label class="form-check-label" for="relativesYes">Yes</label>
                                <input type="radio" class="section-data form-check-input" id="relativesYes" name="relativeSponsors" value="1">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="relativesNo">No</label>
                                <input type="radio" class="section-data form-check-input" id="relativesNo" name="relativeSponsors" value="0" checked>
                            </div>
                        </div>

                        <div class="m-3 hide status-required" id="relativeSponsorInput">
                            <label for="relativeSponsorNames" class="form-label status-label">
                                If you answered yes to the previous question please enter that sponor name here.<i class="bi bi-asterisk required"></i> </label>
                            <input id="relativeSponsorNames" class="form-control" type="text" name="" autofocus />
                        </div>


                        <h5>Do you work for a sponsoring company? <i class="bi bi-asterisk required"></i></h5>
                        <div class="m-3" id="employedWithSponsor">
                            <div class="form-check">
                                <label class="form-check-label" for="workForSponsorYes">Yes</label>
                                <input type="radio" class="section-data form-check-input" id="workForSponsorYes" name="workForSponsor" value="1">
                            </div>

                            <div class="form-check">
                                <label class="form-check-label" for="workForSponsorNo">No</label>
                                <input type="radio" class="section-data form-check-input" id="workForSponsorNo" name="workForSponsor" value="0" checked>
                            </div>
                        </div>

                        <div class="m-3 hide status-required" id="employedSponsorInput">
                            <label for="employedSponsorNames" class="form-label status-label">If you answered yes to
                                the
                                previous question please enter that sponor name here.<i class="bi bi-asterisk required"></i> </label>
                            <input id="employedSponsorNames" class="form-control" type="text" name="" autofocus />
                        </div>

                        <div class="form-nav m-3">
                            <button type="submit" id="statusBtn" class="nextBtn btn btn-pink float-right" data-section="1">Next
                            </button>
                        </div>
                    </form>
                </div>


                <!-- Work INFORMATION FORM -->
                <!-- <h2>Work History</h2> -->
                <!-- FORM ROW 1 -->
                <div class="form-section toggle" style="display:none;" id="section2">
                    <h2 class="blue border-bottom mb-4">Employment History</h2>

                    <div id="employmentContainer">


                    </div>

                    <div class="col-md-2 mb-3 mt-4" id="addButton">
                        <button class="btn btn-navy" type="button" style="width:140px;" id="addField">Add Employer
                        </button>
                    </div>

                    <div class="form-nav">
                        <button type="submit" id="employmentBtn" class="btn btn-pink float-right" data-section="2">Next
                        </button>
                    </div>
                </div>

                <!-- Assesments INFORMATION FORM -->
                <!-- <h2>Assesment Information</h2> -->
                <!-- FORM ROW 1 -->
                <div class="form-section toggle" id="section3" style="display: none">
                    <h2 class="blue border-bottom mb-4"> Assessments</h2>

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
                                <h5>ACT Scores <i>(required)</i></h5>
                                <div id="ACTScores" class="row score-required" style="display: inline-flex;">
                                    <div class="col">
                                        <label class="score-label" for="ACTenglishScore"></label>
                                        <input type="text" class="form-control ACT testScore" id="ACTenglishScore" name="ACTenglishScore" placeholder="English" />
                                    </div>
                                    <div class="col">
                                        <label class="score-label" for="ACTreadingScore"></label>
                                        <input type="text" class="form-control testScore ACT" id="ACTreadingScore" name="ACTreadingScore" placeholder="Reading" />
                                    </div>
                                    <div class="col">
                                        <label class="score-label" for="ACTmathScore"></label>
                                        <input type="text" class="form-control testScore ACT" id="ACTmathScore" name="ACTmathScore" placeholder="Math" />
                                    </div>
                                    <div class="col">
                                        <label class="score-label" for="ACTscienceScore"></label>
                                        <input type="text" class="form-control testScore ACT" id="ACTscienceScore" name="ACTscienceScore" placeholder="Science" />
                                    </div>
                                    <div class="col">
                                        <label class="score-label" for="ACTcompositeScore"></label>
                                        <input type="text" class="form-control testScore ACT" id="ACTcompositeScore" name="ACTcompositeScore" placeholder="Composite" />
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
                                <h5>SAT Scores <i>(required)</i></h5>
                                <div class="row score-required" id="SATScores" style="display: inline-flex;">
                                    <div class="col">
                                        <label class="score-label" for="SATmath"></label>
                                        <input type="text" class="form-control testScore SAT" id="SATmath" name="SATmath" placeholder="Math" />
                                    </div>
                                    <div class="col">
                                        <label class="score-label" for="SATCriticalThinking"></label>
                                        <input type="text" class="form-control testScore SAT" id="SATCriticalThinking" name="SATCriticalThinking " placeholder="Critical Thinking" />
                                    </div>
                                    <div class="col">
                                        <label class="score-label" for="SATwriting"></label>
                                        <input type="text" class="form-control testScore SAT" id="SATwriting" name="SATwriting" placeholder="Writing" />
                                    </div>
                                    <div class="col">
                                        <label class="score-label" for="SATcomposite"></label>
                                        <input type="text" class="form-control testScore SAT" id="SATcomposite" name="SATcomposite" placeholder="Composite" />
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
                                <input type="radio" class="form-check-input" id="KYOTEno" name="KYOTE" value="0" checked>
                            </div>
                        </div>

                        <div class="m-3" id="KYOTEscore">
                            <div id="KYOTEScoresContainer" class="hide">
                                <h5> <label for="KYOTEarea">Select Area and enter score</label></h5>
                                <div class="input-group mb-3">
                                    <select id="KYOTEarea1" name="KYOTEarea">
                                        <option value="">Select a KYOTE area</option>
                                        <option value="reading">reading</option>
                                        <option value="writting">writting</option>
                                        <option value="math">math</option>
                                    </select>
                                    <label for="KYOTEscore"></label>
                                    <input type="text" class="form-control KYOTE testScore" id="KYOTEscore1" name="KYOTEscore" placeholder="Area Score" />
                                </div>

                                <h5> <label for="KYOTEarea">Select Area and enter score</label></h5>
                                <div class="input-group mb-3">
                                    <select id="KYOTEarea2" name="KYOTEarea">
                                        <option value="">Select a KYOTE area</option>
                                        <option value="reading">reading</option>
                                        <option value="writting">writting</option>
                                        <option value="math">math</option>
                                    </select>
                                    <label for="KYOTEscore"></label>
                                    <input type="text" class="form-control KYOTE testScore" id="KYOTEscore2" name="KYOTEscore" placeholder="Area Score" />

                                </div>



                                <h5> <label for="KYOTEarea">Select Area and enter score</label></h5>
                                <div class="input-group mb-3">
                                    <select id="KYOTEarea3" name="KYOTEarea">
                                        <option value="">Select a KYOTE area</option>
                                        <option value="reading">reading</option>
                                        <option value="writting">writting</option>
                                        <option value="math">math</option>
                                    </select>
                                    <label for="KYOTEscore"></label>
                                    <input type="text" class="form-control KYOTE testScore" id="KYOTEscore3" name="KYOTEscore" placeholder="Area Score" />

                                </div>

                            </div>

                            <div class="m-3">
                                <h5><label for="otherAssesments">
                                        If You haven't taken the ACT, SAT or KYOTE, but have taken another assesment..
                                    </label> </h5>
                                <input type="text" class="form-control" id="otherAssesments" name="otherAssesments" placeholder="Other Assessments and scores">
                            </div>

                            <div class="m-3">
                                <h5>Did you participate in Skills USA?</h5>
                                <div class="form-check">
                                    <label for="skillsUSAyes" class="form-check-label">Yes</label>
                                    <input type="radio" class="form-check-input" id="skillsUSAyes" name="skillsUSA" value="1">
                                </div>

                                <div class="form-check">
                                    <label for="skillsUSAno" class="form-check-label">No</label>
                                    <input type="radio" class="form-check-input" id="skillsUSAno" name="skillsUSA" value="0" checked>
                                </div>
                            </div>

                            <div class="m-3">
                                <h5>Did you participate in project lead the way?</h5>
                                <div class="form-check">
                                    <label for="projectLeadTheWayYes" class="form-check-label">Yes</label>
                                    <input type="radio" class="form-check-input" id="projectLeadTheWayYes" name="projectLeadTheWay" value="1">
                                </div>

                                <div class="form-check">
                                    <label for="projectLeadTheWayNo" class="form-check-label">No</label>
                                    <input type="radio" class="form-check-input" id="projectLeadTheWayNo" name="projectLeadTheWay" value="0" checked>
                                </div>
                            </div>

                            <div class="m-3">
                                <label for="manufacturingAcedemics">Have you completed any Manufacturing
                                    Acedemics?</label>
                                <input type="text" class="form-control" id="manufacturingAcedemics" name="manufacturingAcedemics" placeholder="List Manufacturing Acedemics">
                            </div>

                            <div class="m-3">
                                <label for="awardsAndHonors">Awards and Honors</label>
                                <input type="text" class="form-control" id="awardsAndHonors" name="awardsAndHonors" placeholder="">
                            </div>

                            <div class="m-3">
                                <label for="highSchoolAttended">Name of highschool attended? <i class="bi bi-asterisk required"></i></label>
                                <input type="text" class="form-control required-input" id="highSchoolAttended" name="highSchoolAttended" placeholder="">
                            </div>

                            <div class="m-3">
                                <label for="GPA">Highschool GPA <i class="bi bi-asterisk required"></i></label>
                                <input type="text" class="form-control required-input" id="GPA" name="GPA" placeholder="">
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
                                <button type="submit" id="assesmentBtn" class=" btn btn-pink float-right" data-section="3">Next
                                </button>
                            </div>

                        </div>
                    </form>
                </div>

                <!-- Essay -->
                <!-- FORM ROW 1 -->
                <div class="form-section toggle" id="section4" style="display:none">
                    <h2 class="blue border-bottom mb-4"> Essay </h2>
                    <form class="contact-form">
                        <input type="hidden" id="essayToken" name="_token" value="{{ Session::token() }}">
                        <div id="essay-required">
                            <label for="essay" class="form-label essay-label">Personal Essay <i class="bi bi-asterisk required"></i></label>

                            <textarea class="form-control essay-input" id="essay" rows="3" name=""></textarea>


                            <div class="form-nav">
                                <button id="essayBtn" class="nextBtn btn btn-pink float-right" data-section="4">Next
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Agreement and submit -->
                <!-- FORM ROW 1 -->
                <div class="form-section toggle termsCheck sectionContainer" id="section5" style="display:none">
                    <h2 class="blue border-bottom mb-4">Terms and Complete</h2>
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
                            <label for="term2" class="termLabel form-check-label hide"><i class="bi bi-asterisk required "></i></label>
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

                        <button id="finishBtn" class="finish btn btn-pink" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group list-group-flush nav nav-tabs flex-column" id="appNav" role="tablist">
                        <li class="list-group-item nav-item nav-item disabled" id="sectionNav1">
                            <a href="#section1">Legal Status</a><label class="hide" id="sectionCheck1"><i class="bi bi-check2 check"></i></label>
                        </li>
                        <li class="list-group-item nav-item nav-item disabled" id="sectionNav2">
                            <a href="#section2">Employment History</a><label class="hide" id="sectionCheck2"><i class="bi bi-check2 check"></i></label>
                        </li>
                        <li class="list-group-item nav-item nav-item disabled" id="sectionNav3">
                            <a href="#section3">Assessments</a><label class="hide" id="sectionCheck3"><i class="bi bi-check2 check"></i></label>
                        </li>
                        <li class="list-group-item nav-item nav-item disabled" id="sectionNav4">
                            <a href="#section4">Essay</a><label class="hide" id="sectionCheck4"><i class="bi bi-check2 check"></i></label>
                        </li>
                        <li class="list-group-item nav-item nav-item disabled" id="sectionNav5">
                            <a href="#section5">Finish</a><label class="hide" id="sectionCheck5"><i class="bi bi-check2 check"></i></label>
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
                    <input class="section-data form-control employerName" id="employerName" type="text" name="employerName" />
                </div>

                <div class="col">
                    <label class="form-label" for="employerPhone">Employer Phone</label>
                    <input class="section-data form-control employerPhone phone" id="employerPhone" type="text" name="employerPhone" />
                </div>
            </div>

            <label class="form-label" for="workDuties">Duties performed</label>
            <input class="section-data form-control workDuties" id="workDuties" type="text" name="workDuties" />

            <div class="row g-3 mt-3">
                <div class="col-5">
                    <label class="form-label" for="employmentStart">Employment start date</label>
                    <input type="date" class=" employmentStart" id="employmentStart" name="employmentStart" />
                </div>
                <div class="col-5">
                    <label class="form-label" for="employmentEnd">Employment end date</label>
                    <input type="date" class=" employmentEnd" id="employmentEnd" name="employmentEnd" />
                </div>
            </div>

            <div class="mt-3">
                <label class="form-label" for="reasonForLeaving">Reason for leaving</label>
                <input class="section-data form-control  reasonForLeaving" id="reasonForLeaving" type="text" name="reasonForLeaving" />
            </div>
        </div>
    </div>

    <script>
        const statusRouteUrl = "{{ route('form.formStatus') }}";
        const employmentRoutetUrl = "{{ route('form.formEmployment') }}";
        const assesmenRoutetUrl = "{{ route('form.formAssesments') }}";
        const essayRouteUrl = "{{ route('form.formEssay') }}";
        const completeRouteUrl = "{{ route('form.complete') }}";
        const dashBoardRouteUrl = "{{ route('dashboard') }}";

    </script>


    <script>
        const application = $.parseJSON('@json($application)');

    </script>

    <script src="{{ asset('js/application.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-maskedinput.js') }}" type="text/javascript"></script>

</x-app-layout>

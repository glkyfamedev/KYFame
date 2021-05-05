<x-admin-layout>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="my-3">
                    <a href="{{ URL('admin\manageApplications') }}" class="btn btn-navy btn-sm"><i class="bi bi-arrow-left-circle-fill text-white"></i> <b>Back to Applications</b> </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title navy">
                            <h3>{{ $application->user->first_name .' '. $application->user->last_name }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="card-text">
                                <p><span class="fw-bold navy">Primary Phone:</span> {{ $application->contactApp->primaryPhone }}.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-text">
                                <p><span class="fw-bold navy">Alternate Phone:</span> {{ $application->contactApp->altPhone }}.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-text">
                                <p><span class="fw-bold navy">Email: </span> {{ $application->user->email }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-text">
                                <p>
                                    <span class="fw-bold navy">Alternate Email:</span> {{ $application->contactApp->otherEmail }}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <p><span class="fw-bold navy">Contact Method: </span>{{ $application->contactApp->preferedContactMethod }}</p>
                        </div>
                        <div class="row p-1">
                            <address>
                                <span class="fw-bold navy"> {{ $application->contactApp->streetAddress }}</span><br>
                                <span class="fw-bold navy"> {{ $application->contactApp->city }} </span><br>
                                <span class="fw-bold navy"> {{ $application->contactApp->state }}</span><br>
                                <span class="fw-bold navy"> {{ $application->contactApp->zip }}</span>&nbsp;
                            </address>
                        </div>
                    </div>

                    <div class="card-footer text-muted">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('updateApplication', $application->id) }}">
                                    @csrf
                                    <input type="submit" class="btn btn-pink btn-sm" value="Mark Qualified" />
                                </form>
                            </div>
                            <div class="col">
                                @if ($application->transcript_method == "uploadTranscripts")
                                <a href="{{ URL::route('application.downloadTranscript', $application->id) }}" class="card-link"><i class="bi bi-download"></i> Transcript</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed top-btn" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Legal Status
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <ul class=" list-group-flush">
                                        <li class="list-group-item">
                                            <p><span class="fw-bold navy"> 18 before June 1:</span> {{ $application->statusApp->under_18 }}</p>
                                        </li>
                                        <li class="list-group-item">
                                            <p><span class="fw-bold navy">authorized to work in the US?: </span>
                                                {{ $application->statusApp->authorizedInUs }}
                                            </p>
                                        </li>
                                        <li class="list-group-item">
                                            <p><span class="fw-bold navy">Level of education: </span> {{ $application->statusApp->levelOfEducation }}
                                            </p>
                                        </li>
                                        <li class="list-group-item">
                                            <p><span class="fw-bold navy"> Employed by a Sponsor: </span> {{ $application->statusApp->relativeSponsor }}
                                            </p>
                                        </li>
                                        <li class="list-group-item">
                                            <p><span class="fw-bold navy">Sponsor Name: </span> {{ $application->statusApp->relative_sponsor_names }}
                                            </p>
                                        </li>
                                        <li class="list-group-item">
                                            <p><span class="fw-bold navy"> Related to a Sponsor: </span>{{ $application->statusApp->workForSponosor }}
                                            </p>
                                        </li>
                                        <li class="list-group-item">
                                            <p><span class="fw-bold navy">Sponsor Name: </span> {{ $application->statusApp->employed_sponsor_names }}
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed top-btn"" type=" button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Employment History
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                @foreach($application->employmentApp as $employment)
                                <div class="row">
                                    <ul class=" list-group-flush">
                                        <li class="list-group-item">
                                            <p><span class="fw-bold navy">Employer Name: </span>{{ $employment->employerName }}
                                            </p>
                                        </li>
                                        <li class="list-group-item">
                                            <p>
                                                <span class="fw-bold navy">
                                                    Employer Phone: </span>
                                                {{ $employment->employerPhone }}
                                            </p>
                                        </li>
                                        <li class="list-group-item">
                                            <p> <span class="fw-bold navy">Job Functions: </span>{{ $employment->jobDuties }}
                                            </p>
                                        </li>
                                        <li class="list-group-item">
                                            <p> <span class="fw-bold navy">Employment Start date: </span>
                                                {{ $employment->employmentStart }}
                                            </p>
                                        </li>
                                        <li class="list-group-item">
                                            <p> <span class="fw-bold navy">Employment End date:</span>
                                                {{ $employment->employmentEnd }}
                                            </p>
                                        </li>
                                        <li class="list-group-item">
                                            <p> <span class="fw-bold navy">Reason for Leaving: </span>
                                                {{ $employment->reasonForLeaving }}
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button top-btn" collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Assesments
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="nested accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    ACT
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <li class="list-group-item">
                                                        <ul class="list-group-flush">
                                                            <li class="list-group-item">
                                                                <p><span class="fw-bold navy">English: </span>{{ $application->assesmentApp->ACTenglishScore }}
                                                                </p>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <p><span class="fw-bold navy">Reading: </span>{{ $application->assesmentApp->ACTreadingScore }}
                                                                </p>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <p><span class="fw-bold navy">Math: </span>{{ $application->assesmentApp->ACTmathScore }}</p>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <p><span class="fw-bold navy">Science: </span>{{ $application->assesmentApp->ACTscienceScore }}
                                                                </p>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <p><span class="fw-bold navy">Composite: </span>
                                                                    {{ $application->assesmentApp->ACTcompositeScore }} </p>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="nested accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    SAT
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <li class="list-group-item">
                                                        <ul class="list-group-flush">
                                                            <li class="list-group-item">
                                                                <p><span class="fw-bold navy">Math: </span>{{ $application->assesmentApp->SATmath }} </p>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <p><span class="fw-bold navy">Critical Thinking:</span>
                                                                    {{ $application->assesmentApp->SATCriticalThinking }} </p>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <p><span class="fw-bold navy">Writing: </span>{{ $application->assesmentApp->SATwriting }} </p>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <p><span class="fw-bold navy">Composite: </span>{{ $application->assesmentApp->SATcomposite }}
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="nested accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    KYOTE
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <li class="list-group-item">
                                                        <ul class="list-group-flush">
                                                            <li class="list-group-item">
                                                                <p><span class="fw-bold navy">Subject: </span>{{ $application->assesmentApp->KYOTEarea1 }} </p>

                                                                <p><span class="fw-bold navy">Score: </span>{{ $application->assesmentApp->KYOTEscore1 }}</p>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <p><span class="fw-bold navy">Subject: </span>{{ $application->assesmentApp->KYOTEarea2 }}</p>
                                                                <p><span class="fw-bold navy">Score: </span>{{ $application->assesmentApp->KYOTEscore2 }}</p>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <p><span class="fw-bold navy">Subject: </span>{{ $application->assesmentApp->KYOTEarea3 }} </p>

                                                                <p><span class="fw-bold navy">Score: </span>{{ $application->assesmentApp->KYOTEscore3 }}</p>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-group-flush">
                                            <li class="list-group-item">
                                                <p><span class="fw-bold navy">Other Assesments: </span>{{ $application->assesmentApp->otherAssesments }}
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <p><span class="fw-bold navy">Skills USA: </span>{{ $application->assesmentApp->skillsUSA }}</p>
                                            </li>

                                            <li class="list-group-item">
                                                <p><span class="fw-bold navy">Project Lead the Way:</span>
                                                    {{ $application->assesmentApp->projectLeadTheWay }}</p>
                                            </li>
                                            <li class="list-group-item">
                                                <p><span class="fw-bold navy">Manufacturing Acedemics: </span>
                                                    {{ $application->assesmentApp->manufacturingAcedemics }}</p>
                                            </li>
                                            <li class="list-group-item">
                                                <p><span class="fw-bold navy"> Awards And Honors: </span>{{ $application->assesmentApp->awardsAndHonors }}
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <p><span class="fw-bold navy">HighSchool Attended:</span>
                                                    {{ $application->assesmentApp->highSchoolAttended }}</p>
                                            </li>
                                            <li class="list-group-item">
                                                <p><span class="fw-bold navy">GPA: </span>
                                                    {{ $application->assesmentApp->GPA }}</p>
                                            </li>
                                            <li class="list-group-item">
                                                <p><span class="fw-bold navy">HighSchool Activities:</span>
                                                    {{ $application->assesmentApp->highSchoolActivities }}</p>
                                            </li>
                                            <li class="list-group-item">
                                                <p><span class="fw-bold navy">Technical Programs:</span>
                                                    {{ $application->assesmentApp->technicalPrograms }}</p>
                                            </li>
                                            <li class="list-group-item">
                                                <p><span class="fw-bold navy">Additional Comments: </span>
                                                    {{ $application->assesmentApp->additionalComments }}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed top-btn" type=" button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Essay
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="">
                                        <p>{{ $application->essay }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-admin-layout>

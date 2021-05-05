<x-app-layout>

    <style>
        .hide {
            display: none;
        }

        .required {
            color: red;
            font-size: x-small;
        }

        .profileCol {
            margin-top: 25px;
        }

        .dashboardCol {
            margin-top: 25px;
        }

    </style>

    <div class="container p-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-4 overflow-hidden shadow-sm sm:rounded-lg bg-light-grey">

                <div class="row p-4">
                    <h3 class="pink">Welcome {{ Auth::user()->first_name }}, What do you need to do?</h3>
                </div>

                <div class="row">
                    <div class="col-lg-4 dashboardCol" id="profileDiv">
                        {{-- Profile Card  --}}
                        <div class="card p-3" style="height: 300px; border-radius:20px;">
                            <div class="">
                                <div class="card-title">
                                    <h4 class="blue fw-bold" style="text-align:center;">
                                        Contact Info
                                    </h4>
                                </div>

                            </div>
                            <div class="m-auto">
                                <i class="bi bi-person-lines-fill" style="font-size: 3em; margin-top:-20px;"></i>
                            </div>
                            <div class="m-auto">
                                <i class="bi bi-check2" style="color: green; font-size: 4em;"></i>
                            </div>
                            <div style="width:100%; text-align:center; margin-bottom:20px;">

                                <a id="contactBtn" class="btn btn-pink btn-block mx-auto" style="width:50%;" href="{{ URL::route('contact') }}">Update</a>

                            </div>
                        </div>
                    </div>

                    {{-- Transcript Card  --}}
                    <div class="col-lg-4 dashboardCol" id="profileDiv">
                        <div class="card p-3" style="height: 300px; border-radius:20px;">
                            <div class="">
                                <div class="card-title">
                                    <h4 class="blue fw-bold" style="text-align:center;">
                                        Submit Transcripts
                                    </h4>
                                </div>
                            </div>
                            <p class="m-auto"> Email or Upload your Transcripts
                            </p>
                            <div class="m-auto">
                                <i class="bi bi-file-earmark-arrow-up-fill" style="font-size: 3em; margin-top:-20px;"></i>
                            </div>
                            <div class="m-auto">
                                <i class="bi bi-check2" style="color: green; font-size: 4em;"></i>
                            </div>
                            <div style="width:100%; text-align:center; margin-bottom:20px;">
                                <a id="submitTranscript" class="btn btn-pink btn-block mx-auto" style="width:50%;" href="{{ URL::route('transcript') }}">Send</a>
                            </div>
                        </div>
                    </div>

                    {{-- Application Card  --}}
                    <div class="col-lg-4 dashboardCol" id="profileDiv">
                        <div class="card p-3" style="height: 300px; border-radius:20px;">
                            <div class="">
                                <div class="card-title">
                                    <h4 class="blue fw-bold" style="text-align:center;">
                                        Your Application
                                    </h4>
                                </div>

                            </div>
                            <p class="m-auto"> Continue to update your application
                            </p>
                            <div class="m-auto">
                                <i class="bi bi-card-checklist" style="font-size: 3em; margin-top:-20px;"></i>
                            </div>
                            <div class="m-auto">
                                <i class="bi bi-check2" style="color: green; font-size: 4em;"></i>
                            </div>
                            <div style="width:100%; text-align:center; margin-bottom:20px;">
                                <a id="goToApplication" class="btn btn-pink btn-block mx-auto" style="width:50%;" href="{{ URL::route('form') }}">Continue</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const updateProfileRouteUrl = "{{ route('dashboard.updateProfile')}}";
        const updateTranscriptRouteUrl = "{{ route('dashboard.updateTranscript') }}";

    </script>
    <script>
        const application = $.parseJSON('@json($application)');

    </script>

    <script src="{{ asset('js/jquery-maskedinput.js') }}" type="text/javascript"></script>
</x-app-layout>



{{-- <div class="card-body">  --}}
{{-- <ul class="list-group list-group-flush flex-column" id="" role="">
    <li class="list-group-item" id="sectionNav1">
        <p>Contact Info</p><label class="hide" id="sectionCheck1"><i class="bi bi-check2 check"></i></label>
    </li>

    <li class="list-group-item" id="sectionNav2">
        <p>Legal Status</p><label class="hide" id="sectionCheck2"><i class="bi bi-check2 check"></i></label>
    </li>

    <li class="list-group-item" id="sectionNav3">
        <p>Employment History</p><label class="hide" id="sectionCheck3"><i class="bi bi-check2 check"></i></label>
    </li>

    <li class="list-group-item" id="sectionNav4">
        <p>Assessments</p><label class="hide" id="sectionCheck4"><i class="bi bi-check2 check"></i></label>
    </li>

    <li class="list-group-item" id="sectionNav5">
        <p>Essay</p><label class="hide" id="sectionCheck5"><i class="bi bi-check2 check"></i></label>
    </li>

    <li class="list-group-item" id="sectionNav6">
        <p>Transcripts</p><label class="hide" id="sectionCheck6"><i class="bi bi-check2 check"></i></label>
    </li>

    <li class="list-group-item" id="sectionNav7">
        <p>Finish</p><label class="hide" id="sectionCheck7"><i class="bi bi-check2 check"></i></label>
    </li>
</ul>
<x-nav-link :href="route('form')" class="d-block btn btn-pink btn-sm" :active="request()->routeIs('form')">
    {{ __('Application') }}
</x-nav-link>
</div> --}}





{{-- <div class="col-lg dashboardCol" id="transcriptDiv">

    <div class="card">
        <div class="">
            <div class="card-title">
                <h4 class="blue fw-bold">Submit Transcripts</h4>
            </div>
        </div>
        <div class="card-body">

            <div class="hide" id="disabledMsg">
                <p> If you're not ready to submit your transcripts
                    during the application, you can come ack here after completing
                    it the application to upload them within 14 days of submission.
                </p>
            </div>

            {{-- <div class="hide" id="transciptUpload">
                <div class="input-group m-3">
                    <input type="file" id="transcriptFile" class="form-control" placeholder="" name="transcript" />
                </div>
                <div class="form-nav">
                    <button type="" id="updateTranscriptBtn" class="btn btn-pink float-right">upload</button>
                    <button id="cancelBtn" class="btn btn-yellow">Cancel</button>
                </div>
            </div> --}}

{{-- <div style="width:100%; text-align:center; margin-bottom:20px;">
                <a id="submitTranscript" class="btn btn-pink btn-block mx-auto" style="width:50%;" href="{{ URL::route('transcript') }}">Send</a>
</div>

<div id="transcriptsComplete" class="hide">
    <h5> We have your transcripts!</h5>
</div>
</div>
</div>
</div> --}}



{{-- <div id="showProfile" class="hide">
                                        <button id="profileBtn" class="btn btn-block btn-pink" href="#">Update profile</button>
                                    </div>

                                    {{--  <div id="viewProfile" class="">
                                        <div class="contact-form row g-3 " id="profileInfo">
                                            <div class="col-lg-8  profileCol">
                                                <label class="form-label contact-label" for="profileStreetAddress"> Street Address</label>
                                                <input id="updatestreetAddress" class="form-control hide  update" type="text" placeholder="" />
                                            </div>

                                            <div class="col  profileCol">
                                                <label class="form-label contact-label" for="profileAddress2">Apt or Suite </label>
                                                <input id="upadteaddress2" class="form-control hide update" type="text" name="address2" autofocus />
                                            </div>

                                            <div class="col-lg-4 profileCol">
                                                <label class="form-label contact-label" id="profileCity" for="city">City </label>
                                                <input id="updatecity" class="form-control  hide update" type="text" name="city" autofocus />
                                            </div>

                                            <div class="col-lg-3 profileCol">
                                                <label class="form-label contact-label" id="profileState" for="state">State </label>
                                                <input id="updatestate" class="form-control  hide update" type="text" name="state" autofocus />
                                            </div>

                                            <div class="col-lg-4 profileCol">
                                                <label class="form-label contact-label" id="profileZip" for="zip">Zip </label>
                                                <input id="updatezip" class="form-control  hide update" type="text" name="zip" autofocus />

                                            </div>

                                            <div class="col-lg-6 profileCol">
                                                <label class="form-label contact-label" id="profilePrimaryPhone" for="primaryPhone">Primary Phone </label>
                                                <input id="updateprimaryPhone" class="form-control phone hide update" type="text" name="primaryPhone" autofocus />
                                            </div>

                                            <div class="col profileCol">
                                                <label class="form-label contact-label" id="profileAltPhone" for="altPhone">Alt Phone</label>
                                                <input id="updatealtPhone" class="form-control phone hide update" type="text" name="altPhone" autofocus />
                                            </div>

                                            <div class="row profileCol">
                                                <div>
                                                    <select id="updatecontactMethod" class="form-control" name="contactMethod" placeholder="">
                                                        <option value="">Prefered Contact Method</option>
                                                        <option value="phone">Phone</option>
                                                        <option value="Account Email">Account Email</option>
                                                        <option value="Other Email">Other Email</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mt-1">
                                                <div id="updateOtherEmailDiv" class="hide">
                                                    <label for="updateOtherEmail"></label>
                                                    <input type="text" class="form-control" id="updateotherEmail" name="updateOtherEmail" placeholder="Contact Email" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div id="profileBtns" class="">
                                                <button type="" id="updateContact" class="nextBtn btn-pink btn float-right">Update Contact Info</button>
                                                <button id="cancelBtn" class="btn btn-yellow hide">Cancel</button>
                                            </div>


                                            <div id="updateBtns" class="hide">
                                                <button type="" id="updateContactBtn" class="nextBtn btn-pink btn float-right">Update</button>
                                                <button id="cancelBtn" class="btn btn-yellow">Cancel</button>
                                            </div>
                                        </div>
                                    </div>  --}}




{{-- <div class="hide" id="contactDiv">
                                        <form class="contact-form row g-3" id="contact-Section">
                                            <input type="hidden" id="token" name="_token" value="{{ Session::token() }}">

<div class="col-7 contact-required">
    <label class="form-label contact-label" for="streetAddress">Street address <i class="bi bi-asterisk required"></i></label>
    <input id="streetAddress" class="form-control contact-input" type="text" value="{{$application->streetAddress}}" name="streetAddress" autofocus />
</div>

<div class="col">
    <label class="form-label contact-label" for="address2">Apt or Suite </label>
    <input id="address2" class="form-control" type="text" name="address2" autofocus />
</div>

<div class="col-4 contact-required">
    <label class="form-label contact-label" for="city">City <i class="bi bi-asterisk required"></i></label>
</div>

<div class="col-3 contact-required">
    <label class="form-label contact-label" for="state">State <i class="bi bi-asterisk required"></i></label>
</div>

<div class="col-md-3 contact-required">
    <label class="form-label contact-label" for="zip">Zip <i class="bi bi-asterisk required"></i></label>
</div>

<div class="col contact-required">
    <label class="form-label contact-label" for="primaryPhone">Primary Phone <i class="bi bi-asterisk required"></i></label>
</div>
<div class="col">
    <label class="form-label contact-label" for="altPhone">Alt Phone</label>
</div>
<div class="form-nav">
    <button type="submit" id="contactBtn" class="nextBtn btn btn-info float-right" data-section="1">Update</button>
    <button id="cancelBtn" class="btn btn-yellow">Cancel</button>
</div>
</form>
</div> --}}

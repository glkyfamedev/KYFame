<x-app-layout>

<style>
.hide {
  display: none;
}
.required {
    color: red;
   font-size: x-small;
}
</style>

  <div class="container p-4">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row p-4">
                        <h3 class="pink">Welcome  {{ Auth::user()->first_name }}, What do you need to do?</h3>
                    </div>
                        <div class="row">
                            <div class="col" id="profileDiv">
                                <div class="card">
                                    <div class="card-header bg-light-grey">
                                        <div class="card-title">
                                            <h4 class="blue fw-bold">
                                              Contact Info
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="card-body">                                
                                        <div class="contact-form row g-3" id="profileInfo">
                                            <div class="col-8">
                                                <label class="form-label contact-label" for="streetAddress"> Street Address{{$application->streetAddress}}</label>
                                                <input id="streetAddress" class="form-control hide contact-input update" type="text" placeholder="{{$application->streetAddress}}"
                                                name="streetAddress" autofocus/>
                                            </div>

                                            <div class="col">
                                                <label class="form-label contact-label" for="address2">Apt or Suite </label>
                                                <input id="address2" class="form-control hide update" type="text" name="address2" autofocus />
                                            </div>

                                            <div class="col-4">
                                                <label class="form-label contact-label" for="city">City{{ $application->city }} </label>
                                           
                                                    <input id="city" class="form-control contact-input hide update" type="text" name="city" required
                                                    autofocus />
                                                 </div>

                                            <div class="col-3">
                                                <label class="form-label contact-label" for="state">State </label>
                                        
                                                    <input id="state" class="form-control contact-input hide update" type="text" name="state" required
                                                    autofocus />
                                                </div>

                                            <div class="col-4">
                                                <label class="form-label contact-label" for="zip">Zip </label>
                                          
                                                    <input id="zip" class="form-control contact-input hide update" type="text" name="zip" required
                                                    autofocus />
                                                </div>
                                           
                                            <div class="col-6">
                                                <label class="form-label contact-label" for="primaryPhone">Primary Phone </label>
                                          
                                                        <input id="primaryPhone" class="form-control contact-input phone hide update" type="text"
                                                                name="primaryPhone" required autofocus />
                                                    </div>

                                            <div class="col">
                                                <label class="form-label contact-label" for="altPhone">Alt Phone</label>
                                         
                                                       <input id="altPhone" class="form-control phone hide update" type="text" name="altPhone" autofocus />
                                                 </div>

                                            <a id="showContact" class="btn btn-sm btn-pink" href="#">Update Contact Info</a>
                                            <div id="updateBtns" class="hide">
                                                <button type="submit" id="contactBtn" class="nextBtn btn-pink btn float-right"
                                                data-section="1">Update</button>

                                                <button id="cancelBtn" class="btn btn-yellow ">Cancel</button>
                                            </div>
                                        </div>

                                        <div class="hide" id="contactDiv">
                                            <form class="contact-form row g-3" id="contact-Section">
                                                <input type="hidden" id="token" name="_token" value="{{ Session::token() }}">

                                                <div class="col-7 contact-required">
                                                    <label class="form-label contact-label" for="streetAddress">Street address <i
                                                            class="bi bi-asterisk required"></i></label>
                                                    <input id="streetAddress" class="form-control contact-input" type="text" value="{{$application->streetAddress}}"
                                                        name="streetAddress" autofocus />
                                                </div>

                                                <div class="col">
                                                    <label class="form-label contact-label" for="address2">Apt or Suite </label>
                                                    <input id="address2" class="form-control" type="text" name="address2" autofocus />
                                                </div>

                                                <div class="col-4 contact-required">
                                                    <label class="form-label contact-label" for="city">City <i
                                                            class="bi bi-asterisk required"></i></label>
                                                </div>

                                                <div class="col-3 contact-required">
                                                    <label class="form-label contact-label" for="state">State <i
                                                            class="bi bi-asterisk required"></i></label>
                                                </div>

                                                <div class="col-md-3 contact-required">
                                                    <label class="form-label contact-label" for="zip">Zip <i
                                                            class="bi bi-asterisk required"></i></label>
                                                </div>

                                                <div class="col contact-required">
                                                    <label class="form-label contact-label" for="primaryPhone">Primary Phone <i
                                                            class="bi bi-asterisk required"></i></label>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label contact-label" for="altPhone">Alt Phone</label>
                                                </div>
                                                <div class="form-nav">
                                                    <button type="submit" id="contactBtn" class="nextBtn btn btn-info float-right"
                                                        data-section="1">Update</button>
                                                    <button id="cancelBtn" class="btn btn-yellow">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                 
                                    </div>
                                </div>                        
                            </div>

                            <div class="col" id="applicationDiv">
                                 <div class="card">
                                    <div class="card-header bg-light-grey">
                                        <div class="card-title">
                                        <h4  class="blue fw-bold"> Completion status</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">                                        
                                            <ul class="list-group list-group-flush flex-column" id="" role="">
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
                                    </div>                                
                                </div>
                            </div>

                            <div class="col" id="transcriptDiv">
                                <div class="card">
                                    <div class="card-header bg-light-grey">
                                        <div class="card-title">
                                            <h4 class="blue fw-bold"> Submit Transcripts</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="" id="">
                                            <div class="" id="transciptUpload">
                                                <div class="input-group m-3">
                                                    <input type="file" id="transcriptFile" class="form-control" placeholder="" name="transcript" />
                                                </div>
                                                <div class="form-nav">
                                                    <button type="submit" id="transcriptBtn" class="btn btn-pink float-right"
                                                        data-section="1">upload</button>

                                                    <button id="cancelBtn" class="btn btn-yellow">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>





    <script>
        const contactRouteUrl = "{{ route('form.formSubmit') }}";
        const transcriptRouteUrl = "{{ route('form.formTranscript') }}";
        const application = $.parseJSON('@json($application)');
    </script>

  <script src="{{ asset('js/application.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-maskedinput.js') }}" type="text/javascript"></script>
</x-app-layout>

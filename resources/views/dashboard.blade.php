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
                    <h3>Welcome  {{ Auth::user()->first_name }}!</h3>
                        <div class="row">
                            <div class="col" id="contentDiv">
                                <div id="placeHolder">
                                <p>Content placeholder</p>        
                                </div>
                                    <div class="hide" id="contactDiv">
                                        <form class="contact-form row g-3" id="contact-Section">
                                            <input type="hidden" id="token" name="_token" value="{{ Session::token() }}">

                                            <div class="col-8 contact-required">          
                                                <label class="form-label contact-label" for="streetAddress">Street address <i
                                                        class="bi bi-asterisk required"></i></label>
                                                <input id="streetAddress" class="form-control contact-input" type="text" value="{{$application->streetAddress}}"
                                                    name="streetAddress" autofocus />
                                            </div>

                                            <div class="col">
                                                <label class="form-label contact-label" for="address2">Apt or Suite number </label>
                                                <input id="address2" class="form-control" type="text" name="address2" autofocus />
                                            </div>

                                            <div class="col-md-6 contact-required">
                                                <label class="form-label contact-label" for="city">City <i
                                                        class="bi bi-asterisk required"></i></label>
                                                <input id="city" class="form-control contact-input" type="text" name="city" required
                                                    autofocus />
                                            </div>

                                            <div class="col-md-4 contact-required">
                                                <label class="form-label contact-label" for="state">State <i
                                                        class="bi bi-asterisk required"></i></label>
                                                <input id="state" class="form-control contact-input" type="text" name="state" required
                                                    autofocus />
                                            </div>

                                            <div class="col-md-2 contact-required">
                                                <label class="form-label contact-label" for="zip">Zip <i
                                                        class="bi bi-asterisk required"></i></label>
                                                <input id="zip" class="form-control contact-input" type="text" name="zip" required
                                                    autofocus />
                                            </div>

                                            <div class="col contact-required">
                                                <label class="form-label contact-label" for="phone">Primary Phone <i
                                                        class="bi bi-asterisk required"></i></label>
                                                <input id="primaryPhone" class="form-control contact-input phone" type="text"
                                                    name="primaryPhone" required autofocus />
                                            </div>
                                            <div class="col">
                                                <label class="form-label contact-label" for="altPhone">Alt Phone</label>
                                                <input id="altPhone" class="form-control phone" type="text" name="altPhone" autofocus />
                                            </div>
                                            <div class="form-nav">
                                                <button type="submit" id="contactBtn" class="nextBtn btn btn-info float-right"
                                                    data-section="1">Update</button>

                                                <button id="cancelBtn" class="btn btn-yellow">Cancel</button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="hide" id="transcriptDiv">
                                        <div class="" id="transciptUpload">
                                            <div class="input-group m-3">
                                                <input type="file" id="transcriptFile" class="form-control" placeholder="" name="transcript" />
                                            </div>
                                              <div class="form-nav">
                                                <button type="submit" id="transcriptBtn" class="nextBtn btn btn-info float-right"
                                                    data-section="1">upload</button>

                                                <button id="cancelBtn" class="btn btn-yellow">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                            </div>                            

                            <div class="col-4 text-center">
                                <h4>What do you need to do?</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-light-grey"><a id="showContact" href="#">Update Contact Info</a></li>
                                    <li class="list-group-item bg-light-grey"><a id="showTranscript" href="#">Upload Transcripts</a></li>
                                    <li class="list-group-item bg-light-grey"><a href="#">Application Status</a></li>
                                </ul>
                            </div>
                        </div>                  
                </div>
            </div>
        </div>
    </div>
  </div>

      
 


    <script>
        var contactRouteUrl = "{{ route('form.formSubmit') }}";       
        var transcriptRouteUrl = "{{ route('form.formTranscript') }}";
        var application = $.parseJSON('@json($application)');
    </script>

  <script src="{{ asset('js/application.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-maskedinput.js') }}" type="text/javascript"></script>
</x-app-layout>

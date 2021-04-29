
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
                <div class="form-section toggle" id="section6">
                    <h2 class="blue border-bottom  mb-4"> Transcripts</h2>
                    <form class="contact-form" method="post" action="{{ route('saveTranscript') }}">
                        <input type="hidden" id="transcriptToken" name="_token" value="{{ Session::token() }}">
                        <p> Select a method for submiting your transcripts. <i>Transcripts must be submited within
                                14 days of completeing the application.
                                You can upload them now directly, or attach them an email and submit them that way.</i></p>
                        <div class="transctiptMethod">

                            <label class="transcriptLabel"></label>
                            <div class="p-3">
                                <div class="form-check">
                                    <label class="form-check-label" for="uploadTranscripts">Upload transcripts
                                        directly</label>
                                    <input class="form-check-input transcript" type="radio" id="uploadTranscripts" name="transcriptMethod" value="uploadTranscripts">
                                </div>

                                <div class="" id="transciptUpload">
                                    <div class="input-group m-3">
                                        <input type="file" id="transcriptFile" class="form-control" placeholder="" name="transcript" />
                                    </div>
                                </div>
                            </div>

                            <div class="p-3">
                                <div class="form-check">
                                    <label class="form-check-label" for="sendEmail">Send transctipts through
                                        Email</label>
                                    <input class="form-check-input transcript" type="radio" id="sendEmail" name="transcriptMethod" value="SendEmail">
                                </div>
                            </div>

                            <div class="p-3">
                                <div class="form-check">
                                    <label class="form-check-label" for="sendLater">I will submit my transcripts within 14 days of submitting my application </label>
                                    <input class="form-check-input transcript" type="radio" id="sendLater" name="transcriptMethod" value="SendLater">
                                </div>
                            </div>
                        </div>

                        <div class="form-nav">
                            <button type="submit" id="transcriptBtn" class="nextBtn btn btn-pink float-right" data-section="6">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

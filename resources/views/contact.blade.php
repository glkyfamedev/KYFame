
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

                <div class="form-section toggle" id="section1">
                    <h2 class="blue border-bottom mb-4">Contact Information</h2>
                    <div class="messages border-bottom"></div>
                    <form class="contact-form row g-3" id="contact-Section" action="{{ route('saveContact') }}" method="POST">
                        @csrf
                        <input type="hidden" id="contactToken" name="_token" value="{{ Session::token() }}">
                        <div class="col-8 contact-required">
                            <label class="form-label contact-label" for="streetAddress">Street address <i class="bi bi-asterisk required"></i></label>
                            <input id="streetAddress" class="form-control contact-input" type="text" name="streetAddress" required autofocus />
                        </div>

                        <div class="col">
                            <label class="form-label contact-label" for="address2">Apt or Suite number </label>
                            <input id="address2" class="form-control" type="text" name="address2" autofocus />
                        </div>

                        <div class="col-md-6 contact-required">
                            <label class="form-label contact-label" for="city">City <i class="bi bi-asterisk required"></i></label>
                            <input id="city" class="form-control contact-input" type="text" name="city" required autofocus />
                        </div>

                        <div class="col-md-4 contact-required">
                            <label class="form-label contact-label" for="state">State <i class="bi bi-asterisk required"></i></label>
                            <input id="state" class="form-control contact-input" type="text" name="state" required autofocus />
                        </div>

                        <div class="col-md-2 contact-required">
                            <label class="form-label contact-label" for="zip">Zip <i class="bi bi-asterisk required"></i></label>
                            <input id="zip" class="form-control contact-input" type="text" name="zip" required autofocus />
                        </div>

                        <div class="col contact-required">
                            <label class="form-label contact-label" for="primaryPhone">Primary Phone <i class="bi bi-asterisk required"></i></label>
                            <input id="primaryPhone" class="form-control contact-input phone" type="text" name="primaryPhone" required autofocus />
                        </div>
                        <div class="col">
                            <label class="form-label contact-label" for="altPhone">Alt Phone</label>
                            <input id="altPhone" class="form-control phone" type="text" name="altPhone" autofocus />
                        </div>
                        <h5> <label for="contactMethod">Select Area and enter score</label></h5>
                        <div class="input-group">
                            <select id="contactMethod" class="form-control" name="contactMethod">
                                <option value="">Prefered Contact</option>
                                <option value="phone">Phone</option>
                                <option value="Account Email">Account Email</option>
                                <option value="Other Email">Other Email</option>
                            </select>
                            <div id="otherEmailDiv" class="hide">
                                <label for="otherEmail"></label>
                                <input type="text" class="form-control" id="otherEmail" name="otherEmail" placeholder="Contact Email" />
                            </div>
                        </div>

                        <div class="form-nav">
                            <button type="submit" id="contactBtn" class="nextBtn btn btn-pink float-right">Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const saveContactUrl = "{{ route('saveContact') }}";
    </script>

    <script>
        const application = $.parseJSON('@json($contactData)');
    </script>

    <script src="{{ asset('js/jquery-maskedinput.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/contact.js') }}" type="text/javascript"></script>
</x-app-layout>

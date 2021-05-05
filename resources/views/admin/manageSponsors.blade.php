<x-admin-layout>
    <style>
        .inputLabel {
            width: 150px;
            font-weight: bold;
            background-color: #8caac8 !important;
        }

    </style>
    <div class="container mb-4 p-5">
        <form method="get" action="{{ route('updateSponsor', $id) }}">
            <div class="row">
                @csrf
                @method('PATCH')
                <div class="col-lg-6">
                    <div class="input-group mb-3">
                        <label for="sponsor_name" class="inputLabel input-group-text">Sponsor Name</label>
                        <input type="text" class="form-control" id="sponsor_name" name="sponsor_name" value="{{ $sponsor_name }}" />
                    </div>

                    <div class="input-group mb-3">
                        <label for="pic_path" class="inputLabel input-group-text">Path to Logo</label>
                        <input type="text" class="form-control" id="pic_path" name="pic_path" value="{{ $pic_path }}" />
                    </div>

                    <div class="input-group mb-3">
                        <label for="comments" class="inputLabel input-group-text">Body Text</label>
                        <textarea class="form-control" id="bodyText" rows="4" name="bodyText">{{ $bodyText }}</textarea>
                    </div>

                    <div class="input-group mb-3">
                        <label for="headertext" class=" inputLabel input-group-text">Header Text</label>
                        <textarea class="form-control" id="headertext" rows="4" name="headerText">{{ $headerText }}</textarea>
                    </div>

                    <div class="input-group mb-3">
                        <label for="missionText" class="inputLabel input-group-text">Mission Text</label>
                        <textarea class="form-control" id="missionText" rows="4" name="missionText"> {{ $missionText }} </textarea>
                    </div>

                    <div class="input-group mb-3">
                        <label for="specialContentText" class="inputLabel input-group-text inputLabel">Special Content</label>
                        <input type="text" class="form-control" id="specialContentText" name="specialContent" value="{{ $specialContent }}" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input-group mb-3">
                        <label for="contact_email" class="inputLabel input-group-text">Contact Email</label>
                        <input type="text" class="form-control" name="contact_email" value="{{ $contact_email }}" />
                    </div>

                    <div class="input-group mb-3">
                        <label for="contact_street_addr1" class="inputLabel input-group-text">Street Address</label>
                        <input type="text" class="form-control" name="contact_street_addr1" value="{{ $contact_street_addr1 }}" />
                    </div>

                    <div class="input-group mb-3">
                        <label for="contact_street_addr2" class="inputLabel input-group-text">Suit No.</label>
                        <input type="text" class="form-control" name="contact_street_addr2" value="{{ $contact_street_addr2 }}" />
                    </div>

                    <div class="input-group mb-3">
                        <label for="contact_city" class="inputLabel input-group-text">City</label>
                        <input type="text" class="form-control" name="contact_city" value="{{ $contact_city }}" />
                    </div>

                    <div class="input-group mb-3">
                        <label for="contact_state" class="inputLabel input-group-text">State</label>
                        <input type="text" class="form-control" name="contact_state" value="{{ $contact_state }}" />
                    </div>

                    <div class="input-group mb-3">
                        <label for="contact_zip" class="inputLabel input-group-text">Zip</label>
                        <input type="number" class="form-control" name="contact_zip" value="{{ $contact_zip }}" />
                    </div>

                    <div class="input-group mb-3">
                        <label for="contact_phone_num" class="inputLabel input-group-text">Phone</label>
                        <input type="number" class="form-control" name="contact_phone_num" value="{{ $contact_phone_num }}" />
                    </div>
                    <div>
                        <button type="submit" class="btn text-white btn-mint mb-3">Update Sponsor</button>
                    </div>
                </div>
            </div>

        </form>

    </div>

</x-admin-layout>

$(document).ready(function () {
    $('.phone').mask('(999) 999-9999')


    var screen = window.matchMedia("(max-width: 700px)")
    showMobileView(screen) // Call listener function at run time
    screen.addListener(showMobileView);

    $('#showContact').click(function (e) {
        e.preventDefault();
        $('#streetAddress').val(application.contact_app.streetAddress);
        $('#address2').val(application.contact_app.address2);
        $('#city').val(application.contact_app.city);
        $('#state').val(application.contact_app.state);
        $('#zip').val(application.contact_app.zip);
        $('#primaryPhone').val(application.contact_app.primaryPhone);
        $('#altPhone').val(application.contact_app.altPhone);

        $('.contact-label').hide();
        $('#showContact').hide();
        $('#updateBtns').show();

        $('.update').show();

    });



    $('#updatecontactMethod').change(function () {
        if ($(this).val() == 'Other Email') {
            $('#updateOtherEmailDiv').removeClass('hide');
        }
        else {
            $('#updateOtherEmailDiv').addClass('hide');
        }
    });

    if (application.completed_date !== null && application.transcriptPath === '') {
        $('#transciptUpload').show();
    }
    else if (application.transcriptPath !== '') {
        $('#transcriptsComplete').show();
    }
    else {
        $('#disabledMsg').show();
    }
    var profile = [
        $('#profileStreetAddress').val(application.contact_app.streetAddress),
        $('#profileAddress2').val(application.contact_app.address2),
        $('#profileCity').val(application.contact_app.city),
        $('#profileState').val(application.contact_app.state),
        $('#profileZip').val(application.contact_app.zip),
        $('#profilePrimaryPhone').val(application.contact_app.primaryPhone),
        $('#profileAltPhone').val(application.contact_app.altPhone),
        $('#profileContactMethod').val(application.contact_app.preferedContactMethod),
        $('#profileOtherEmail').val(application.contact_app.otherEmail),
    ]

    // $('#showTranscript').click(function (e) {
    //     e.preventDefault();
    //     $('#placeHolder').hide();
    //     $('#contactDiv').hide();
    //     $('#transcriptDiv').show();
    // });



    $('#updateContactBtn').click(function (e) {
        e.preventDefault()
        saveContactData(e, profile)

    });


});




$('#updateTranscriptBtn').click(function (e) {
    e.preventDefault()
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var file_data = $('#transcriptFile').prop('files')[0];
    var transcriptUpload = new FormData();
    transcriptUpload.append('file', file_data);
    $.ajax({
        url: updateTranscriptRouteUrl, // route to controller function 
        cache: false,
        type: 'POST',
        contentType: false,
        processData: false,
        data: transcriptUpload,
        success: function (result) {
            if (result) {
                $('#transciptUpload').hide();
                $('#transcriptsComplete').show();
                $('#transcriptNav').removeClass('disabled')
                $('#t-check').show()

            } else {
                alert('data not saved!')
            }
        }
    });
});

$('#cancelBtn').click(function (e) {
    e.preventDefault();
    $('.update').hide();
    $('#updateBtns').hide();
    $('.contact-label').show();
    $('#showContact').show();


});





// function showMobileView(screen) {
//     if (screen.matches) { // If media query matches

//         $('#viewProfile').removeClass('hide');
//     }
// }

function saveContactData(e) {
    e.preventDefault()
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: updateProfileRouteUrl,
        data: {
            _token: $('#updateContact').val(),

            streetAddress: $('#updatestreetAddress').val(),
            address2: $('#upadteaddress2').val(),
            city: $('#updatecity').val(),
            state: $('#updatestate').val(),
            zip: $('#updatezip').val(),
            primaryPhone: $('#updateprimaryPhone').val(),
            altPhone: $('#updatealtPhone').val(),
            preferedContactMethod: $('#updatecontactMethod').val(),
            otherEmail: $('#updateotherEmail').val(),
            currentSection: application.currentSection,
        },
        dataType: 'json',

        success: function (result) {
            if (result) {


                profile

                // $('#updatestreetAddress').val(application.contact_app.streetAddress);
                // $('#upadteaddress2').val(application.contact_app.address2);
                // $('#updatecity').val(application.contact_app.city);
                // $('#updatestate').val(application.contact_app.state);
                // $('#updatezip').val(application.contact_app.zip);
                // $('#updateprimaryPhone').val(application.contact_app.primaryPhone);
                // $('#updatealtPhone').val(application.contact_app.altPhone);

                $('.update').hide();
                $('#updateBtns').hide();
                $('.contact-label').show();
                $('#showContact').show();

            } else {
                alert('data not saved!')
            }
        },
        error: function (error, xhr) {
            var i = 0
        },
        failure: function (i, e) {
            var i = 0
        }
    })
}



$(document).ready(function () {

    var screen = window.matchMedia("(max-width: 700px)")
    hideCarousel(screen) // Call listener function at run time
    screen.addListener(hideCarousel);

    function hideCarousel(screen) {
        if (screen.matches) { // If media query matches

            $('.logoCarousel').hide();
        }
    }


    // $('#logoCarousel').carousel({
    //     interval: 5000
    // });



});
$('#contactBtn').click(function () {
    var contactName = $('#contactName').val();
    var contactEmail = $('#contactEmail').val();
    var contactMessage = $('#contactMessage').val();


    $.ajax({
        type: 'POST'
        , url: contactRouteUrl
        , data: {
            _token: $('#contactFormToken').val()
            , contactName: $('#contactName').val()
            , contactEmail: $('#contactEmail').val()
            , contactMessage: $('#contactMessage').val(),

        }
        , dataType: 'json',

        success: function (result) {
            if (result) {
                alert("Email sent!")
            } else {
                alert("email could not be sent, please try again.")
            }
        }

    });

});

function unescapeJson(jsonString) {
    return jsonString.replace(/&quot;/g, '\"')
}

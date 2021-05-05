$(document).ready(function () {
    fillCurrentSection();

    $('.phone').mask('(999) 999-9999');

    $('#contactMethod').change(function () {
        if ($(this).val() == 'Other Email') {
            $('#otherEmailDiv').removeClass('hide');
        }
        else {
            $('#otherEmailDiv').addClass('hide');
        }
    });

    $('#contactBtn').click(function (e) {
        var hasErrors = false;

        $('.contact-input').each(function () {
            if ($(this).val() == '') {
                hasErrors = true;
                var formInputLabel = $(this).parents('.contact-required').find('.contact-label');
                formInputLabel.css('color', 'red');
            }
        });

        if (hasErrors) {
            return;
        }

        return true;
    });
});

function fillCurrentSection() {
    $('#streetAddress').val(application.streetAddress);
    $('#address2').val(application.address2);
    $('#city').val(application.city);
    $('#state').val(application.state);
    $('#zip').val(application.zip);
    $('#primaryPhone').val(application.primaryPhone);
    $('#altPhone').val(application.altPhone);
}

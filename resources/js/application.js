$(document).ready(function () {

    $("#startBtn").click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        $("#startBtn").hide();
        $("#section1").show();

    });

    $(".nextBtn").click(function () {
        var sectionNum = $(this).data("section");
        var formData = {
            address: jQuery('#address').val(),
            address2: jQuery('#address2').val(),
            city: jQuery('#city').val(),
            state: jQuery('#state').val(),
            zip: jQuery('#zip').val(),
            primaryPhone: jQuery('#primaryPhone').val(),
            altPhone: jQuery('#altPhone').val(),
        };
        $.ajax({
            type: POST,
            url: 'application',
            data: formData,
            dataType: 'json',
            succuess: function (data) {
                alert('Saved!');
                $("#section" + sectionNum).hide();
                $("#section" + (sectionNum + 1)).show();
            }
        });
    })
});
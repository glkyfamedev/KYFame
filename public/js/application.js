$(document).ready(function () {
    $('.phone').mask('(999) 999-9999')

    $('.termCheck').change(function () {
        if ($(this).is(':checked')) {
            $(this).removeClass('errorBorder')
        }
    })

    $('#startBtn').click(function (e) {
        e.preventDefault();
        $('#appDescription').hide();
        var currentSection = application.currentSection;
        fillCurrentSection(application);

        if (application.completed_date != null) {
            $('#section1').show();
            application.currentSection = 7;
            enableMenuItems(currentSection);
        }
        else {
            $('#section' + (currentSection + 1)).show();
            enableMenuItems(currentSection);
        }
    });

    $('#appNav a').click(function (e) {
        e.preventDefault()
        $('.toggle').hide()
        var toShow = $(this).attr('href')
        $(toShow).show()
    });

    addEmploymentSection();

    $('#addField').click(addEmploymentSection);

    // function updateSection(routeUrl, dataToSave, sectionNum) {

    //Status Section Conditionals
    $('input[name=workForSponsor]').click(checkForEmployerSponsor);

    $('input[name=relativeSponsors]').click(checkForRelatedSponsor);

    //Assesment Section conditionals
    $('input[name=ACT]').click(function () {
        if ($("input[id='ACTyes']").is(':checked')) {
            $('#ACTScoresContainer').show()
            $('.ACT').addClass('score-input')
        } else {
            $('#ACTScoresContainer').hide()
            $('.ACT').removeClass('score-input')
        }
    });

    $('input[name=SAT]').click(function () {
        if ($("input[id='SATyes']").is(':checked')) {
            $('#SATScoresContainer').show()
            $('.SAT').addClass('score-input')
        } else {
            $('#SATScoresContainer').hide()
            $('.SAT').removeClass('score-input')
        }
    });

    $('input[name=KYOTE]').click(function () {
        if ($("input[id='KYOTEyes']").is(':checked')) {
            $('#KYOTEscore').show()
        } else {
            $('#KYOTEscore').hide()
        }
    });

    $('#contactBtn').click(function (e) {
        e.preventDefault()
        var sectionNum = $(this).data('section')
        var hasErrors = false
        $('.contact-input').each(function () {
            if ($(this).val() == '') {
                hasErrors = true
                var formInputLabel = $(this)
                    .parents('.contact-required')
                    .find('.contact-label')
                // formInputLabel.text("Required");
                formInputLabel.css('color', 'red')
            }
        })
        if (hasErrors) {
            return
        } else {
            saveContactData(e, sectionNum)
        }
    });

    $('#statusBtn').click(function (e) {
        e.preventDefault()
        var sectionNum = $(this).data('section')

        var hasErrors = false

        $('.status-input').each(function () {
            var formInputLabel = $(this)
                .parents('.status-required')
                .find('.status-label')
            if ($(this).val() == '') {
                hasErrors = true;
                formInputLabel.css('color', 'red')
            } else {
                formInputLabel.css('color', 'black')
            }
        })

        if (hasErrors) {
            return
        } else {
            saveStatusData(e, sectionNum)
        }
    });

    $('#employmentBtn').click(saveEmploymentData)

    $('#assesmentBtn').click(saveAssessmentData)

    $('#essayBtn').click(function (e) {
        e.preventDefault()
        var sectionNum = $(this).data('section')

        var hasErrors = false
        $('.essay-input').each(function () {
            if ($(this).val() == '') {
                hasErrors = true
                var formInputLabel = $(this)
                    .parents('#essay-required')
                    .find('.essay-label')
                formInputLabel.css('color', 'red')
            }
        })

        if (hasErrors) {
            return
        } else {
            saveEssayData(e, sectionNum)
        }
    });

    $('#transcriptBtn').click(function (e) {
        e.preventDefault()
        var sectionNum = $(this).data('section')
        var hasErrors = false
        if (!$('input[name=transcriptMethod]:checked').length) {
            hasErrors = true
            var transcriptLabel = $('.transcriptLabel')
            transcriptLabel.css('color', 'red')
            transcriptLabel.text(
                'You must pick a submission method for your transcripts'
            )
        }
        if (hasErrors) {
            return
        } else {
            saveTranscriptData(e, sectionNum)
        }
    });

    $('#finishBtn').click(function (e) {
        e.preventDefault()
        var sectionNum = $(this).data('section')
        var hasErrors = false

        $('.termCheck').each(function () {
            if (!$(this).is(':checked')) {
                hasErrors = true
                $(this).addClass('errorBorder')
            }
        })

        if (hasErrors) {
            return
        } else {
            completeApplication(e)
        }
    })
});



function checkForRelatedSponsor() {
    if ($("input[id='relativesYes']").is(':checked')) {
        $('#relativeSponsorInput').show()
        $('#relativeSponsorNames').addClass('status-input')
        $
    } else {
        $('#relativeSponsorInput').hide()
        $('#relativeSponsorNames').removeClass('status-input')
    }
}

function checkForEmployerSponsor() {
    if ($("input[id='workForSponsorYes']").is(':checked')) {
        $('#employedSponsorInput').show()
        $('#employedSponsorNames').addClass('status-input')
    } else {
        $('#employedSponsorInput').hide()
        $('#employedSponsorNames').removeClass('status-input')
    }
}

function hasBlankScore(selector) {
    for (var i = 0; i < $(selector).length; i++) {
        var currentScore = $(selector).eq(i)

        if (currentScore.val() == '') {
            $([document.documentElement, document.body]).animate(
                {
                    scrollTop: currentScore.offset().top
                },
                100,
                'linear',
                function () {
                    currentScore.focus()
                    currentScore.addClass('errorBorder')
                }
            )

            currentScore.change(function () {
                currentScore.removeClass('errorBorder')
            })
            return true
        }
    }
    return false
}

function addEmploymentSection() {
    var employmentTemplateHtml = $('#employerTemplate').html()

    var currentEmployerCount = $('.employerName').length
    $('#employmentContainer').append(employmentTemplateHtml);
    if (currentEmployerCount == 3) {
        $('#addField').addClass('disabled')
    }
}

function saveContactData(e, sectionNum) {
    e.preventDefault()
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //   var contactModel = getContactInfo();
    //   updateSection(contactRouteUrl, contactModel, sectionNum);
    //  });

    $.ajax({
        type: 'POST',
        url: contactRouteUrl,
        data: {
            _token: $('#token').val(),

            streetAddress: $('#streetAddress').val(),
            address2: $('#address2').val(),
            city: $('#city').val(),
            state: $('#state').val(),
            zip: $('#zip').val(),
            primaryPhone: $('#primaryPhone').val(),
            altPhone: $('#altPhone').val(),
            currentSection: sectionNum + 1,
            // data: dataToSave
        },
        dataType: 'json',
        // contentType: 'application/json',
        success: function (result) {
            if (result) {
                alert('Saved!')
                $('#section' + sectionNum).hide()
                $('#contactNav').removeClass('disabled')
                $('#c-check').show()
                $('#section' + (sectionNum + 1)).show()
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

function saveStatusData(e, sectionNum) {
    e.preventDefault()
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    // var streetAddress = $('#streetAddress').val();
    // var address2 = $('#address2').val();
    // var city = $('#city').val();
    // var state = $('#state').val();
    // var zip = $('#zip').val();
    // var primaryPhone = $('#primaryPhone').val();
    // var altPhone = $('#altPhone').val();

    // var contactModel = {
    // streetAddress: streetAddress,
    // address2: address2,
    // city: city,
    // state: state,
    // zip: zip,
    // primaryPhone: primaryPhone,
    // altPhone: altPhone
    // };
    $.ajax({
        type: 'POST',
        url: statusRouteUrl,
        data: {
            _token: $('#statusToken').val(),
            // under_18 : $('#under_18').val(),
            under_18: $('input[name=under_18]:checked').val(),
            // authorizedInUS : $('#authorizedInUS').val(),
            authorizedInUS: $('input[name=authorizedInUS]:checked').val(),
            // levelOfEducation: $('#levelOfEducation').val(),
            levelOfEducation: $('input[name=levelOfEducation]:checked').val(),
            // RelativeSponsors: $('#RelativeSponsors').val(),
            relativeSponsors: $('input[name=relativeSponsors]:checked').val(),
            // WorkForSponsor: $('#WorkForSponsor').val(),
            workForSponsor: $('input[name=workForSponsor]:checked').val(),
            relative_sponsor_names: $('#relativeSponsorNames').val(),
            employed_sponsor_names: $('#employedSponsorNames').val(),
            currentSection: sectionNum + 1
        },
        dataType: 'json',
        success: function (result) {
            if (result) {
                alert('Saved!')
                $('#section' + sectionNum).hide()
                $('#statusNav').removeClass('disabled')
                $('#s-check').show()
                $('#section' + (sectionNum + 1)).show()
            } else {
                alert('data not saved!')
            }
        }
    })
}

function getEmployerPrototype() {
    return {
        name: "",
        phone: "",
        workDuties: "",
        employmentStart: "",
        employmentEnd: "",
        reasonForLeaving: "",
    };
}
function saveEmploymentData(e) {
    e.preventDefault()
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    var sectionNum = $(this).data('section')

    var employers = [];
    var employerCount = $(".employer").length - 1;

    for (var i = 0; i < employerCount; i++) {
        var container = $(".employer").eq(i);
        employer = getEmployerPrototype();
        employer.name = $(".employerName", container).val();
        employer.phone = $(".employerPhone", container).val();
        employer.workDuties = $(".workDuties", container).val();
        employer.employmentStart = $(".employmentStart", container).val();
        employer.employmentEnd = $(".employmentEnd", container).val();
        employer.reasonForLeaving = $(".reasonForLeaving", container).val();
        employers.push(employer);
    }

    $.ajax({
        type: 'POST',
        url: employmentRoutetUrl,
        data: {
            _token: $('#employmentToken').val(),

            // employerName: $('.employerName').val(),
            // employerPhone: $('.employerPhone').val(),
            // workDuties: $('.workDuties').val(),
            // employmentStart: $('.employmentStart').val(),
            // employmentEnd: $('.employmentEnd').val(),
            // reasonForLeaving: $('.reasonForLeaving').val(),
            // currentSection: sectionNum + 1

            employerArray: employers
        },
        dataType: 'json',
        success: function (result) {
            if (result) {
                alert('Saved!')
                $('#section' + sectionNum).hide()
                $('#section' + (sectionNum + 1)).show()
            } else {
                alert('data not saved!')
            }
        }
    })
}

function saveAssessmentData(e, sectionNum) {
    e.preventDefault()
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    if (hasBlankScore('.score-input')) {
        return false
    }
    var app_action
    if ($('#ACTenglishScore').val() >= 18 && $('#ACTmathScore').val() >= 19) {
        app_action = 'approved'
    } else {
        app_action = 'needs review'
    }

    var sectionNum = $(this).data('section')

    $.ajax({
        type: 'POST',
        url: assesmenRoutetUrl,
        data: {
            _token: $('#assesmentToken').val(),

            ACT: $('input[name=ACT]:checked').val(),
            ACTenglishScore: $('#ACTenglishScore').val(),
            ACTreadingScore: $('#ACTreadingScore').val(),
            ACTmathScore: $('#ACTmathScore').val(),
            ACTscienceScore: $('#ACTscienceScore').val(),
            ACTcompositeScore: $('#ACTcompositeScore').val(),

            SAT: $('input[name=SAT]:checked').val(),
            SATmath: $('#SATmath').val(),
            SATCriticalThinking: $('#SATCriticalThinking').val(),
            SATwriting: $('#SATwriting').val(),
            SATcomposite: $('#SATcomposite').val(),

            KYOTE: $('input[name=KYOTE]:checked').val(),
            KYOTEarea: $('#KYOTEarea').val(),
            KYOTEscore: $('#KYOTEscore').val(),

            otherAssesments: $('#otherAssesments').val(),

            skillsUSA: $('input[name=skillsUSA]:checked').val(),
            projectLeadTheWay: $('input[name=projectLeadTheWay]:checked').val(),

            manufacturingAcedemics: $('#manufacturingAcedemics').val(),
            awardsAndHonors: $('#awardsAndHonors').val(),
            highSchoolAttended: $('#highSchoolAttended').val(),
            GPA: $('#GPA').val(),
            highSchoolActivities: $('#highSchoolActivities').val(),
            technicalPrograms: $('#technicalPrograms').val(),
            additionalComments: $('#additionalComments').val(),
            currentSection: sectionNum + 1,
            app_action: app_action
        },
        dataType: 'json',
        success: function (result) {
            if (result) {
                alert('Saved!')
                $('#section' + sectionNum).hide()
                $('#assessmentNav').removeClass('disabled')
                $('#a-check').show()
                $('#section' + (sectionNum + 1)).show()
            } else {
                alert('data not saved!')
            }
        }
    })
}
function saveEssayData(e, sectionNum) {
    e.preventDefault()
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    $.ajax({
        type: 'POST',
        url: essayRouteUrl,
        data: {
            _token: $('#essayToken').val(),
            essay: $('#essay').val(),
            currentSection: sectionNum + 1
        },
        dataType: 'json',
        success: function (result) {
            if (result) {
                alert('Saved!')
                $('#section' + sectionNum).hide()
                $('essayNav').removeClass('disabled')
                $('#essay-check').show()
                $('#section' + (sectionNum + 1)).show()
            } else {
                alert('data not saved!')
            }
        }
    })
}


function saveTranscriptData(e, sectionNum) {
    e.preventDefault()
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var transcriptMethod = $('input[name=transcriptMethod]:checked').val();

    var file_data = $('#transcriptFile').prop('files')[0];

    var transcriptUpload = new FormData();

    transcriptUpload.append('file', file_data);
    transcriptUpload.append('currentSection', sectionNum + 1);
    transcriptUpload.append('transcriptMethod', transcriptMethod);

    // alert(transcriptUpload);

    $.ajax({
        url: transcriptRouteUrl, // point to server-side PHP script
        cache: false,
        type: 'POST',
        contentType: false,
        processData: false,
        data: transcriptUpload,
        success: function (result) {
            if (result) {
                alert('Saved!')
                $('#section' + sectionNum).hide()
                $('#transcriptNav').removeClass('disabled')
                $('#t-check').show()
                $('#section' + (sectionNum + 1)).show()
            } else {
                alert('data not saved!')
            }
        }
    });
}


function GetTodayDate() {
    var tdate = new Date()
    var dd = tdate.getDate() //yields day
    var MM = tdate.getMonth() //yields month
    var yyyy = tdate.getFullYear() //yields year
    var currentDate = dd + '-' + (MM + 1) + '-' + yyyy

    return currentDate
}
function completeApplication(e) {
    e.preventDefault()
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    var completedDate = GetTodayDate()
    $.ajax({
        type: 'POST',
        url: completeRouteUrl,
        data: {
            _token: $('#completeToken').val(),
            completed_date: completedDate,
            currentSection: 1
            // data: dataToSave
        },
        dataType: 'json',
        success: function (result) {
            if (result) {
                $('#completedNav').removeClass('disabled')
                $('#complete-check').show()
                location.replace(dashBoardRouteUrl);
            } else {
                alert('data not saved!')
            }
        }
    })
}

function enableMenuItems(currentSection) {
    for (var i = currentSection; i > 0; i--) {
        if (i < 7) {
            $("#sectionNav" + i).removeClass('disabled');
            $("#sectionCheck" + i).removeClass('hide');
        }
        else {
            $("#sectionCheck" + i).removeClass('hide');
        }
    }


}

function fillCurrentSection(application) {
    if (application.currentSection >= '1') {
        //contact section
        $('#streetAddress').val(application.contact_app.streetAddress);
        $('#address2').val(application.contact_app.address2);
        $('#city').val(application.contact_app.city);
        $('#state').val(application.contact_app.state);
        $('#zip').val(application.contact_app.zip);
        $('#primaryPhone').val(application.contact_app.primaryPhone);
        $('#altPhone').val(application.contact_app.altPhone);

        //status Section

        //Employment Section

        //Assessments Section
        // $('input[name=ACT]:checked').val(application.assesment_app.ACT),
        if (application.assesment_app) {
            if (application.assesment_app.ACT != 0) {

                $('#ACTenglishScore').val(application.assesment_app.ACTenglishScore);
                $('#ACTreadingScore').val(application.assesment_app.ACTreadingScore);
                $('#ACTmathScore').val(application.assesment_app.ACTmathScore);
                $('#ACTscienceScore').val(application.assesment_app.ACTscienceScore);
                $('#ACTcompositeScore').val(application.assesment_app.ACTcompositeScore);
                $('#ACTScoresContainer').show();
            }



            if (application.assesment_app.SAT != 0) {
                $('input[id=SATyes]:checked');
                $('#SATmath').val(application.assesment_app.SATmath);
                $('#SATCriticalThinking').val(application.assesment_app.SATCriticalThinking);
                $('#SATwriting').val(application.assesment_app.SATwriting);
                $('#SATcomposite').val(application.assesment_app.SATcomposite);
                $('#SATScoresContainer').show();
            }

            if (application.assesment_app.KYOTE != 0) {
                // $('input[name=KYOTE]:checked').val(application.assesment_app.KYOTE),
                $('#KYOTEarea').val(application.assesment_app.KYOTEarea);
                $('#KYOTEscore').val(application.assesment_app.KYOTEscore);
            }

            $('#otherAssesments').val(application.assesment_app.otherAssesments);

            $('input[name=skillsUSA]:checked').val(application.assesment_app.skillsUSA);
            $('input[name=projectLeadTheWay]:checked').val(application.assesment_app.projectLeadTheWay);

            $('#manufacturingAcedemics').val(application.assesment_app.manufacturingAcedemics);
            $('#awardsAndHonors').val(application.assesment_app.awardsAndHonors);
            $('#highSchoolAttended').val(application.assesment_app.highSchoolAttended);
            $('#GPA').val(application.assesment_app.GPA);
            $('#highSchoolActivities').val(application.assesment_app.highSchoolActivities);
            $('#technicalPrograms').val(application.assesment_app.technicalPrograms);
            $('#additionalComments').val(application.assesment_app.additionalComments);

        }
        //essay Section
        $('#essay').val(application.essay);

        //transcript Section
    }
}

// $("#contactBtn").click(function (e) {
//   e.preventDefault();
//   $.ajaxSetup({
//     headers: {
//       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
//   });

//   //var form = $('#contact-Section');
//   var sectionNum = $(this).data("section");
//   var contactModel = getContactInfo();

//   updateSection(contactRouteUrl, contactModel, sectionNum);
// });

// function getContactInfo() {
//         var streetAddress = $('#streetAddress').val();
//         var address2 = $('#address2').val();
//         var city = $('#city').val();
//         var state = $('#state').val();
//         var zip = $('#zip').val();
//         var primaryPhone = $('#primaryPhone').val();
//         var altPhone = $('#altPhone').val();

//         var contactModel = {
//           streetAddress: streetAddress,
//           address2: address2,
//           city: city,
//           state: state,
//           zip: zip,
//           primaryPhone: primaryPhone,
//           altPhone: altPhone
//     };

//   return contactModel;

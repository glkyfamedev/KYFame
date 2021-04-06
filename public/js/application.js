$(document).ready(function () {

  $("#startBtn").click(function (e) {
    e.preventDefault();
    $("#startBtn").hide();
    $("#section1").show();
  });
  
  $("#appNav a").click(function (e) {
    e.preventDefault();
    $(".toggle").hide();
    var toShow = $(this).attr('href');
    $(toShow).show();
  });
  
  addEmploymentSection();
     
  $("#addField").click(function () {
    addEmploymentSection();
  });
               
  // function updateSection(routeUrl, dataToSave, sectionNum) {
 
  $("#contactBtn").click(function (e) {
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var sectionNum = $(this).data("section");
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
                
        // data: dataToSave
      },
      dataType: 'json',
      // contentType: 'application/json',
      success: function (result) {
        if (result) {
          alert('Saved!');
          $("#section" + sectionNum).hide();
          $("#section" + (sectionNum + 1)).show();
        }
        else {
          alert("data not saved!");
        }
      },
      error: function (error, xhr) {
        var i = 0;
      },
      failure: function (i, e) {
        var i = 0;
      }
               
    });
  });

  // }

  $("#statusBtn").click(function (e) {
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
              
    var sectionNum = $(this).data("section");
        
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
          
        sponsor_names: $('#sponsorNames').val(),
        
      },
      dataType: 'json',
      success: function (result) {
        if (result) {
          alert('Saved!');
          $("#section" + sectionNum).hide();
          $("#section" + (sectionNum + 1)).show();
        }
        else {
          alert("data not saved!");
        }
      }
    });
  });
    

  $("#employmentBtn").click(function (e) {
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var sectionNum = $(this).data("section");
    
    // var employers = [];
    // var employerCount = $(".employer").length;

    // var employer = {
    //   Name: "",
    //   Phone: "",
    //   WorkDuties: "",
    //   employmentStart: "",
    //   employmentEnd: "",
    //   reasonForLeaving: "",
    // };
        
    // for (var i = 0; i < employerCount; i++) {
    //   var container = $(".employer").eq(i);

    //   employer.Name = $(".employerName", container).val();
    //   employer.Phone = $(".employerPhone", container).val();
    //   employer.WorkDuties = $(".workDuties", container).val();
    //   employer.employmentStart = $(".employmentStart", container).val();
    //   employer.employmentEnd = $(".employmentEnd", container).val();
    //   employer.reasonForLeaving = $(".reasonForLeaving", container).val();
    //   employers.push(employer);
    // }
        

    $.ajax({
      type: 'POST',
      url: employmentRoutetUrl,
      data: {
        _token: $('#employmentToken').val(),

        employerName: $(".employerName").val(),
        employerPhone: $(".employerPhone").val(),
        workDuties: $(".workDuties").val(),
        employmentStart: $(".employmentStart").val(),
        employmentEnd: $(".employmentEnd").val(),
        reasonForLeaving:  $(".reasonForLeaving").val(),
      
        // employerArray: employers,
      },
      dataType: 'json',
      success: function (result) {
        if (result) {
          alert('Saved!');
          $("#section" + sectionNum).hide();
          $("#section" + (sectionNum + 1)).show();
        }
        else {
          alert("data not saved!");
        }
      }
    });
  });


  $("#assesmentBtn").click(function (e) {
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var sectionNum = $(this).data("section");
         
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
      },
      dataType: 'json',
      success: function (result) {
        if (result) {
          alert('Saved!');
          $("#section" + sectionNum).hide();
          $("#section" + (sectionNum + 1)).show();
        }
        else {
          alert("data not saved!");
        }
      }
    });
  });

  $("#essayBtn").click(function (e) {
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var sectionNum = $(this).data("section");
    //   var contactModel = getContactInfo();
    //   updateSection(contactRouteUrl, contactModel, sectionNum);
    //  });
     
    $.ajax({
      type: 'POST',
      url: essayRouteUrl,
      data: {
        _token: $('#essayToken').val(),
               
        essay: $('#essay').val(),
         
                
        // data: dataToSave
      },
      dataType: 'json',
      // contentType: 'application/json',
      success: function (result) {
        if (result) {
          alert('Saved!');
          $("#section" + sectionNum).hide();
          $("#section" + (sectionNum + 1)).show();
        }
        else {
          alert("data not saved!");
        }
      }
               
    });
  });


  $("#transcriptBtn").click(function (e) {
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var sectionNum = $(this).data("section");
    //   var contactModel = getContactInfo();
    //   updateSection(contactRouteUrl, contactModel, sectionNum);
    //  });
     
    $.ajax({
      type: 'POST',
      url: transcriptRouteUrl,
      data: {
        _token: $('#transcriptToken').val(),
        transcript: $('#transcript').val(),
        // data: dataToSave
      },
      dataType: 'json',
      // contentType: 'application/json',
      success: function (result) {
        if (result) {
          alert('Saved!');
          $("#section" + sectionNum).hide();
          $("#section" + (sectionNum + 1)).show();
        }
        else {
          alert("data not saved!");
        }
      }
               
    });
  });
  
});

function addEmploymentSection() {
      var employmentTemplateHtml = $("#employerTemplate").html();

      var currentEmployerCount = $(".employerName").length;
  
      $("#employmentContainer").append(employmentTemplateHtml);
  
      if (currentEmployerCount == 3) {
        //disable button here
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
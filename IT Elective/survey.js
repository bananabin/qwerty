    var firstname, lastname, barangay, city, province, phoneNumber, email;
    var answer_array = []; // Declare a checkbox array
    var selected;
    var q2, q3, q4, q5;
    var place;
$(document).ready(function(){

    $("#surveyCheckbox").hide();
    $("#btnSubmit").hide();
    $("#btnBack").hide();
    /*$("#submit").click(function(){
        var answer_value = $("input[name='answer']:checked").val();
            if(answer_value)
            {
                alert("Your answer is a  " + answer_value);
            }
            $( "#rdoYes" ).prop( "checked", false );
            $( "#rdoNo" ).prop( "checked", false );

    })*/

    $("#btnInfo").on('click', function(){
       
       // alert(firstname);
        var regex = /^[a-zA-Z\s]+$/;
        var email_regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        firstname = $("#fName").val();
        lastname = $("#lName").val();
        barangay = $("#barangay").val();
        city = $("#city").val();
        province = $("#province").val();
        phoneNumber = $("#mNumber").val();
        email = $("#email").val();
        if((firstname != "") && (lastname != "") && (barangay != "") && (city != "") && (province != "")
            && (((phoneNumber != "") ) || (email != "")))
            {
                if(((phoneNumber != "") && (!$.isNumeric(phoneNumber))))
                {
                    alert("Please correct your input.");
                }
                else if(!regex.test(firstname) || !regex.test(lastname) || !regex.test(province))
                {
                    alert("Please correct your input.");
                }
                else if((email != "") && (!email_regex.test(email)))
                {
                    alert("Please correct your input.");
                }
                else
                {
                    $("#btnInfo").hide();
                    $("#btnCancel").hide();
                    $("#personalInfo").hide();
                    $("#surveyCheckbox").show();
                    $("#btnSubmit").show();
                    $("#btnBack").show();
                }

            }
        else
            {
                alert("Please complete and correct your input.");
            }
      
    });

    $("#btnBack").click(function(){
        $("#surveyCheckbox").hide();
        $("#btnSubmit").hide();
        $("#btnBack").hide();
        $("#btnInfo").show();
        $("#btnCancel").show();
        $("#personalInfo").show();
    })


    $("#rdoNo5").click(function() {
        $("#mPlace").attr("disabled", true);
    });

    $("#rdoYes5").click(function() {
        $("#mPlace").attr("disabled", false);
    });

    
    $("#chkNone").click(function() {
        if ($(this).is(":checked")) {
            //$(".symptoms").attr("disabled", true);
            $(".symptoms").prop("checked", false);
        } else {
            $(".symptoms").attr("disabled", false);
        }
        
        
    });

    $(".symptoms").click(function() {
  
        $("#chkNone").attr("checked", false);
 
    });
    

    $("#btnSubmit").click(function(){

        q2 = $("input[name='answerq2']:checked").val();
        q3 = $("input[name='answerq3']:checked").val();
        q4 = $("input[name='answerq4']:checked").val();
        q5 = $("input[name='answerq5']:checked").val();
        place = $("#mPlace").val();

        // Look for all checkboxes that have a specific class and was checked
        $(".answer:checked").each(function() {
        answer_array.push($(this).val());
        })
        
        
        // Join the array separated by the comma
        selected = answer_array.join(',') ;

         // Check if there are selected checkboxes and radio button
        if((selected.length > 0) && ($("#rdoYes2").is(":checked") || $("#rdoNo2").is(":checked")) &&
        ($("#rdoYes3").is(":checked") || $("#rdoNo3").is(":checked")) && ($("#rdoYes4").is(":checked") || $("#rdoNo4").is(":checked"))
        && ($("#rdoYes5").is(":checked") || $("#rdoNo5").is(":checked")))
        {
            if($("#rdoYes5").is(":checked"))
            {
                if(place == "")
                {
                    alert("Please complete your answer.")
                    answer_array = [];
                }
                else
                {
                    $.ajax({
                        method:'POST',
                        url:'./survey.php',
                        dataType: 'json',
                        data:{
                        insert:1,
                        firstname:firstname,
                        lastname:lastname,
                        barangay:barangay,
                        city:city,
                        province:province,
                        mobile:phoneNumber,
                        email:email,
                        q1:selected,
                        q2:q2,
                        q3:q3,
                        q4:q4,
                        q5:q5,
                        place:place
                    },
                    success:function(data){
                        $("#messageModal").modal('show');
                        $('#userId').html(data);
                        //alert("Thank you!");
                        $('#firstname').val("");
                        $('#lastname').val("");
                        $('#barangay').val("");
                        $('#city').val("");
                        $('#province').val("");
                        $('#mNumber').val("");
                        $('#email').siblings("span").text("");
                        $(".answer").prop("checked", false);
                        $("#rdoYes2").prop("checked", false);
                        $("#rdoNo2").prop("checked", false);
                        $("#rdoYes3").prop("checked", false);
                        $("#rdoNo3").prop("checked", false);
                        $("#rdoYes4").prop("checked", false);
                        $("#rdoNo4").prop("checked", false);
                        $("#rdoYes5").prop("checked", false);
                        $("#rdoNo5").prop("checked", false);
                        
                        //location.href="LANDINGPAGE_2.html";
                    },
                    });
                }
                    
            }
            else
            {
                place = "None";
                $.ajax({
                    method:'POST',
                    url:'./survey.php',
                    data:{
                        insert:1,
                        firstname:firstname,
                        lastname:lastname,
                        barangay:barangay,
                        city:city,
                        province:province,
                        mobile:phoneNumber,
                        email:email,
                        q1:selected,
                        q2:q2,
                        q3:q3,
                        q4:q4,
                        q5:q5,
                        place:place
                    },
                success:function(data){
                    $("#messageModal").modal('show');
                    $('#userId').html(data);
                    //alert("Thank you!");
                    $('#firstname').val("");
                    $('#lastname').val("");
                    $('#barangay').val("");
                    $('#city').val("");
                    $('#province').val("");
                    $('#mNumber').val("");
                    $('#email').siblings("span").text("");
                    $(".answer").prop("checked", false);
                    $("#rdoYes2").prop("checked", false);
                    $("#rdoNo2").prop("checked", false);
                    $("#rdoYes3").prop("checked", false);
                    $("#rdoNo3").prop("checked", false);
                    $("#rdoYes4").prop("checked", false);
                    $("#rdoNo4").prop("checked", false);
                    $("#rdoYes5").prop("checked", false);
                    $("#rdoNo5").prop("checked", false);
                    
                    //location.href="LANDINGPAGE_2.html";
                    
                },
              
                });
            }
        }
        else
        {
            alert("Please complete your answer.");
           answer_array = [];
        }
     
 
    })

})

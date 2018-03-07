    $(function() {
    // for donate blood
    $("#lname_error_message").hide();
    $("#fname_error_message").hide();
    $("#mname_error_message").hide();
    $("#age_error_message").hide();
    $("#bdate_error_message").hide();
    $("#sex_error_message").hide();
    $("#religion_error_message").hide();
    $("#nationality_error_message").hide();
    $("#education_error_message").hide();
    $("#occupation_error_message").hide();
    $("#telno_error_message").hide();
    $("#celno_error_message").hide();
    $("#email_error_message").hide();
    $("#idNo_error_message").hide();

    // for donate blood
    var error_lname = false;
    var error_fname = false;
    var error_mname = false;
    var error_age = false;
    var error_bdate = false;
    var error_sex = false;
    var error_religion = false;
    var error_nationality = false;
    var error_education = false;
    var error_occupation = false;
    var error_telno = false;
    var error_celno = false;
    var error_email = false;
    var error_idNo = false;
    
    // for donate blood

    $("#last_name").focusout(function(){
      check_lname();
      });
    
    $("#first_name").focusout(function(){
      check_fname();
      });
      
    $("#middle_name").focusout(function(){
      check_mname();
      });
    
    $("#age").focusout(function(){
      check_age();
      });
        
    $("#bdate").focusout(function(){
      check_bdate();
      });

    $("#sex").focusout(function(){
      check_sex();
      });
      
    $("#religion").focusout(function(){
      check_religion();
      });
        
    $("#nationality").focusout(function(){
      check_nationality();
      });
      
    $("#education").focusout(function(){
      check_education();
      });
          
    $("#occupation").focusout(function(){
      check_occupation();
      });
    
    $("#tel_no").focusout(function(){
      check_tel_no();
      });
    
    $("#cel_no").focusout(function(){
      check_cel_no();
      });
            
    $("#email_add").focusout(function(){
      check_email_add();
      });
          
    $("#idNo").focusout(function(){
      check_idNo();
      });
    
    })

    //for donate blood
    function check_lname() {
      var pattern = /^[a-zA-Z-. ]*$/;
      var lname = $("#last_name").val();
  
        if (pattern.test(lname) && lname !== '') {
          $("#lname_error_message").hide();
          $("#last_name").css("border-bottom","3px solid #34F458");
        } else {
          $("#lname_error_message").html("Required and should contain characters");
          $("#lname_error_message").show();
          $("#last_name").css("border-bottom","2px solid #F90A0A");
          error_lname = true;
        }
      }
  
    function check_fname() {
      var pattern = /^[a-zA-Z-. ]*$/;
      var fname = $("#first_name").val();
  
        if (pattern.test(fname) && fname !== '') {
          $("#fname_error_message").hide();
          $("#first_name").css("border-bottom","3px solid #34F458");
        } else {
          $("#fname_error_message").html("Required and should contain characters");
          $("#fname_error_message").show();
          $("#first_name").css("border-bottom","2px solid #F90A0A");
          error_fname = true;
        }
      }

    function check_mname() {
      var pattern = /^[a-zA-Z-. ]*$/;
      var mname = $("#middle_name").val();
  
        if (pattern.test(mname) && mname !== '') {
          $("#mname_error_message").hide();
          $("#middle_name").css("border-bottom","3px solid #34F458");
        } else {
          $("#mname_error_message").html("Required and should contain characters");
          $("#mname_error_message").show();
          $("#middle_name").css("border-bottom","2px solid #F90A0A");
          error_mname = true;
        }
      }

    function check_age() {
      var pattern = /^[0-9]+$/;
      var age = $("#age").val();

        if (pattern.test(age) && age !== '') {
            $("#age_error_message").hide();
            $("#age").css("border-bottom","3px solid #34F458");
        } else {
            $("#age_error_message").html("Required and should contain numbers");
            $("#age_error_message").show();
            $("#age").css("border-bottom","2px solid #F90A0A");
            error_age = true;
        }
      }

    function check_bdate() {
    var bdate = $("#bdate").val();

      if (bdate && bdate !== '') {
        $("#bdate_error_message").hide();
        $("#bdate").css("border-bottom","3px solid #34F458");
      } else {
        $("#bdate_error_message").html("Required");
        $("#bdate_error_message").show();
        $("#bdate").css("border-bottom","2px solid #F90A0A");
        error_bdate = true;
      }
    }

    function check_sex() {
    var sex = $("#sex").val();

      if (sex && sex !== '') {
        $("#sex_error_message").hide();
        $("#sex").css("border-bottom","3px solid #34F458");
      } else {
        $("#sex_error_message").html("Should select an item in the list");
        $("#sex_error_message").show();
        $("#sex").css("border-bottom","2px solid #F90A0A");
        error_sex = true;
      }
    }

    function check_religion() {
      var pattern = /^[a-zA-Z-. ]*$/;
      var religion = $("#religion").val();
  
        if (pattern.test(religion) && religion !== '') {
          $("#religion_error_message").hide();
          $("#religion").css("border-bottom","3px solid #34F458");
        } else {
          $("#religion_error_message").html("Required and should contain characters");
          $("#religion_error_message").show();
          $("#religion").css("border-bottom","2px solid #F90A0A");
          error_religion = true;
        }
      }
    
    function check_nationality() {
      var pattern = /^[a-zA-Z-. ]*$/;
      var nationality = $("#nationality").val();
  
        if (pattern.test(nationality) && nationality !== '') {
          $("#nationality_error_message").hide();
          $("#nationality").css("border-bottom","3px solid #34F458");
        } else {
          $("#nationality_error_message").html("Required and should contain characters");
          $("#nationality_error_message").show();
          $("#nationality").css("border-bottom","2px solid #F90A0A");
          error_nationality = true;
        }
      }

    function check_education() {
      var pattern = /^[a-zA-Z-. ]*$/;
      var education = $("#education").val();
  
        if (pattern.test(education) && education !== '') {
          $("#education_error_message").hide();
          $("#education").css("border-bottom","3px solid #34F458");
        } else {
          $("#education_error_message").html("Required and should contain characters");
          $("#education_error_message").show();
          $("#education").css("border-bottom","2px solid #F90A0A");
          error_education = true;
        }
      }
    
    function check_occupation() {
      var pattern = /^[a-zA-Z-. ]*$/;
      var occupation = $("#occupation").val();
  
        if (pattern.test(occupation) && occupation !== '') {
          $("#occupation_error_message").hide();
          $("#occupation").css("border-bottom","3px solid #34F458");
        } else {
          $("#occupation_error_message").html("Required and should contain characters");
          $("#occupation_error_message").show();
          $("#occupation").css("border-bottom","2px solid #F90A0A");
          error_occupation = true;
        }
      }
    
    function check_tel_no() {
      var pattern = /^[0-9]+$/;
      var telno = $("#tel_no").val();

        if (pattern.test(telno) && telno !== '') {
            $("#telno_error_message").hide();
            $("#tel_no").css("border-bottom","3px solid #34F458");
        } else {
            $("#telno_error_message").html("Required and should contain numbers");
            $("#telno_error_message").show();
            $("#tel_no").css("border-bottom","2px solid #F90A0A");
            error_telno = true;
        }
      }

    function check_cel_no() {
      var pattern = /^[0-9]+$/;
      var celno = $("#cel_no").val();

        if (pattern.test(celno) && celno !== '') {
            $("#celno_error_message").hide();
            $("#cel_no").css("border-bottom","3px solid #34F458");
        } else {
            $("#celno_error_message").html("Required and should contain numbers");
            $("#celno_error_message").show();
            $("#cel_no").css("border-bottom","2px solid #F90A0A");
            error_celno = true;
        }
      }

    function check_email_add() {
      var pattern = /^[a-zA-Z-.-@ ]*$/;
      var emailadd = $("#email_add").val();
  
        if (pattern.test(emailadd) && emailadd !== '') {
          $("#email_error_message").hide();
          $("#email_add").css("border-bottom","3px solid #34F458");
        } else {
          $("#email_error_message").html("Required and should contain characters");
          $("#email_error_message").show();
          $("#email_add").css("border-bottom","2px solid #F90A0A");
          error_email = true;
        }
      }
    
    function check_idNo() {
      var pattern = /^[0-9]+$/;
      var idno = $("#idNo").val();

        if (pattern.test(idno) && idno !== '') {
            $("#idNo_error_message").hide();
            $("#idNo").css("border-bottom","3px solid #34F458");
        } else {
            $("#idNo_error_message").html("Required and should contain numbers");
            $("#idNo_error_message").show();
            $("#idNo").css("border-bottom","2px solid #F90A0A");
            error_idNo = true;
        }
      }
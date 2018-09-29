    $(function() {
    // for donate blood
    $("#lname_error_message").hide();
    $("#fname_error_message").hide();
    $("#mname_error_message").hide();
    $("#age_error_message").hide();
    $("#birthmonth_error_message").hide();
    $("#birthday_error_message").hide();
    $("#birthyear_error_message").hide();
    $("#cstatus_error_message").hide();
    $("#sex_error_message").hide();
    $("#address_error_message").hide();
    $("#religion_error_message").hide();
    $("#nationality_error_message").hide();
    $("#education_error_message").hide();
    $("#occupation_error_message").hide();
    $("#contactnum_error_message").hide();
    $("#email_error_message").hide();
    $("#idNo_error_message").hide();
    $("#bloodbank_error_message").hide();
    // for request blood
    $("#lastname_error_message").hide();
    $("#firstname_error_message").hide();
    $("#middlename_error_message").hide();
    $("#reqmonth_error_message").hide();
    $("#reqday_error_message").hide();
    $("#reqyear_error_message").hide();
    $("#btype_error_message").hide();
    $("#hospital_error_message").hide();
    $("#roomnum_error_message").hide();
    $("#cellphonenum_error_message").hide();
    $("#physician_error_message").hide();
    $("#diagnosis_error_message").hide();
    

    // for donate blood
    var error_lname = false;
    var error_fname = false;
    var error_mname = false;
    var error_age = false;
    var error_bmonth = false;
    var error_bday = false;
    var error_byear = false;
    var error_cstatus = false;
    var error_sex = false;
    var error_address = false;
    var error_religion = false;
    var error_nationality = false;
    var error_education = false;
    var error_occupation = false;
    var error_contactnum = false;
    var error_email = false;
    var error_idNo = false;
    var error_bloodbank = false;
    // for request blood
    var error_reqlname = false;
    var error_reqfname = false;
    var error_reqmname = false;
    var error_reqmonth = false;
    var error_reqday = false;
    var error_reqyear = false;
    var error_btype = false;
    var error_hospital = false;
    var error_roomnum = false;
    var error_cellphonenum = false;
    var error_physician = false;
    var error_diagnosis = false;


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
        
    $("#birthmonth").focusout(function(){
      check_birthmonth();
      });

    $("#birthday").focusout(function(){
      check_birthday();
      });
      
    $("#birthyear").focusout(function(){
      check_birthyear();
      });
    
    $("#civilstatus").focusout(function(){
      check_cstatus();
      });

    $("#sex").focusout(function(){
      check_sex();
      });

    $("#address").focusout(function(){
      check_address();
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
    
    $("#contactnum").focusout(function(){
      check_contactnum();
      });
    
    $("#cel_no").focusout(function(){
      check_cel_no();
      });
            
    $("#email").focusout(function(){
      check_email_add();
      });
          
    $("#identificationno").focusout(function(){
      check_idNo();
      });

    $("#bloodbank").focusout(function(){
      check_bloodbank();
      });
    
    //for request blood

    $("#lastname").focusout(function(){
      check_lastname();
      });

    $("#middlename").focusout(function(){
      check_middlename();
      });
    
    $("#firstname").focusout(function(){
      check_firstname();
      });

    $("#requestmonth").focusout(function(){
      check_reqmonth();
      });
    
    $("#requestday").focusout(function(){
      check_reqday();
      });

    $("#requestyear").focusout(function(){
      check_reqyear();
      });

    $("#bloodtype").focusout(function(){
      check_btype();
      });

    $("#hospital").focusout(function(){
      check_hospital();
      });

    $("#roomnum").focusout(function(){
      check_roomnum();
      });

    $("#cellphonenum").focusout(function(){
      check_cellphonenum();
      });

    $("#physician").focusout(function(){
      check_physician();
      });

    $("#diagnosis").focusout(function(){
      check_diagnosis();
      });


    })
    
    
    //for donate blood
    function check_lname() {
      var pattern = /^[a-zA-Z-., ]*$/;
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
      var pattern = /^[a-zA-Z-., ]*$/;
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
      var pattern = /^[a-zA-Z-., ]*$/;
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

    function check_birthmonth() {
      var pattern = /^[0-9]+$/;
      var bmonth = $("#birthmonth").val();

        if (pattern.test(bmonth) && bmonth !== '') {
            $("#birthmonth_error_message").hide();
            $("#birthmonth").css("border-bottom","3px solid #34F458");
        } else {
            $("#birthmonth_error_message").html("Required and should contain numbers");
            $("#birthmonth_error_message").show();
            $("#birthmonth").css("border-bottom","2px solid #F90A0A");
            error_bmonth = true;
        }
      }

    function check_birthday() {
      var pattern = /^[0-9]+$/;
      var bday = $("#birthday").val();

        if (pattern.test(bday) && bday !== '') {
            $("#birthday_error_message").hide();
            $("#birthday").css("border-bottom","3px solid #34F458");
        } else {
            $("#birthday_error_message").html("Required and should contain numbers");
            $("#birthday_error_message").show();
            $("#birthday").css("border-bottom","2px solid #F90A0A");
            error_bday = true;
        }
      }

    function check_birthyear() {
      var pattern = /^[0-9]+$/;
      var byear = $("#birthyear").val();

        if (pattern.test(byear) && byear !== '') {
            $("#birthyear_error_message").hide();
            $("#birthyear").css("border-bottom","3px solid #34F458");
        } else {
            $("#birthyear_error_message").html("Required and should contain numbers");
            $("#birthyear_error_message").show();
            $("#birthyear").css("border-bottom","2px solid #F90A0A");
            error_byear = true;
        }
      }
    
    function check_cstatus() {
    var cstatus = $("#civilstatus").val();

      if (cstatus && cstatus !== '') {
        $("#cstatus_error_message").hide();
        $("#civilstatus").css("border-bottom","3px solid #34F458");
      } else {
        $("#cstatus_error_message").html("Should select an item in the list");
        $("#cstatus_error_message").show();
        $("#civilstatus").css("border-bottom","2px solid #F90A0A");
        error_cstatus = true;
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

    function check_address() {
      var pattern = /^[a-z0-9-,.#&* ]+$/i;
      var address = $("#address").val();
  
        if (pattern.test(address) && address !== '') {
          $("#address_error_message").hide();
          $("#address").css("border-bottom","3px solid #34F458");
        } else {
          $("#address_error_message").html("Required and should contain characters");
          $("#address_error_message").show();
          $("#address").css("border-bottom","2px solid #F90A0A");
          error_address = true;
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
    
    function check_contactnum() {
      var pattern = /^[0-9]+$/;
      var contactnum = $("#contactnum").val();

        if (pattern.test(contactnum) && contactnum !== '') {
            $("#contactnum_error_message").hide();
            $("#contactnum").css("border-bottom","3px solid #34F458");
        } else {
            $("#contactnum_error_message").html("Required and should contain numbers");
            $("#contactnum_error_message").show();
            $("#contactnum").css("border-bottom","2px solid #F90A0A");
            error_contactnum = true;
        }
      }
  
    function check_email_add() {
      var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
      var emailadd = $("#email").val();
  
        if (pattern.test(emailadd) && emailadd !== '') {
          $("#email_error_message").hide();
          $("#email").css("border-bottom","3px solid #34F458");
        } else {
          $("#email_error_message").html("Please match the requested format (sample@sample.com)");
          $("#email_error_message").show();
          $("#email").css("border-bottom","2px solid #F90A0A");
          error_email = true;
        }
      }
    
    function check_idNo() {
      var pattern = /^[0-9--]+$/;
      var idno = $("#identificationno").val();

        if (pattern.test(idno) && idno !== '') {
            $("#idNo_error_message").hide();
            $("#identificationno").css("border-bottom","3px solid #34F458");
        } else {
            $("#idNo_error_message").html("Required and should contain numbers");
            $("#idNo_error_message").show();
            $("#identificationno").css("border-bottom","2px solid #F90A0A");
            error_idNo = true;
        }
      }

    function check_bloodbank() {
    var bloodbank = $("#bloodbank").val();

      if (bloodbank && bloodbank !== '') {
        $("#bloodbank_error_message").hide();
        $("#bloodbank").css("border-bottom","3px solid #34F458");
      } else {
        $("#bloodbank_error_message").html("Should select an item in the list");
        $("#bloodbank_error_message").show();
        $("#bloodbank").css("border-bottom","2px solid #F90A0A");
        error_bloodbank = true;
      }
    }

    // for request blood
    function check_lastname() {
      var pattern = /^[a-zA-Z-., ]*$/;
      var lastname = $("#lastname").val();
  
        if (pattern.test(lastname) && lastname !== '') {
          $("#lastname_error_message").hide();
          $("#lastname").css("border-bottom","3px solid #34F458");
        } else {
          $("#lastname_error_message").html("Required and should contain characters");
          $("#lname_error_message").show();
          $("#lastname").css("border-bottom","2px solid #F90A0A");
          error_reqlname = true;
        }
      }
  
    function check_firstname() {
       var pattern = /^[a-zA-Z-. ]*$/;
       var firstname = $("#firstname").val();
  
         if (pattern.test(firstname) && firstname !== '') {
           $("#firstname_error_message").hide();
           $("#firstname").css("border-bottom","3px solid #34F458");
         } else {
           $("#firstname_error_message").html("Required and should contain characters");
           $("#firstname_error_message").show();
           $("#firstname").css("border-bottom","2px solid #F90A0A");
           error_reqfname = true;
         }
       }

    function check_middlename() {
       var pattern = /^[a-zA-Z-. ]*$/;
       var middlename = $("#middlename").val();
  
         if (pattern.test(middlename) && middlename !== '') {
           $("#middlename_error_message").hide();
           $("#middlename").css("border-bottom","3px solid #34F458");
         } else {
           $("#middlename_error_message").html("Required and should contain characters");
           $("#middlename_error_message").show();
           $("#middlename").css("border-bottom","2px solid #F90A0A");
           error_reqmname = true;
         }
       }
    
    function check_reqmonth() {
      var pattern = /^[0-9]+$/;
      var reqmonth = $("#requestmonth").val();

        if (pattern.test(reqmonth) && reqmonth !== '') {
            $("#reqmonth_error_message").hide();
            $("#requestmonth").css("border-bottom","3px solid #34F458");
        } else {
            $("#reqmonth_error_message").html("Required and should contain numbers");
            $("#reqmonth_error_message").show();
            $("#requestmonth").css("border-bottom","2px solid #F90A0A");
            error_reqmonth = true;
        }
      }

    function check_reqday() {
      var pattern = /^[0-9]+$/;
      var reqday = $("#requestday").val();

        if (pattern.test(reqday) && reqday !== '') {
            $("#reqday_error_message").hide();
            $("#requestday").css("border-bottom","3px solid #34F458");
        } else {
            $("#reqday_error_message").html("Required and should contain numbers");
            $("#reqday_error_message").show();
            $("#requestday").css("border-bottom","2px solid #F90A0A");
            error_reqday = true;
        }
      }

    function check_reqyear() {
      var pattern = /^[0-9]+$/;
      var reqyear = $("#requestyear").val();

        if (pattern.test(reqyear) && reqyear !== '') {
            $("#reqyear_error_message").hide();
            $("#requestyear").css("border-bottom","3px solid #34F458");
        } else {
            $("#reqyear_error_message").html("Required and should contain numbers");
            $("#reqyear_error_message").show();
            $("#requestyear").css("border-bottom","2px solid #F90A0A");
            error_reqyear = true;
        }
      }

    function check_btype() {
    var btype = $("#bloodtype").val();

      if (btype && btype !== '') {
        $("#btype_error_message").hide();
        $("#bloodtype").css("border-bottom","3px solid #34F458");
      } else {
        $("#btype_error_message").html("Should select an item in the list");
        $("#btype_error_message").show();
        $("#bloodtype").css("border-bottom","2px solid #F90A0A");
        error_btype = true;
      }
    }

    function check_hospital() {
      var pattern = /^[a-z0-9-,.#&* ]+$/i;
      var hospital = $("#hospital").val();
  
        if (pattern.test(hospital) && hospital !== '') {
          $("#hospital_error_message").hide();
          $("#hospital").css("border-bottom","3px solid #34F458");
        } else {
          $("#hospital_error_message").html("Required and should contain characters");
          $("#hospital_error_message").show();
          $("#hospital").css("border-bottom","2px solid #F90A0A");
          error_hospital = true;
        }
      }

    function check_roomnum() {
      var pattern = /^[0-9--]+$/;
      var roomno = $("#roomnum").val();

        if (pattern.test(roomno) && roomno !== '') {
            $("#roomnum_error_message").hide();
            $("#roomnum").css("border-bottom","3px solid #34F458");
        } else {
            $("#roomnum_error_message").html("Required and should contain numbers");
            $("#roomnum_error_message").show();
            $("#roomnum").css("border-bottom","2px solid #F90A0A");
            error_roomnum = true;
        }
      }

    function check_cellphonenum() {
      var pattern = /^[0-9]+$/;
      var cellphoneno = $("#cellphonenum").val();

        if (pattern.test(cellphoneno) && cellphoneno !== '') {
            $("#cellphonenum_error_message").hide();
            $("#cellphonenum").css("border-bottom","3px solid #34F458");
        } else {
            $("#cellphonenum_error_message").html("Required and should contain numbers");
            $("#cellphonenumm_error_message").show();
            $("#cellphonenum").css("border-bottom","2px solid #F90A0A");
            error_cellphonenum = true;
        }
      }

    function check_physician() {
      var pattern = /^[a-zA-Z-., ]*$/;
      var physician = $("#physician").val();
  
        if (pattern.test(physician) && physician !== '') {
          $("#physician_error_message").hide();
          $("#physician").css("border-bottom","3px solid #34F458");
        } else {
          $("#physician_error_message").html("Required and should contain characters");
          $("#physician_error_message").show();
          $("#physician").css("border-bottom","2px solid #F90A0A");
          error_physician = true;
        }
      }

    function check_diagnosis() {
      var pattern = /^[a-z0-9-,.#&* ]+$/i;
      var diagnosis = $("#diagnosis").val();
  
        if (pattern.test(diagnosis) && diagnosis !== '') {
          $("#diagnosis_error_message").hide();
          $("#diagnosis").css("border-bottom","3px solid #34F458");
        } else {
          $("#diagnosis_error_message").html("Required and should contain characters");
          $("#diagnosis_error_message").show();
          $("#diagnosis").css("border-bottom","2px solid #F90A0A");
          error_diagnosis = true;
        }
      }
    
    

    

    


    

    $(function() {
    // for donate blood
    $("#lname_error_message").hide();
    $("#fname_error_message").hide();
    $("#mname_error_message").hide();
    $("#day_error_message").hide();
    $("#month_error_message").hide();
    $("#year_error_message").hide();
    $("#contactno_error_message").hide();
    $("#address_error_message").hide();
    // $("#age_error_message").hide();
    // $("#bdate_error_message").hide();
    // $("#sex_error_message").hide();
    // $("#religion_error_message").hide();
    // $("#nationality_error_message").hide();
    // $("#education_error_message").hide();
    // $("#occupation_error_message").hide();
    // $("#telno_error_message").hide();
    // $("#celno_error_message").hide();
    // $("#email_error_message").hide();
    // $("#idNo_error_message").hide();

    // for request blood
    // $("#lastname_error_message").hide();
    // $("#firstname_error_message").hide();
    // $("#middlename_error_message").hide();
    // $("#reqage_error_message").hide();
    // $("reqbdate_error_message").hide();
    // $("#reqsex_error_message").hide();
    // $("#hospital_error_message").hide();
    // $("#roomno_error_message").hide();
    // $("#reqtelno_error_message").hide();
    // $("#bloodtype_error_message").hide();
    // $("#reqcelno_error_message").hide();

    // for donate blood
    var error_lname = false;
    var error_fname = false;
    var error_mname = false;
    var error_day = false;
    var error_month = false;
    var error_year = false;
    var error_contactno = false;
    var error_address = false;
    // var error_age = false;
    // var error_bdate = false;
    // var error_sex = false;
    // var error_religion = false;
    // var error_nationality = false;
    // var error_education = false;
    // var error_occupation = false;
    // var error_telno = false;
    // var error_celno = false;
    // var error_email = false;
    // var error_idNo = false;

    // // for request blood
    // var error_reqlname = false;
    // var error_reqfname = false;
    // var error_reqmname = false;
    // var error_reqage = false;
    // var error_reqbdate = false;
    // var error_reqsex = false;
    // var error_hospital = false;
    // var error_roomno = false;
    // var error_reqtelno = false;
    // var error_bloodtype = false;
    // var error_reqcelno = false;

    // for donate blood
    $("#lname").focusout(function(){
      check_lname();
      });
    
    $("#fname").focusout(function(){
      check_fname();
      });
      
    $("#mname").focusout(function(){
      check_mname();
      });
    
    $("#day").focusout(function(){
      check_day();
      });
    
    $("#month").focusout(function(){
      check_month();
      });

    $("#year").focusout(function(){
      check_year();
      });
    
    $("#contactno").focusout(function(){
      check_contactno();
      });

    $("#address").focusout(function(){
      check_address();
      });
    // $("#age").focusout(function(){
    //   check_age();
    //   });
        
    // $("#bdate").focusout(function(){
    //   check_bdate();
    //   });

    // $("#sex").focusout(function(){
    //   check_sex();
    //   });
      
    // $("#religion").focusout(function(){
    //   check_religion();
    //   });
        
    // $("#nationality").focusout(function(){
    //   check_nationality();
    //   });
      
    // $("#education").focusout(function(){
    //   check_education();
    //   });
          
    // $("#occupation").focusout(function(){
    //   check_occupation();
    //   });
    
    // $("#tel_no").focusout(function(){
    //   check_tel_no();
    //   });
    
    // $("#cel_no").focusout(function(){
    //   check_cel_no();
    //   });
            
    // $("#email_add").focusout(function(){
    //   check_email_add();
    //   });
          
    // $("#idNo").focusout(function(){
    //   check_idNo();
    //   });
    
    })
    
    // //for request blood
    // $("#lastname").focusout(function(){
    //   check_lastname();
    //   });

    // $("#middlename").focusout(function(){
    //   check_middlename();
    //   });
    
    // $("#firstname").focusout(function(){
    //   check_firstname();
    //   });

    // $("#reqage").focusout(function(){
    //   check_reqage();
    //   });
    
    // $("#reqbdate").focusout(function(){
    //   check_reqbdate();
    //   });

    // $("#reqsex").focusout(function(){
    //   check_reqsex();
    //   });

    // $("#hospital").focusout(function(){
    //   check_hospital();
    //   });
    
    // $("#roomno").focusout(function(){
    //   check_roomno();
    //   });

    // $("#reqtelno").focusout(function(){
    //   check_reqtelno();
    //   });
    
    // $("#bloodtype").focusout(function(){
    //   check_bloodtype();
    //   });

    // $("#reqcelno").focusout(function(){
    //   check_reqcelno();
    //   });
    
    //for donate blood
    function check_lname() {
      var pattern = /^[a-zA-Z-. ]*$/;
      var lname = $("#lname").val();
  
        if (pattern.test(lname) && lname !== '') {
          $("#lname_error_message").hide();
          $("#lname").css("border-bottom","3px solid #34F458");
        } else {
          $("#lname_error_message").html("Required and should contain characters");
          $("#lname_error_message").show();
          $("#lname").css("border-bottom","2px solid #F90A0A");
          error_lname = true;
        }
      }
  
    function check_fname() {
      var pattern = /^[a-zA-Z-. ]*$/;
      var fname = $("#fname").val();
  
        if (pattern.test(fname) && fname !== '') {
          $("#fname_error_message").hide();
          $("#fname").css("border-bottom","3px solid #34F458");
        } else {
          $("#fname_error_message").html("Required and should contain characters");
          $("#fname_error_message").show();
          $("#fname").css("border-bottom","2px solid #F90A0A");
          error_fname = true;
        }
      }

    function check_mname() {
      var pattern = /^[a-zA-Z-. ]*$/;
      var mname = $("#mname").val();
  
        if (pattern.test(mname) && mname !== '') {
          $("#mname_error_message").hide();
          $("#mname").css("border-bottom","3px solid #34F458");
        } else {
          $("#mname_error_message").html("Required and should contain characters");
          $("#mname_error_message").show();
          $("#mname").css("border-bottom","2px solid #F90A0A");
          error_mname = true;
        }
      }
    
    function check_day() {
      var day = $("#day").val();

       if (day && day !== '') {
         $("#day_error_message").hide();
         $("#day").css("border-bottom","3px solid #34F458");
       } else {
         $("#day_error_message").html("Should select an item in the list");
         $("#day_error_message").show();
         $("#day").css("border-bottom","2px solid #F90A0A");
         error_day = true;
       }
     }
    
    function check_month() {
      var month = $("#month").val();

       if (month && month !== '') {
         $("#month_error_message").hide();
         $("#month").css("border-bottom","3px solid #34F458");
       } else {
         $("#month_error_message").html("Should select an item in the list");
         $("#month_error_message").show();
         $("#month").css("border-bottom","2px solid #F90A0A");
         error_month = true;
       }
     }

    function check_year() {
      var year = $("#year").val();

       if (year && year !== '') {
         $("#year_error_message").hide();
         $("#year").css("border-bottom","3px solid #34F458");
       } else {
         $("#year_error_message").html("Should select an item in the list");
         $("#year_error_message").show();
         $("#year").css("border-bottom","2px solid #F90A0A");
         error_year = true;
       }
     }

    function check_contactno() {
       var pattern = /^[0-9]+$/;
       var contactno = $("#contactno").val();

         if (pattern.test(contactno) && contactno !== '') {
             $("#contactno_error_message").hide();
             $("#contactno").css("border-bottom","3px solid #34F458");
         } else {
             $("#contactno_error_message").html("Required and should contain numbers");
             $("#contactno_error_message").show();
             $("#contactno").css("border-bottom","2px solid #F90A0A");
             error_contactno = true;
         }
       }
    
    function check_address() {
      var pattern = /^[a-zA-Z-. ]*$/;
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
    

    // function check_age() {
    //   var pattern = /^[0-9]+$/;
    //   var age = $("#age").val();

    //     if (pattern.test(age) && age !== '') {
    //         $("#age_error_message").hide();
    //         $("#age").css("border-bottom","3px solid #34F458");
    //     } else {
    //         $("#age_error_message").html("Required and should contain numbers");
    //         $("#age_error_message").show();
    //         $("#age").css("border-bottom","2px solid #F90A0A");
    //         error_age = true;
    //     }
    //   }

    // function check_bdate() {
    // var bdate = $("#bdate").val();

    //   if (bdate && bdate !== '') {
    //     $("#bdate_error_message").hide();
    //     $("#bdate").css("border-bottom","3px solid #34F458");
    //   } else {
    //     $("#bdate_error_message").html("Required");
    //     $("#bdate_error_message").show();
    //     $("#bdate").css("border-bottom","2px solid #F90A0A");
    //     error_bdate = true;
    //   }
    // }

    // function check_sex() {
    // var sex = $("#sex").val();

    //   if (sex && sex !== '') {
    //     $("#sex_error_message").hide();
    //     $("#sex").css("border-bottom","3px solid #34F458");
    //   } else {
    //     $("#sex_error_message").html("Should select an item in the list");
    //     $("#sex_error_message").show();
    //     $("#sex").css("border-bottom","2px solid #F90A0A");
    //     error_sex = true;
    //   }
    // }

    // function check_religion() {
    //   var pattern = /^[a-zA-Z-. ]*$/;
    //   var religion = $("#religion").val();
  
    //     if (pattern.test(religion) && religion !== '') {
    //       $("#religion_error_message").hide();
    //       $("#religion").css("border-bottom","3px solid #34F458");
    //     } else {
    //       $("#religion_error_message").html("Required and should contain characters");
    //       $("#religion_error_message").show();
    //       $("#religion").css("border-bottom","2px solid #F90A0A");
    //       error_religion = true;
    //     }
    //   }
    
    // function check_nationality() {
    //   var pattern = /^[a-zA-Z-. ]*$/;
    //   var nationality = $("#nationality").val();
  
    //     if (pattern.test(nationality) && nationality !== '') {
    //       $("#nationality_error_message").hide();
    //       $("#nationality").css("border-bottom","3px solid #34F458");
    //     } else {
    //       $("#nationality_error_message").html("Required and should contain characters");
    //       $("#nationality_error_message").show();
    //       $("#nationality").css("border-bottom","2px solid #F90A0A");
    //       error_nationality = true;
    //     }
    //   }

    // function check_education() {
    //   var pattern = /^[a-zA-Z-. ]*$/;
    //   var education = $("#education").val();
  
    //     if (pattern.test(education) && education !== '') {
    //       $("#education_error_message").hide();
    //       $("#education").css("border-bottom","3px solid #34F458");
    //     } else {
    //       $("#education_error_message").html("Required and should contain characters");
    //       $("#education_error_message").show();
    //       $("#education").css("border-bottom","2px solid #F90A0A");
    //       error_education = true;
    //     }
    //   }
    
    // function check_occupation() {
    //   var pattern = /^[a-zA-Z-. ]*$/;
    //   var occupation = $("#occupation").val();
  
    //     if (pattern.test(occupation) && occupation !== '') {
    //       $("#occupation_error_message").hide();
    //       $("#occupation").css("border-bottom","3px solid #34F458");
    //     } else {
    //       $("#occupation_error_message").html("Required and should contain characters");
    //       $("#occupation_error_message").show();
    //       $("#occupation").css("border-bottom","2px solid #F90A0A");
    //       error_occupation = true;
    //     }
    //   }
    
    // function check_tel_no() {
    //   var pattern = /^[0-9]+$/;
    //   var reqtelno = $("#tel_no").val();

    //     if (pattern.test(reqtelno) && reqtelno !== '') {
    //         $("#telno_error_message").hide();
    //         $("#tel_no").css("border-bottom","3px solid #34F458");
    //     } else {
    //         $("#telno_error_message").html("Required and should contain numbers");
    //         $("#telno_error_message").show();
    //         $("#tel_no").css("border-bottom","2px solid #F90A0A");
    //         error_telno = true;
    //     }
    //   }
    
    // function check_bloodtype() {
    // var btype = $("#bloodtype").val();

    //   if (btype && btype !== '') {
    //     $("#bloodtype_error_message").hide();
    //     $("#bloodtype").css("border-bottom","3px solid #34F458");
    //   } else {
    //     $("#bloodtype_error_message").html("Should select an item in the list");
    //     $("#bloodtype_error_message").show();
    //     $("#bloodtype").css("border-bottom","2px solid #F90A0A");
    //     error_bloodtype = true;
    //   }
    // }

    // function check_cel_no() {
    //   var pattern = /^[0-9]+$/;
    //   var reqcelno = $("#cel_no").val();

    //     if (pattern.test(reqcelno) && reqcelno !== '') {
    //         $("#celno_error_message").hide();
    //         $("#cel_no").css("border-bottom","3px solid #34F458");
    //     } else {
    //         $("#celno_error_message").html("Required and should contain numbers");
    //         $("#celno_error_message").show();
    //         $("#cel_no").css("border-bottom","2px solid #F90A0A");
    //         error_celno = true;
    //     }
    //   }

    // function check_email_add() {
    //   var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
    //   var emailadd = $("#email_add").val();
  
    //     if (pattern.test(emailadd) && emailadd !== '') {
    //       $("#email_error_message").hide();
    //       $("#email_add").css("border-bottom","3px solid #34F458");
    //     } else {
    //       $("#email_error_message").html("Please match the requested format (sample@sample.com)");
    //       $("#email_error_message").show();
    //       $("#email_add").css("border-bottom","2px solid #F90A0A");
    //       error_email = true;
    //     }
    //   }
    
    // function check_idNo() {
    //   var pattern = /^[0-9]+$/;
    //   var idno = $("#idNo").val();

    //     if (pattern.test(idno) && idno !== '') {
    //         $("#idNo_error_message").hide();
    //         $("#idNo").css("border-bottom","3px solid #34F458");
    //     } else {
    //         $("#idNo_error_message").html("Required and should contain numbers");
    //         $("#idNo_error_message").show();
    //         $("#idNo").css("border-bottom","2px solid #F90A0A");
    //         error_idNo = true;
    //     }
    //   }

    // //for request blood
    // function check_lastname() {
    //   var pattern = /^[a-zA-Z-. ]*$/;
    //   var lastname = $("#lastname").val();
  
    //     if (pattern.test(lastname) && lastname !== '') {
    //       $("#lastname_error_message").hide();
    //       $("#lastname").css("border-bottom","3px solid #34F458");
    //     } else {
    //       $("#lastname_error_message").html("Required and should contain characters");
    //       $("#lastname_error_message").show();
    //       $("#lastname").css("border-bottom","2px solid #F90A0A");
    //       error_reqlname = true;
    //     }
    //   }
  
    // function check_firstname() {
    //   var pattern = /^[a-zA-Z-. ]*$/;
    //   var firstname = $("#firstname").val();
  
    //     if (pattern.test(firstname) && firstname !== '') {
    //       $("#firstname_error_message").hide();
    //       $("#firstname").css("border-bottom","3px solid #34F458");
    //     } else {
    //       $("#firstname_error_message").html("Required and should contain characters");
    //       $("#firstname_error_message").show();
    //       $("#firstname").css("border-bottom","2px solid #F90A0A");
    //       error_reqfname = true;
    //     }
    //   }

    // function check_middlename() {
    //   var pattern = /^[a-zA-Z-. ]*$/;
    //   var middlename = $("#middlename").val();
  
    //     if (pattern.test(middlename) && middlename !== '') {
    //       $("#middlename_error_message").hide();
    //       $("#middlename").css("border-bottom","3px solid #34F458");
    //     } else {
    //       $("#middlename_error_message").html("Required and should contain characters");
    //       $("#middlename_error_message").show();
    //       $("#middlename").css("border-bottom","2px solid #F90A0A");
    //       error_mname = true;
    //     }
    //   }

    // function check_reqage() {
    //   var pattern = /^[0-9]+$/;
    //   var reqage = $("#reqage").val();

    //     if (pattern.test(reqage) && reqage !== '') {
    //         $("#reqage_error_message").hide();
    //         $("#reqage").css("border-bottom","3px solid #34F458");
    //     } else {
    //         $("#reqage_error_message").html("Required and should contain numbers");
    //         $("#reqage_error_message").show();
    //         $("#reqage").css("border-bottom","2px solid #F90A0A");
    //         error_reqage = true;
    //     }
    //   }
    
    // function check_reqbdate() {
    // var reqbdate = $("#reqbdate").val();

    //   if (reqbdate && reqbdate !== '') {
    //     $("#reqbdate_error_message").hide();
    //     $("#reqbdate").css("border-bottom","3px solid #34F458");
    //   } else {
    //     $("#reqbdate_error_message").html("Required");
    //     $("#reqbdate_error_message").show();
    //     $("#reqbdate").css("border-bottom","2px solid #F90A0A");
    //     error_reqbdate = true;
    //   }
    // }

    // function check_reqsex() {
    //   var reqsex = $("#reqsex").val();
  
    //     if (reqsex && reqsex !== '') {
    //       $("#reqsex_error_message").hide();
    //       $("#reqsex").css("border-bottom","3px solid #34F458");
    //     } else {
    //       $("#reqsex_error_message").html("Should select an item in the list");
    //       $("#reqsex_error_message").show();
    //       $("#reqsex").css("border-bottom","2px solid #F90A0A");
    //       error_reqsex = true;
    //     }
    //   }
    
    // function check_hospital() {
    //   var pattern = /^[a-zA-Z-. ]*$/;
    //   var hospital = $("#hospital").val();
  
    //     if (pattern.test(hospital) && hospital !== '') {
    //       $("#hospital_error_message").hide();
    //       $("#hospital").css("border-bottom","3px solid #34F458");
    //     } else {
    //       $("#hospital_error_message").html("Required and should contain characters");
    //       $("#hospital_error_message").show();
    //       $("#hospital").css("border-bottom","2px solid #F90A0A");
    //       error_hospital = true;
    //     }
    //   }

    // function check_roomno() {
    //   var pattern = /^[0-9]+$/;
    //   var roomno = $("#roomno").val();

    //     if (pattern.test(roomno) && roomno !== '') {
    //         $("#roomno_error_message").hide();
    //         $("#roomno").css("border-bottom","3px solid #34F458");
    //     } else {
    //         $("#roomno_error_message").html("Required and should contain numbers");
    //         $("#roomno_error_message").show();
    //         $("#roomno").css("border-bottom","2px solid #F90A0A");
    //         error_roomno = true;
    //     }
    //   }
    
    

    

    


    

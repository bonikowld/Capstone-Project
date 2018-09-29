    $(function() {
    // for registration
    $("#lname_error_message").hide();
    $("#fname_error_message").hide();
    $("#mname_error_message").hide();
    $("#day_error_message").hide();
    $("#month_error_message").hide();
    $("#year_error_message").hide();
    $("#contactno_error_message").hide();
    $("#address_error_message").hide();
    $("#user_error_message").hide();
    $("#emailadd_error_message").hide();
    $("#pass_error_message").hide();
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
    var error_username = false;
    var error_emailadd = false;
    var error_pass = false;

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

    $("#username").focusout(function(){
      check_username();
      });

    $("#emailadd").focusout(function(){
      check_emailadd();
      });

    $("#pass").focusout(function(){
      check_pass();
      });
    
    
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
      var pattern = /^[0-9]+$/;
      var day = $("#day").val();

       if (pattern.test(day) && day !== '') {
         $("#day_error_message").hide();
         $("#day").css("border-bottom","3px solid #34F458");
       } else {
         $("#day_error_message").show();
         $("#day").css("border-bottom","2px solid #F90A0A");
         error_day = true;
       }
     }
    
    function check_month() {
      var pattern = /^[0-9]+$/;
      var month = $("#month").val();

       if (pattern.test(month) && month !== '') {
         $("#month_error_message").hide();
         $("#month").css("border-bottom","3px solid #34F458");
       } else {
         $("#month_error_message").show();
         $("#month").css("border-bottom","2px solid #F90A0A");
         error_month = true;
       }
     }

    function check_year() {
      var pattern = /^[0-9]+$/;
      var year = $("#year").val();

       if (pattern.test(year) && year !== '') {
         $("#year_error_message").hide();
         $("#year").css("border-bottom","3px solid #34F458");
       } else {
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

    function check_username() {
      var pattern = /^[a-z0-9-,.#&* ]+$/i;
      var users = $("#username").val();
  
        if (pattern.test(users) && users !== '') {
          $("#user_error_message").hide();
          $("#username").css("border-bottom","3px solid #34F458");
        } else {
          $("#user_error_message").html("Required and should contain characters");
          $("#user_error_message").show();
          $("#username").css("border-bottom","2px solid #F90A0A");
          error_username = true;
        }
      }

    function check_emailadd() {
      var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
      var email = $("#emailadd").val();
  
        if (pattern.test(email) && email !== '') {
          $("#emailadd_error_message").hide();
          $("#emailadd").css("border-bottom","3px solid #34F458");
        } else {
          $("#emailadd_error_message").html("Please match the requested format (sample@sample.com)");
          $("#emailadd_error_message").show();
          $("#emailadd").css("border-bottom","2px solid #F90A0A");
          error_emailadd = true;
        }
      }

    
    function check_pass() {
      var pattern = /^[a-z0-9-,.#&* ]+$/i;
      var password = $("#pass").val();
  
        if (pattern.test(password) && password !== '') {
          $("#pass_error_message").hide();
          $("#pass").css("border-bottom","3px solid #34F458");
        } else {
          $("#pass_error_message").html("Required and should contain characters");
          $("#pass_error_message").show();
          $("#pass").css("border-bottom","2px solid #F90A0A");
          error_pass = true;
        }
      }
    
    
    

    

    


    

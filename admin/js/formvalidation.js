    $(function() {
    
    $("#snum_error_message").hide();
    $("#dname_error_message").hide();
    $("#quantity_error_message").hide();
    $("#btype_error_message").hide();
    $("#component_error_message").hide();
    $("#extdate_error_message").hide();
    $("#expdate_error_message").hide();
    
    var error_snum = false;
    var error_dname = false;
    var error_quantity = false;
    var error_btype = false;
    var error_component = false;
    var error_extdate = false;
    var error_expdate = false;

    $("#serialnumber").focusout(function(){
        check_snum();
        });

    $("#donor").focusout(function(){
        check_dname();
        });
                
    $("#quantity").focusout(function() {
        check_quantity();
        });
    
    $("#bloodtype").focusout(function() {
        check_btype();
        });
    
    $("#component").focusout(function() {
        check_component();
        });
  
    $("#extractiondate").focusout(function() {
        check_extdate();
        });

    $("#expirationdate").focusout(function() {
        check_expdate();
        });

    })
    
    function check_snum() {
    var pattern = /^\w{4}-\w{6}-\w{1}$/;
    var snum = $("#serialnumber").val();

      if (pattern.test(snum) && snum !== '') {
        $("#snum_error_message").hide();
        $("#serialnumber").css("border-bottom","2px solid #34F458");
      } else {
        $("#snum_error_message").html("Not a serial number");
        $("#snum_error_message").show();
        $("#serialnumber").css("border-bottom","2px solid #F90A0A");
        error_snum = true;
      }
    }

    function check_dname() {
    var pattern = /^[a-zA-Z-. ]*$/;
    var dname = $("#donor").val();

      if (pattern.test(dname) && dname !== '') {
        $("#dname_error_message").hide();
        $("#donor").css("border-bottom","2px solid #34F458");
      } else {
        $("#dname_error_message").html("Should contain only Characters");
        $("#dname_error_message").show();
        $("#donor").css("border-bottom","2px solid #F90A0A");
        error_dname = true;
      }
    }

    function check_quantity() {
    var pattern = /^[0-9]+$/;
    var quantity = $("#quantity").val();

      if (pattern.test(quantity) && quantity !== '') {
        $("#quantity_error_message").hide();
        $("#quantity").css("border-bottom","2px solid #34F458");
      } else {
        $("#quantity_error_message").html("Should contain only numbers");
        $("#quantity_error_message").show();
        $("#quantity").css("border-bottom","2px solid #F90A0A");
        error_quantity = true;
      }
    }

    function check_btype() {
    var btype = $("#bloodtype").val();

      if (btype && btype !== '') {
        $("#btype_error_message").hide();
        $("#bloodtype").css("border-bottom","2px solid #34F458");
      } else {
        $("#btype_error_message").html("Should select an item in the list");
        $("#btype_error_message").show();
        $("#bloodtype").css("border-bottom","2px solid #F90A0A");
        error_btype = true;
      }
    }

    function check_component() {
    var cmpnt = $("#component").val();

      if (cmpnt && cmpnt !== '') {
        $("#component_error_message").hide();
        $("#component").css("border-bottom","2px solid #34F458");
      } else {
        $("#component_error_message").html("Should select an item in the list");
        $("#component_error_message").show();
        $("#component").css("border-bottom","2px solid #F90A0A");
        error_component = true;
      }
    }

    function check_extdate() {
    var extdate = $("#extractiondate").val();

      if (extdate && extdate !== '') {
        $("#extdate_error_message").hide();
        $("#extractiondate").css("border-bottom","2px solid #34F458");
      } else {
        $("#extdate_error_message").html("Extraction Date is required");
        $("#extdate_error_message").show();
        $("#extractiondate").css("border-bottom","2px solid #F90A0A");
        error_extdate = true;
      }
    }

    function check_expdate() {
    var expdate = $("#expirationdate").val();

      if (expdate && expdate !== '') {
        $("#expdate_error_message").hide();
        $("#expirationdate").css("border-bottom","2px solid #34F458");
      } else {
        $("#expdate_error_message").html("Expiration Date is required");
        $("#expdate_error_message").show();
        $("#expirationdate").css("border-bottom","2px solid #F90A0A");
        error_extdate = true;
      }
    }

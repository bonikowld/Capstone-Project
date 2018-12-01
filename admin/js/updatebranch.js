// data-toggle='modal' data-target='#myModal'
$('.row-data').click(function(){
    $('#updateModal .adminname').text( $('.adminname', this).text() );
    $('#updateModal .contactnumber').text( $('.contactnumber', this).text() );
    $('#updateModal .email').text( $('.email', this).text() );
    $('#updateModal .username').text( $('.username', this).text() );
    $('#updateModal .password').text( $('.password', this).text() );
    
    
    document.getElementById("adminname").value = $('.adminname', this).text();
    document.getElementById("contactnumber").value = $('.contactnumber', this).text();
    document.getElementById("email").value = $('.email', this).text();
    document.getElementById("username").value = $('.username', this).text();
    document.getElementById("password").value = $('.password', this).text();
    

    $('#updateModal').modal();
  });
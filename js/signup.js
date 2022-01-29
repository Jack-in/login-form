
$(document).ready(function(){
    var error1;
    $('form.regForm').submit(function(e){
        e.preventDefault();
        var un = $("#username").val();
        var em = $("#email").val();
        var pw1 = $("#password_1").val();
        var pw2 = $("#password_2").val();
        //alert(un);
        $.ajax({
            type: "POST",
            url: "signup_server.php",
            data:{
                reg_user: 1,
                username: un,
                email: em,
                password_1: pw1,
                password_2: pw2
            }, 
            success: function (data) {
                //console.log(response);
                //console.log(data);
                error1 = data;
                  //$.ajax({
                    // type: "POST",
                    // url: "registration.php",
                    // data:{
                    //     errors: 1,
                    //     error: error1.trim()
                    //  }, 
                    //  success: function () {
                    //   //     //console.log(response);
                    //   //     console.log(data);
                      $("#div_refresh").load("errors.php", {error: error1.trim()});
                     
                     
                   // datatype: 'text'
                  //  });
                
            },
            datatype: 'text'
            
        });
       
    })

});





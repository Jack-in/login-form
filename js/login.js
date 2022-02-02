$(document).ready(function(){
    var error1;
    $('form.login_form').submit(function(e){
        e.preventDefault();
        var un = $("#username").val();
        var pw1 = $("#password_1").val();
        //console.log(un);
        $.ajax({
            type: "POST",
            url: "login_server.php",
            data:{
                login_user: 1,
                username: un,
                password_1: pw1
            }, 
            success: function (data) {
                //console.log(response);
                console.log(data);
                error1 = data;
                 user = un;
                $("#div_refresh").load("errors.php", {error: error1.trim(), user});
            },
            datatype: 'text'
            
        });
       
    })

});

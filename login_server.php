<?php

if(isset($_POST["login_user"]))
{

    $username = $_POST['username'];
    $password1 =  $_POST['password_1'];

    require_once 'dbh.php';
    require_once 'functions.php';

    if (emptyInputLogin($username, $password1)!==false){
        echo ("emptyinput");
        exit();
    }
    loginUser($conn, $username, $password1);
}
else{
    header("location: login.php");
    exit();
}

   

   
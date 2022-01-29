
<?php

// define('DB_NAME', 'register_db');
// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_HOST', 'localhost');


// // $serverName = "localhost";
// // $dBUsername = "root";
// // $dBPassword = "";
// // $dbName = "register_db";

// $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// mysqli_set_charset($conn, 'utf8');
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
// echo "success";
   

if(isset($_POST["reg_user"]))
{

    $username = $_POST['username'];
    $email =  $_POST['email'];
    $password1 =  $_POST['password_1'];
    $password2 =  $_POST['password_2'];
    //$sql = "INSERT INTO users ( firstName, email, password1,) VALUES ('$username', '$email', '$password1')";
    // $sql = $conn->prepare("INSERT INTO users (firstName, email, password1) VALUES ('$username', '$email', '$password1')");
    //  //mysqli_query($conn, $sql);
    // $sql->execute();
    // $sql->close();
    // echo "successful";
}
//     $stmt = mysqli_stmt_init($conn);
//     if(!mysqli_stmt_prepare($stmt,$sql)){
//         header("location: ../registeration.php?error=stmtfailed");
//         exit();
//     }
//     $hashedPwd = password_hash($password1, PASSWORD_DEFAULT);


//     mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
//     mysquli_stmt_execute($stmt);
//     mysqli_stmt_close($stmt);
//     echo "successful"
//     header('location: registeration.php');
//     exit();



    require_once 'functions.php';
    require_once 'dbh.php';
    $error;

   
    
    if (emptyInputSignup( $username, $email, $password1, $password2)!==false){
        $error = "emptyinput";
        echo $error;
        exit();
    }
    // if (invalidEmail($email)!==false){
    //     header("location:registeration.php?error=invalidemail");
    //     exit();
    // }
    if (invalidUid($username)!==false){
        // <script src="signup.js">
        // var error = invalidUid;
        // </script>
        $error = "invalidUid";
        echo $error;
        exit();
    }
    if (pwdMatch($password1, $password2)!==false){
        // header("location:post.js");
         $error = "passwordsdontmatch";
         echo $error;

        // // $script = <<< JS
        // // console.log("done");
        // // alert("done");
        // // echo "done";
        // // $(function(){
        // //     $model = null;
        // //     if(is_null($model)){
        //      echo '<script type="text/JavaScript">';
        //      echo 'src="https://code.jquery.com/jquery-3.5.1.min.js">';
        //      echo '$.ajax({
        //         type: "POST",
        //         url: "registration.php",
        //         data:{
        //             error: "passwordsdontmatch",
        //         }, 
               
        //         datatype: "text";
        //      });';
        //      echo 'console.log("done");';
        //      echo '</script>';
           
          exit();
    }
    if (uidExists($conn, $username, $email)!==false){
        $error = "usernametaken";
        echo $error;
        exit();
    }
    createUser($conn, $username, $email, $password1);
    echo "success1";
// }
// function createUser($conn, $username, $email, $password1)
// {
//     $sql = "INSERT INTO users ( firstName, email, password1,) VALUES(?,?,?);";
//     $stmt = mysqli_stmt_init($conn);
//     if(!mysqli_stmt_prepare($stmt,$sql)){
//         header("location: ../registeration.php?error=stmtfailed");
//         exit();
//     }
//     $hashedPwd = password_hash($password1, PASSWORD_DEFAULT);


//     mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
//     mysquli_stmt_execute($stmt);
//     mysqli_stmt_close($stmt);
//     echo "successful"
//     // header("location: ../registeration.php?error=none");
//     // exit();
// }
    
// else{
//     header("location: ../registeration.php");
//     exit();
// }


     




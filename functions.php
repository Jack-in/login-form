<?php

function emptyInputSignup( $username, $email, $password1, $password2){
    $result;
    if(empty($username) || empty($email) || empty($password1) || empty($password2)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
// function invalidEmail($email){
//     $result;
//     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
//         $result = true;
//     }
//     else{
//         $result = false;
//     }
//     return $result;
// }
function pwdMatch($password1, $password2){
    $result;
    if($password1!== $password2){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE (firstName = ? or email = ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "stmtfailed";
        exit();
    }
   
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    // $stmt->execute();

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false; 
        return $result; 
    }
   
    
    mysqli_stmt_close($stmt);
}
function createUser($conn, $username, $email, $password1)
{
    //$sql = "INSERT INTO users ( firstName, email, password1,) VALUES ('$username', '$email', '$password1')";
    //$sql = $conn->prepare("INSERT INTO users (firstName, email, password1) VALUES ('$username', '$email', '$password1')");
    //mysql_query( $conn, $sql);
    //$sql->execute();
    //$sql->close();
    //echo "successful";
    $sql = "INSERT INTO users (firstName, email, password1) VALUES(?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "stmtfailed";
        exit();
    } else {
        //hashing password
        $hashedPwd = password_hash($password1, PASSWORD_DEFAULT);
    }

    mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    //echo "successful";
    $error = "none";
    echo $error;
    //header("location: registration.php?error=none");
    exit();   
}
function emptyInputLogin ($username, $password1)   
    {
    $result;
    if(empty($username) || empty($password1)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function loginUser($conn, $username, $password1)
{
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false){
        echo ("wronglogin");
        exit();
    }
    $pwdHashed = $uidExists["password1"];
    $checkpwd = password_verify($password1, $pwdHashed);
    
    if ($checkpwd === false){
        echo ("wrongpassword");
        exit();
    }
    else if ($checkpwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["userID"];
        $_SESSION["useruid"] = $uidExists["firstName"];
        echo("loginSuccess");
        exit();
    }
}
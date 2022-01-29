<?php
        //echo "<p>Fill</p>";
        if (isset($_POST["error"]))
        {
        // echo "<p>Fill</p>";
            if ($_POST["error"] == "emptyinput"){
            echo "<p>Fill in all fields</p>"; 
            }
            else if ($_POST["error"] == "invaliduid"){
                echo "<p>Choose a proper username</p>"; 
            }
            else if ($_POST["error"] == "invalidemail"){
                echo "<p>Choose a proper email</p>"; 
            }
            else if ($_POST["error"] == "passwordsdontmatch"){
                echo "<p>Passwords doesn't match!</p>"; 
            }
            else if ($_POST["error"] == "stmtfailed"){
                echo "<p>Something went wrong!</p>"; 
            }
            else if ($_POST["error"] == "usernametaken"){
                echo "<p>Username already taken!</p>"; 
            }
            else if ($_POST["error"] == "none"){
                echo "<p>You have signed up!</p>"; 
            }
            else if ($_POST["error"] == "wronglogin"){
                echo "<p>Incorrect username</p>"; 
            }
            else if ($_POST["error"] == "wrongpassword"){
                echo "<p>Incorrect password</p>"; 
            }
            else if ($_POST["error"] == "stmtfailed"){
                echo "<p>Execution failed</p>"; 
            }
            else if ($_POST["error"] == "loginSuccess"){
                echo "<script> location.href='index.php'; </script>"; 
            }
        }
    ?>
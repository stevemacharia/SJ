<?php
session_start();
include 'mysqlconnection.php';

 if (isset($_POST['login_btn']))
 {
     $username = $mysqli->real_escape_string($_POST['username']);
     $passw =$mysqli->real_escape_string($_POST['passw']);
     $passw = md5($passw);
     $sql1 = "SELECT * FROM S_Users WHERE S_Username='$username' AND S_Passw='$passw'";
     $result1 = mysqli_query($mysqli, $sql1);
    if (mysqli_num_rows($result1) == 1) {
            header("location: index.php");
            $_SESSION['adminname'] = $username;
            }
    
        else {
         $err="Sorry the username and password do not match. Try again";
         
         
        }
}



?>
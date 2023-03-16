<?php
session_start();
if(isset($_POST['login_user'])){
  
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);

    if(empty($email))
    {
        array_push($error,"you need email id");
    }
    if(empty($password))
    {
        array_push($error,"you need password");
    }

}

?>
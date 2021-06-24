<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")  {  
    $email=$_POST['email'] ;
    $password = $_POST['password'] ;
}
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    echo "Please , Must Enter Your Email " ;
  } 
  else {

    echo "your email is : $email  <br> <br>  your password is :$password";
  }

?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
include '_dbconnect.php';



$email = $_POST['username'];
    $pass = $_POST['pswd'];
    $cpass = $_POST['cpswd'];
    $sql="SELECT * FROM `users` WHERE user_email='$email'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($result);
if($row >0){
  $exist=true;
}
else {
  $exist=false;
}
if($pass==$cpass && !$email=="" && !$pass=="" && !$cpass=="" && $exist==false){
    $hash= password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `users` (`user_email`, `user_pass`, `timestamp`) VALUES ('$email', '$hash', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    $showalert=true;
    header("Location: index.php?signupsuccess=true"); 
    }
    else{
      
      header("location: index.php?signupsuccess=false");
}
}

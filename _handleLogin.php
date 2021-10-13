<?php
$showloginfo=false;
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['username'];
    $pass = $_POST['pswd'];

    $sql = "SELECT * FROM users WHERE user_email='$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['user_pass'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['sno'] = $row['sno'];
            $_SESSION['useremail'] = $email;
            echo "logged in". $email;
        } 
        header("Location: index.php");  
    }
    
    else{
      $showloginfo=true;
    header("Location: index.php");  }
}

  
?>

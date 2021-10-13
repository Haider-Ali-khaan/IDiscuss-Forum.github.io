<?php
$servername = "localhost";
$username = "root";
$pswd = "";
$db = "forum";
$conn = mysqli_connect($servername,$username,$pswd,$db);
if(!$conn){
    echo "error";
}
?>
<?php
session_start();
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="/forum">iDiscuss</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Top Categories
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
      $sql = "SELECT catagory_name, catagory_id FROM `forum` LIMIT 3";
      $result = mysqli_query($conn, $sql); 
      while($row = mysqli_fetch_assoc($result)){
        echo '<a class="dropdown-item" href="threadlist.php?catid='. $row['catagory_id']. '">' . $row['catagory_name']. '</a>'; 
      }        
      echo '</div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php" >Contact</a>
    </li>
  </ul>
  <div class="row mx-2">';
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  echo '<form class="form-inline my-2 my-lg-0" method="get" action="search.php">
    <input class="form-control mr-sm-2" name="search" type="search" actiion="search.php" placeholder="Search thread title" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
      <p class="text-light my-0 mx-2">Welcome '. $_SESSION['useremail']. ' </p>
      <a href="_logout.php" class="btn btn-outline-success ml-2">Logout</a>
      </form>';
}
else{ 
  echo '<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal" id="login">Login</button>
    <button class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#signupModal">Signup</button>';
  }
  echo '</div>
      </div>
      </nav>'; 
include '_loginModal.php';
include '_signupModal.php';
?>



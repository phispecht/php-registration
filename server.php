<?php

session_start();

$site = "Registration";
$title = "PHP project";
$sql = "";
$email = "";
$firstName = "user";

$con = mysqli_connect('localhost', 'root', '', 'userdatabase') or die("could not connect to database");

if(isset($_POST['submit'])){
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $userPassword = $_POST['userPassword'];

  $sql = "INSERT INTO users(firstName, lastName, email, userPassword)VALUES('$firstName', '$lastName', '$email', '$userPassword')";
}

if($sql != ""){
  if (mysqli_query($con, $sql))
  {
    echo "";
  }else
  {
    die("No Connection!");
  }
}
 
mysqli_close($con)
?>
<?php
require "db.php";

session_start();
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];





$q = "INSERT INTO `signup`(`first_name`, `last_name`, `emil`, `password`, `phone`) VALUES ('$first_name','$last_name','$email','$password','$phone')";

header("location: login.php");    

$result = mysqli_query($con , $q);


<?php
require "db.php";

$story = $_POST["story"];


$user=$_SESSION['User'];

$q_user="SELECT * FROM `signup` WHERE emil='$user'";

$UN = mysqli_query($con , $q_user);

while($sMs = mysqli_fetch_array($UN)){
    $user_name_stoey= $sMs['first_name'];
};
        
        
        

$q = "INSERT INTO `storys`(`username`,`story`) 
VALUES ('$user_name_stoey','$story')";

header("location: stories.php");    

$result = mysqli_query($con , $q);


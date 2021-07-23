<?php
require'../db.php';

$user=$_SESSION['User'];

$q_user="SELECT * FROM `signup` WHERE emil='$user'";

$UN = mysqli_query($con , $q_user);

while($sMs = mysqli_fetch_array($UN)){
    $user_name_stoey= $sMs['admin'];
};

if($user_name_stoey == "admin"){
    header("location: ../dashboard.php");
}else{
    header("location: ../stories.php");
}




?>
<?php
require 'db.php';




$lg_email =$_POST['email'];
$lg_password =$_POST['password'];


if(isset($_POST['login'])){
    if(empty($lg_email || $lg_password)){
        header('location: login.php?Empty= !... please fill all the fields');
    }else{
        
    $query = "SELECT * FROM `signup` WHERE emil='$lg_email' and password='$lg_password'";
    $result= mysqli_query($con , $query);

    if(mysqli_fetch_assoc($result)){
        $_SESSION['User']=$lg_email;
        header('location: story.php');
    }else{
        header('location: login.php?Invalid=!... Please check your username and password');
    }
 }
}




?>
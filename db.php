<?php
session_start();

$host = 'localhost';
$port = 'root';
$password = '';
$Database_Name= 'reachout';


$con= mysqli_connect($host,$port,$password,$Database_Name); 

if($con -> connect_error){
    die("Connection failed: ". $con -> connect_error);
}else{
  //echo 'connected';
}

?>
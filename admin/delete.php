<?php

require '../db.php';


$id = $_GET['id_delete'];

$sql = "DELETE FROM `storys` WHERE id ='$id' ";


mysqli_query($con, $sql);



header("location: ../dashboard.php");





?>
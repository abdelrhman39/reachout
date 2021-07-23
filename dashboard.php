<?php require 'db.php';

if(isset($_SESSION['User'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reachout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img style="position: relative;" src="img/out.png" width="260" height="100" alt="reachout logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"> <a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"> <a class="nav-link active" href="admin/query_admin.php">Dashboards</a></li>
                        <li class="nav-item"> <a class="nav-link" href="stories.php">Stories</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="depression.html">Depression</a></li>
                        <li class="nav-item"> <a class="nav-link" href="contact.html">Contact</a></li>
                        
                        
                         <?php
                            if(isset($_SESSION['User'])){
                                echo'<li class="nav-item"> <a class="nav-link" href="logout.php?logout">logOut</a></li>';}
                        else{
                                echo'<li class="nav-item"> <a class="nav-link" href="login.php">Login</a></li>';
                            };
                        ?>
                        
                    </ul>
                </div>
            </div>
        </nav> 
    
        <footer>
            <div class="container-fluid padding">
                <div class="row text-center">
                    <div class="col-md-12">
                            <hr class="light">
                            <p><img src="img/tel.png" width="15" height="15" alt="tel"/> Free 24/7 help line: <a href="tel:977">977</a></p> 
                            <p> Here are some hospitals with the best doctors:</p>
                    <p> <img src="img/tel.png" width="15" height="15" alt="tel"/> Sulaiman AlHabib hospital: <a href="tel:+966115259999">+966 115259999</a></p>
                    <p> <img src="img/tel.png" width="15" height="15" alt="tel"/> Kingdom hospital: <a href="tel:+966112751111">+966 112751111</a></p>

                    </div>

                </div>

            </div>
        </footer>
    
 </body>
</html>


<?php

}else{
    header('location: login.php');
}


?>

 
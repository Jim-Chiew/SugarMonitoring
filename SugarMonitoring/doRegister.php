<?php
/*
This page registers user for the website.
This page is deliberately left blank.


*/
include('dbFunction.php');

$username = $_POST['username'];
$password = $_POST['password'];
$height = $_POST['height'];
$weight = $_POST['weight'];

$query = "INSERT INTO user 
(username, password, height, weight) 
VALUES ('$username', SHA1('$password'), $height, $weight)";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

if($result){
    $message = "Account Created Successfully";
} else {
    $message = "Error, Account not Created";
}

mysqli_close($link);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <title>Registering</title>

        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>

        <link href="css/custom.css" rel="stylesheet" type="text/css"/>

        <style>
            h1 {
                margin-left: 25%;
                padding-top: 10%;
                width: 50%;
                text-align: center;
                font-size: 65px
            }

            h5 {
                margin-left: 25%;
                padding-top: 2%;
                width: 50%;
                text-align: center
            }
        </style>
    </head>
    <body>
    <?php include "NavbarMain.php" ?>

    <div class="container mt-5 welcome">
        <h1>Welcome to the family</h1>
        <h5>Return to main page <a href='index.php'>here</a></h5>
    </div>

    </body>
</html>